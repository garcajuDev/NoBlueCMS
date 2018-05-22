<?php  
	  class Movie{
	  	private $id;
	  	private $title;
	  	private $title_url;
	  	private $photo;
	  	private $dateAdd;
	  	private $content_id;
	  	private $username;
	  	private $category_id;

	  	public function __get($property){
				if(property_exists($this, $property)) {
	        		return $this->$property;
	    		}
	    	return null;
		}
	  }
?>