<?php

class util {
	
  public function testInput($data) {
	$data = trim(strip_tags(stripslashes(htmlspecialchars($data))));
		return $data;
	}

	//Method for displaying Messages 

   public function showMessage($type, $message) {
   		return'<div class="alert alert-' . $type .' alert-dismissible fade show" role="alert">
   		  <strong>' . $message . '</strong> 
   		  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
   		</div>
   		    ';
}
}
?>