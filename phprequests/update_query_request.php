<?php
	function update_data(){
		include("../connection/db_connection.php");
		$data_decoded = json_decode(file_get_contents('php://input'));
		
		$sql = "UPDATE users
			SET firstname = '". $data_decoded->firstname ."', lastname = '". $data_decoded->lastname ."'
			WHERE id = '". $data_decoded->id ."'";

		if (mysqli_query($conn, $sql)) {
			echo "Affected rows: " . $conn->affected_rows;
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	update_data();
?>