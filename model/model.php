<?php  
	require_once "genre.php";// Equals "Category"
	require_once "movie.php";// Equals "Article"

	class Model{
		private $_conect;

		public function __construct($dataConection){
			$this->_conect = new PDO("mysql:host={$dataConection['host']}; dbname={$dataConection['dbname']}", $dataConection['user'], $dataConection['password']);
			$this->_conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		}

		//Returns genre(categories) Objects array to home.php
		public function getCategories(){
			$res = $this->_conect->query(
				"SELECT id, name, photo, description FROM categories;"
			);
			$categoriesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'genre');
			return $categoriesList;
		}

		public function getCategoriesId($id){
			$res = $this->_conect->query(
				"SELECT id, name, photo, description FROM categories WHERE id = {$id};"
			);
			$category = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'genre');
			return $category;
		}

		public function getLastThreeArticles(){
			$res = $this->_conect->query(
				"SELECT * FROM articles ORDER BY id DESC LIMIT 3;"
			);
			$articlesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
		}

		public function getArticlesByIdCategory($id){
			$res = $this->_conect->query(
				"SELECT articles.id, articles.title, articles.title_url, articles.photo, articles.dateAdd, articles.content_id, articles.username FROM `articles` JOIN in_category ON (articles.id = article_id) WHERE category_id = {$id};"
			);
			$articlesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
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