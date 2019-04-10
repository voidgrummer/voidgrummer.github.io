<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lesson";

	

	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM signup" ;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "  ". $row ["user_id"];
		}
	}

	$conn->close();
?>