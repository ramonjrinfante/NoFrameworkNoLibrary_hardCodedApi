<?php 
	function sample_post_request(){
		$json = file_get_contents('php://input');
		echo $json;
	}
	sample_post_request();
?>