<?php
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($conn, trim($_POST['username']));
	$name = mysqli_real_escape_string($conn, trim($_POST['name']));
	$lastname = mysqli_real_escape_string($conn, trim($_POST['lastname']));
	$password1 = mysqli_real_escape_string($conn, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($conn, trim($_POST['password2']));

	if(!empty($username) && !empty($name) && !empty($lastname) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `signup` (username, name, lastname, password) VALUES ('$username', '$name', '$lastname' , SHA('$password2'))";
			mysqli_query($dbc,$query);
			$home_url = 'log.php' . $_SERVER['HTTP_HOST'];

			header('Location: log.php ' );
			mysqli_close($dbc); 
		exit(); 
		} 
		else { 
			echo 'Логин уже существует'; 
	}

	}



	
}
?>