<?php
	function insert_data(){
		include("../connection/db_connection.php");
		$data_decoded = json_decode(file_get_contents('php://input'));
		$sql = "INSERT INTO users (firstname, lastname) VALUES ('". $data_decoded->firstname . "','". $data_decoded->lastname ."')";

		if (mysqli_query($conn, $sql)) {
			$last_id = mysqli_insert_id($conn);
      		echo $last_id;
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	insert_data();
?>