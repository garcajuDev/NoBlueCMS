<?php  
	require_once "genre.php";// Equals "Category"
	require_once "movie.php";// Equals "Article"

	class Model{
		private $_conect;

		public function __construct($dataConection){
			$this->_conect = new PDO("mysql:host={$dataConection['host']}; dbname={$dataConection['dbname']}", $dataConection['user'], $dataConection['password']);
			$this->_conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		}

		
	}
?>