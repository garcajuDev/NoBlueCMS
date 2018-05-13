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
	}
?>