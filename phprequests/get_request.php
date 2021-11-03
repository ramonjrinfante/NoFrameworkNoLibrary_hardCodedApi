<?php 
	function sample_get_request(){
		echo json_encode(array(
			"firstname"=>"Ram",
			"lastname"=>"Infante",
			"status"=>"This data is from Server(PHP HARD CODED)",
		));
	}
	sample_get_request();
?>