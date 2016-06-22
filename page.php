<?php 
 
class page{ 	
  
  var $page; 

	function __construct($current_page) { 
		$this->page = $current_page; 
	} 
  

	function get_name(){
		return $this->name;
	}
}

?> 