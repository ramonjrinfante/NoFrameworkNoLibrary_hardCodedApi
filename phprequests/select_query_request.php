<?php
	function get_data(){
		include("../connection/db_connection.php");
		
		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);
		$data_array = $result->fetch_all(MYSQLI_ASSOC);
		// echo $result->num_rows;
		echo json_encode($data_array);
	}
	get_data();
?>