<?php
	$server = "localhost";
	$database = "php_crud_demo";
	$userName = "root";
	$password = "";

//	connection establishment
	$conn = new mysqli($server, $userName, $password, $database);

	if ($conn->connect_errno) {
		echo($conn->connect_error);
		exit();
	} else {
		echo("Connection Successful.<br>");
	}

	try {
//		sql query going to execute
		$sqlQuery = "SELECT * FROM user_Info";
//		execute query
		$result = $conn->query($sqlQuery);
		print_r($result);
//		extract results having in MySQLi result object
		foreach ($result as $row) {
			echo("<br>");
			print_r($row);
		}
	} catch (Exception $e) {
		echo($e);
	}
