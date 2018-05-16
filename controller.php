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
			$url = $args['url'];
			$result['movie'] = $this->c->modelo->getArticleByUrl($url);
			$response = $this->c->view->render($response, "article.php", $result);
			return $response;
		}

		public function getCategoriesAPI($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			foreach ($res as $key => $category) {
				$result[$key]['id'] = $category->id;
				$result[$key]['name'] = $category->name;
				$result[$key]['photo'] = $category->photo;
				$result[$key]['description'] = $category->description;
			}
			$response = $response->withJson($result);
			return $response;
		}

		public function getCategoriesAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getCategoriesId($id);
			foreach ($res as $key => $category) {
				$result[$key]['id'] = $category->id;
				$result[$key]['name'] = $category->name;
				$result[$key]['photo'] = $category->photo;
				$result[$key]['description'] = $category->description;
			}
			$response = $response->withJson($result);
			return $response;
		}

		public function getArticleAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getArticle($id);
			$this->getArticlesJson($res);
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
			}
			if ($nArticles != null) {
				$res = $this->getArticlesAPINArticles($nArticles);
				$resultado = $this->getResult($res);
			}
			$response = $response->withJson($resultado);
			return $response;
		}

		public function getArticlesAPIBetween($min, $max){
			$articles = $this->c->modelo->getArticlesBetween($min, $max);
			return $articles;
		}

		public function getArticlesAPINArticles($number){
			$articles = $this->c->modelo->getNArticles($number);
			return $articles;
		}

		public function getResult($articles){
			$result =[];
			foreach ($articles as $key => $article) {
					$result[$key]['id'] = $article->id;
					$result[$key]['title'] = $article->title;
					$result[$key]['title_url'] = $article->title_url;
					$result[$key]['photo'] = $article->photo;
					$result[$key]['dateAdd'] = $article->dateAdd;
					$result[$key]['content_url'] = $article->content_url;
					$result[$key]['username'] = $article->username;
			}
			return $result;
		}
	}
?>