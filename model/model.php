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
		
		public function getArticle($id){
			$res = $this->_conect->query(
				"SELECT * FROM articles WHERE id LIKE '{$id}';"
			);
			$article = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $article;
		}

		public function getArticleByUrl($url){
			$res = $this->_conect->query(
				"SELECT * FROM articles WHERE title_url LIKE '%{$url}%';"
			);
			$article= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $article;
		}

		public function getArticlesMin($min){
			$res = $this->_conect->query(
				"SELECT * FROM articles WHERE dateAdd > (SELECT dateAdd FROM ARTICLES WHERE dateAdd LIKE '{$min}';"//Revisar Carmen
			);
			$articlesList= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
		}


		public function getArticlesMax($max){
			$res = $this->_conect->query(
				"SELECT * FROM articles WHERE dateAdd < (SELECT dateAdd FROM articles WHERE dateAdd LIKE '{$max}');"//Revisar Carmen
			);
			$articlesList= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
		}				
	}
?>