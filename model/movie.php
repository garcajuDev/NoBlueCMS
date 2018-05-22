<?php  
	  class Movie{
	  	private $id;
	  	private $title;
	  	private $title_url;
	  	private $billboard;
	  	private $dateAdd;
	  	private $content_id;
	  	private $username;
	  	private $category_id;
	  	private $photo1;
	  	private $photo2;
	  	private $firstPart;
	  	private $secondPart;

	  	public function __get($property){
				if(property_exists($this, $property)) {
	        		return $this->$property;
	    		}
	    	return null;
		}
	  }
?>