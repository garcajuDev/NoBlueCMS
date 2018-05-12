<?php  
	class Controller{
		private $c;
		
		function __construct($c){
		 	$this->c=$c;
		}

		public function loadHome($request, $response, $args){
			$res = $this->c->modelo->getCategories();
			$categories['founded'] = $res;
			$response = $this->c->view->render($response, "home.php", $categories);
			return $response;
		}

		public function getGenre($request, $response, $args){
			
		}
	}
?>