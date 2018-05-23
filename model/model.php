<?php  
	require_once "genre.php";// Equals "Category"
	require_once "movie.php";// Equals "Article"

	class Model{
		private $_conect;

		public function __construct($dataConection){
			$this->_conect = new PDO("mysql:host={$dataConection['host']}; dbname={$dataConection['dbname']};charset=utf8", $dataConection['user'], $dataConection['password']);
			$this->_conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		}

		//Returns genre(categories) Objects array to home.php
		public function getCategories(){
			$res = $this->_conect->query(
				"SELECT id, name, photo, description FROM categories;"
			);
			$categoriesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Genre');
			return $categoriesList;
		}

		public function getCategoriesAPI(){
			$res = $this->_conect->query(
				"SELECT id, name, photo, description FROM categories;"
			);
			$categoriesList = $res->fetchAll(PDO::FETCH_ASSOC);
			return $categoriesList;
		}

		public function getArticlesAPI(){
			$res = $this->_conect->query(
				"SELECT * FROM articles;"
			);
			$articlesList = $res->fetchAll(PDO::FETCH_ASSOC);
			return $articlesList;
		}

		public function getCategoriesId($id){
			$res = $this->_conect->query(
				"SELECT id, name, photo, description FROM categories WHERE id = {$id};"
			);
			$category = $res->fetch(PDO::FETCH_ASSOC);
			return $category;
		}

		public function getLastThreeArticles(){
			$res = $this->_conect->query(
				"SELECT * FROM articles ORDER BY id DESC LIMIT 3;"
			);
			$articlesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movie');
			return $articlesList;
		}

		public function getArticlesByIdCategory($id){
			$res = $this->_conect->query(
				"SELECT articles.id, articles.title, articles.title_url, articles.billboard, articles.dateAdd, articles.content_id, articles.username FROM `articles` JOIN in_category ON (articles.id = article_id) WHERE category_id = {$id};"
			);
			$articlesList = $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movie');
			return $articlesList;
		}
		
		public function getArticle($id){
			$res = $this->_conect->query(
				"SELECT * FROM articles WHERE id = {$id};"
			);
			$article = $res->fetch(PDO::FETCH_ASSOC);
			return $article;
		}

		public function getArticleByUrl($url){
			$res = $this->_conect->query(
				"SELECT articles.id, articles.title,articles.title_url,articles.billboard,articles.dateAdd,articles.username, in_category.category_id, in_content.photo1, in_content.photo2, in_content.fichaTec, in_content.firstPart, in_content.secondPart FROM articles 
					join in_category on (articles.id = in_category.article_id) 
					join in_content on (articles.content_id = in_content.id)
					WHERE articles.title_url LIKE '%{$url}%';"
			);
			$article= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $article;
		}

		public function getArticlesBetween($minus, $maximus){
			$minus = date("Y-m-d",strtotime($minus));
			$maximus = date("Y-m-d",strtotime($maximus));
			$res = $this->_conect->query(
				"SELECT articles.id,articles.title,articles.billboard,articles.title_url,DATE_FORMAT(articles.dateAdd,'%d-%m-%Y') AS dateAdd, categories.id AS idCategory from articles 
					join in_category on (articles.id = in_category.article_id) 
					join categories on (in_category.category_id = categories.id) 
					left join in_content on (articles.id=in_content.article_id) 
					where articles.dateAdd between '{$minus}' and  '{$maximus}';"
			);
			$articlesList= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');

			return $articlesList;
		}

		public function getNArticles($num){
			$res = $this->_conect->query(
				"SELECT * , category_id as idCategory from articles 
				join in_category on (articles.id = in_category.article_id) 
				ORDER BY id DESC LIMIT {$num};"
			);
			$articlesList= $res->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'movie');
			return $articlesList;
		}		

		public function getHateoasQueryCategory($id){
			$res = $this->_conect->query(
				"SELECT article_id FROM in_category WHERE category_id = '{$id}';"
			);
			$articlesIdList = $res->fetchAll(PDO::FETCH_ASSOC);
			return $articlesIdList;
		}	

		public function getHateoasQueryArticle($id){
			$res = $this->_conect->query(
				"SELECT category_id FROM in_category WHERE article_id = '{$id}';"
			);
			$categoryIdList = $res->fetchAll(PDO::FETCH_ASSOC);
			return $categoryIdList;
		}	
	}
?>