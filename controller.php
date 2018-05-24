<?php  
	class Controller{
		private $c;
		
		function __construct($c){
		 	$this->c=$c;
		}

		public function loadHome($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			$resThree = $this->c->modelo->getLastThreeArticles();
			$categories['founded'] = $res;
			$categories['articles'] = $resThree; 
			$response = $this->c->view->render($response, "home.php", $categories);
			return $response;
		}

		public function loadCategoryScreen($request, $response, $args){
			$id = $args['cod'];
			$res = $this->c->modelo->getArticlesByIdCategory($id);
			$resCat = $this->c->modelo->getCategories();
			$categories['founded'] = $resCat;
			$categories['articles'] = $res; 
			$response = $this->c->view->render($response, "category.php", $categories);
			return $response;
		}

		public function loadArticleScreen($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			$url = $args['url'];
			$result['founded'] = $res;
			$result['movie'] = $this->c->modelo->getArticleByUrl($url);
			$response = $this->c->view->render($response, "article.php", $result);
			return $response;
		}

		public function getCategoriesAPI($request, $response, $args){
			$res = $this->c->modelo->getCategoriesAPI();
			
			foreach ($res as $key => $category) {
				$result[$key] = $category;
				$id = $category['id'];
				$hateoas = $this->getHateoasCategories($id);
				$result[$key]['links']=$hateoas;
			}
			$response = $response->withJson($result);
			return $response;
		}

		public function getCategoriesAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getCategoriesId($id);
			$hateoas = $this->getHateoasCategories($id);
			$res['links']=$hateoas;
			$response = $response->withJson($res);
			return $response;
		}

		public function getArticleAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getArticle($id);
			$hateoas = $this->getHateoasArticle($id);
			$res['links']=$hateoas;
			$response = $response->withJson($res);
			return $response; 
		}

		public function getArticlesAPIFilter($request, $response, $args){
			$minim = $request->getQueryParam('min');
			$maxim = $request->getQueryParam('max');
			$nArticles = $request->getQueryParam('n');
			if ($minim != null && $maxim != null) {
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			}elseif ($minim == null && $maxim != null) {
				$minim = date("d-m-Y",1);
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);		
			}elseif ($minim != null && $maxim == null) {
				$maxim = date("d-m-Y");
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			}elseif ($minim == null && $maxim == null) {
				$minim = date("d-m-Y",1);
				$maxim = date("d-m-Y");
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			}elseif (count($args)==0){
				$res = $this->getArticlesList();
				$resultado = $this->getResult($res); 
			}
			if ($nArticles != null) {	
				$res = $this->getArticlesAPINArticles($nArticles);
				$resultado = $this->getResult($res);
			}
			$response = $response->withJson($resultado);
			return $response;
		}

		public function getArticlesList(){
			$articlesList = $this->c->modelo->getArticlesAPI();
			return $articlesList;
		}

		public function getArticlesAPIBetween($min, $max){
			$articles = $this->c->modelo->getArticlesBetween($min, $max);
			return $articles;
		}

		public function getArticlesAPINArticles($number){
			$articles = $this->c->modelo->getNArticles($number);
			return $articles;
		}

		public function NotFound($request, $response, $args){
			$result =[];
			$result['code']="405";
			$result['msg'] = "No existe web asociada al recurso";
			$response = $response->withJson($result);
			return $response;
			
		}

		public function loadDocAPI($request, $response, $args){
			$categories=[];
			$response = $this->c->view->render($response, "apiDOC.html", $categories);
			return $response;
		}
 

		public function getResult($articles){
			$result =[];
			foreach ($articles as $key => $article) {
					$result[$key]['id'] = $article->id;
					$result[$key]['title'] = $article->title;
					$result[$key]['title_url'] = $article->title_url;
					$result[$key]['photo'] = $article->billboard;
					$result[$key]['dateAdd'] = $article->dateAdd;
					$result[$key]['links'] = "{$this->c->get('request')->getUri()->getScheme()}"."://"."{$this->c->get('request')->getUri()->getHost()}{$this->c->get('request')->getUri()->getBasePath()}/api/categorias/{$article->idCategory}";
			}
			return $result;
		}

		public function getHateoasCategories($id){
			$rel=$this->c->modelo->getHateoasQueryCategory($id);
			foreach ($rel as $id_articles) {
				$respon[]="{$this->c->get('request')->getUri()->getScheme()}"."://"."{$this->c->get('request')->getUri()->getHost()}{$this->c->get('request')->getUri()->getBasePath()}/api/articulos/{$id_articles['article_id']}";
			}
			return $respon;
		}

		public function getHateoasArticle($id){
			$rel=$this->c->modelo->getHateoasQueryArticle($id);
			foreach ($rel as $id_category) {
				$respon[]="{$this->c->get('request')->getUri()->getScheme()}"."://"."{$this->c->get('request')->getUri()->getHost()}{$this->c->get('request')->getUri()->getBasePath()}/api/categorias/{$id_category['category_id']}";
			}
			return $respon;
		}
	}
?>