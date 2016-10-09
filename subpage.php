<?php 
 
class subpage{ 	

  var $children; //get the children folder
  var $name;
  var $txtfile; // get the current text file
  var $images;
  var $caption;
  var $template; 

	public function __construct($current_page) { 
		$this->page = $current_page; 
		$this->children = array();
		//print_r($this);
		$subfolders = dir::read("content/".$this->page);
    foreach ($subfolders as $subfolder){
    	$pathSub = "content/".$this->page.'/'.$subfolder;
    	if(!is_dir($pathSub)) continue;
    	$this->children[$subfolder] = new StdClass;
    	$this->children[$subfolder]->name = $subfolder; 

			//get the current text file
			$files = dir::read($pathSub);
			foreach ($files as $file){
				if(f::extension($file) == "txt"):
					// get the txt file
					$this->children[$subfolder]->txtfile = $file;
					// get the fields from the txt file
					$content = data::read('content/'.$this->page.'/'.$this->children[$subfolder]->name.'/'.$file, 'md');
					//return content as key and value - call it $page->nomduchamp dans php
					foreach($content as $key => $value){
			      $this->children[$subfolder]->{$key} = $value;
			    }
				endif;
				// if files are images - add images in an array
				if(f::extension($file) == "jpg" || f::extension($file) == "png" || f::extension($file) == "svg" || f::extension($file) == "gif" || f::extension($file) == "jpeg" || f::extension($file) == "JPG"):
	        $imagearray[] = array('file'=>$file, 'url'=>'content/'.$this->page.'/'.$subfolder.'/'.$file);
	        $this->children[$subfolder]->images = $imagearray; 
	      endif;
			}
			unset($imagearray);
		}
	} 
  
	public function name(){
		return $this->children->name;
	}

	public function images(){
		return $this->children->images;
	}

	public function template(){
    $this->children->template = str_replace(".txt", "", $this->txtfile); 
    return $this->children->template;
	}
}

?> 