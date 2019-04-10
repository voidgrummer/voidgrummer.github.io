<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lesson";

	

	$conn = new mysqli($servername, $username, $password, $dbname);

	
	$conn->close();
?>