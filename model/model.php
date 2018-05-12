<?php  
	require_once "genre.php";// Equals "Category"
	require_once "movie.php";// Equals "Article"

	class Model{
		private $_conect;

		public function __construct($dataConection){
			$this->_conect = new PDO("mysql:host={$dataConection['host']}; dbname={$dataConection['dbname']}", $dataConection['user'], $dataConection['password']);
			$this->_conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		}

		//Returns genre(categories) Objects array or 
		//a only one genre in array if receives a id as a paramenter
		public function getCategories(){
			$res = $this->_conect->query(
				//Carmen SQL
				//Mio provisional
				"SELECT * FROM categories; "
			);
			$categoriesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'genre');
			return $categoriesList;
		}

		//Returns movie(articles) Objest array or
		//a only one movie in array if receives a id as a paremeter
		public function getArticles($id){
			$res = $this->_conect->query(
				//Carmen SQL
			);
			$articlesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
		}

		
	}
?>