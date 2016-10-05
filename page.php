<?php 
 
class page{ 	
  
  var $page; //get the current folder
  var $txtfile; // get the current text file
  var $images;
  var $caption;
  var $template; 

	public function __construct($current_page) { 
		// get the current page
		$this->page = $current_page; 

		//get the current text file
		$files = dir::read("content/".$this->page);
		foreach ($files as $file){
			if(f::extension($file) == "txt"):
				$this->txtfile = $file;
				// get the fields from the txt file
				$content = data::read('content/'.$this->page.'/'.$file, 'md');
				//return content as key and value - call it $subpage->nomduchamp dans php
				foreach($content as $key => $value){
		      $this->{$key} = $value;
		    }
			endif;
			// if files are images - add images in an array
			if(f::extension($file) == "jpg" || f::extension($file) == "png" || f::extension($file) == "svg" || f::extension($file) == "gif" || f::extension($file) == "jpeg" || f::extension($file) == "JPG"):
        // add caption to image array
        if(file_exists('content/'.$this->page.'/'.$file.'.txt')):
	        $content = data::read('content/'.$this->page.'/'.$file.'.txt', 'md');
					foreach($content as $key => $caption){
			      $captionarray[$key] = $caption;
			    }
			    $imagearray[] = array('file'=>$file, 'url'=>'content/'.$this->page.'/'.$file, 'captions'=>$captionarray);
        	$this->images = $imagearray;
        	// print_r($imagearray);
        else:
        	$imagearray[] = array('file'=>$file, 'url'=>'content/'.$this->page.'/'.$file);
        	$this->images = $imagearray;
        endif;
      endif;
		}
	} 
  
	public function name(){
		return $this->page;
	}

	public function images(){
		return $this->images;
	}

	public function template(){
    $this->template = str_replace(".txt", "", $this->txtfile); 
    return $this->template;
	}
}

?> 