<?php  
	class Controller{
		private $c;
		
		function __construct($c){
		 	$this->c=$c;
		}

		//Carga la página principal
		public function loadHome($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			$resThree = $this->c->modelo->getLastThreeArticles();
			$categories['founded'] = $res;
			$categories['articles'] = $resThree; 
			$response = $this->c->view->render($response, "home.php", $categories);
			return $response;
		}

		//Carga la página de Categorías
		public function loadCategoryScreen($request, $response, $args){
			$id = $args['cod'];
			$res = $this->c->modelo->getArticlesByIdCategory($id);
			$resCat = $this->c->modelo->getCategories();
			$categories['founded'] = $resCat;
			$categories['articles'] = $res; 
			$response = $this->c->view->render($response, "category.php", $categories);
			return $response;
		}

		//Carga la página de cada película o artículo
		public function loadArticleScreen($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			$url = $args['url'];
			$result['founded'] = $res;
			$result['movie'] = $this->c->modelo->getArticleByUrl($url);
			$response = $this->c->view->render($response, "article.php", $result);
			return $response;
		}

		//Métodos API

		/*Muestra en formato JSON una lista de categorías y los artículos asociados a
		cada una de ellas mediante un link*/
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

		/*Muestra en formato JSON una categoría introducendo mediante la barra del navegador
		su id y los artículos asociados a ella mediante un link*/
		public function getCategoriesAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getCategoriesId($id);
			$hateoas = $this->getHateoasCategories($id);
			$res['links']=$hateoas;
			$response = $response->withJson($res);
			return $response;
		}

		/*Muestra en formato JSON un artículo introducendo mediante la barra del navegador
		su id y las categorías asociadas a el mediante un link*/
		public function getArticleAPIId($request, $response, $args){
			$id = $args['id'];
			$res = $this->c->modelo->getArticle($id);
			$hateoas = $this->getHateoasArticle($id);
			$res['links']=$hateoas;
			$response = $response->withJson($res);
			return $response; 
		}

		/*Muestra los artículos requeridos estableciendo diferentes filtros o ninguno*/
		public function getArticlesAPIFilter($request, $response, $args){
			$minim = $request->getQueryParam('min');//filtro ?min="fecha mínima de publicación del artículo en formato europeo"
			$maxim = $request->getQueryParam('max');//filtro ?max="fecha máxima de publicación del artículo en formato europeo"
			$nArticles = $request->getQueryParam('n');//filtro ?n="últimos n artículos publicados"

			/*Obtiene los artículos publicados entre la fecha $minim y la fecha $maxim*/
			if ($minim != null && $maxim != null) {
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			/*Obtiene todos los artículos publicados hasta la fecha $maxim*/
			}elseif ($minim == null && $maxim != null) {
				$minim = date("d-m-Y",1);
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			/*Obitiene todos los artículos publicados desde la fecha $minim*/		
			}elseif ($minim != null && $maxim == null) {
				$maxim = date("d-m-Y");
				$res = $this->getArticlesAPIBetween($minim, $maxim);
				$resultado = $this->getResult($res);
			/*Obtiene la lista entera de articulos al no establecer filtro por fechas*/
			}elseif (count($args)==0){
				$res = $this->getArticlesList();
				$resultado = $this->getResult($res); 
			}/*Obitene una lista con los último $n artículos publicados*/
			if ($nArticles != null) {	
				$res = $this->getArticlesAPINArticles($nArticles);
				$resultado = $this->getResult($res);
			}
			$response = $response->withJson($resultado);
			return $response;
		}

		/*Método usado por getArticlesAPIFilter cuando no se ha establecido ningún filtro*/
		public function getArticlesList(){
			$articlesList = $this->c->modelo->getArticlesAPI();
			return $articlesList;
		}

		/*Método usado por getArticlesAPIFilter cuando se ha establecido algun filtro por fecha*/
		public function getArticlesAPIBetween($min, $max){
			$articles = $this->c->modelo->getArticlesBetween($min, $max);
			return $articles;
		}

		/*Método usado por getArticlesAPIFilter cuando se ha establecido el filtro ?n= (ultimo n articulos)*/
		public function getArticlesAPINArticles($number){
			$articles = $this->c->modelo->getNArticles($number);
			return $articles;
		}

		/*Métoodo que devuelve un mensage de error en caso de no encontrar el recurso requerido*/
		public function NotFound($request, $response, $args){
			$result =[];
			$result['code']="405";
			$result['msg'] = "No existe web asociada al recurso";
			$response = $response->withJson($result);
			return $response;
			
		}

		/*Método que inicia la documentación de la API en formato web*/
		public function loadDocAPI($request, $response, $args){
			$categories=[];
			$response = $this->c->view->render($response, "apiDOC.html", $categories);
			return $response;
		}
 
		/*Método usado por el método getArticlesAPIFilter() para montar el array asociativo con los datos de la consulta a la clase Modelo*/
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

		/*Método que monta un array asociativo para establecer los links que relaciona a cada categoría con los artículos que se relaciona mediante el id de ellos*/
		public function getHateoasCategories($id){
			$rel=$this->c->modelo->getHateoasQueryCategory($id);
			foreach ($rel as $id_articles) {
				$respon[]="{$this->c->get('request')->getUri()->getScheme()}"."://"."{$this->c->get('request')->getUri()->getHost()}{$this->c->get('request')->getUri()->getBasePath()}/api/articulos/{$id_articles['article_id']}";
			}
			return $respon;
		}

		/*Método que monta un array asociativo para establecer los links que relaciona a cada artículo con las categorías que se relaciona mediante el id de ellas*/
		public function getHateoasArticle($id){
			$rel=$this->c->modelo->getHateoasQueryArticle($id);
			foreach ($rel as $id_category) {
				$respon[]="{$this->c->get('request')->getUri()->getScheme()}"."://"."{$this->c->get('request')->getUri()->getHost()}{$this->c->get('request')->getUri()->getBasePath()}/api/categorias/{$id_category['category_id']}";
			}
			return $respon;
		}
	}
?>