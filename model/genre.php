<?php 
	class Genre{
		private $id;
		private $name;
		private $photo;
		private $description;

		public function __get($property){
				if(property_exists($this, $property)) {
	        		return $this->$property;
	    		}
	    	return null;
		}
	}
?>