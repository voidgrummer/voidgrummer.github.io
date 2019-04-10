<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lesson";

	

	$conn = new mysqli($servername, $username, $password, $dbname);

	
	$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<meta charset="utf-8">
	<title>Название</title>
</head>
<body>
	<div class="nav">
		<div class="col-left">
			<h2><a href="log.php">Название</a></h2>
		</div>
		<div class="col-right">
			<h2><a href="profile.php" style="color:#f65121"> Личный кабинет</a></h2>	
		</div>
	</div>
</body>
</html>