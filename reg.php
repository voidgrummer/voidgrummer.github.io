<?php
	require_once "db.php";
	require_once 'regg.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация личного кабинета</title>
	<link href="style/style.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="images/bg_1.jpg">
	<div id="pryam">
		<div id="h1">
			<font face="ARIAL BLACK" size="5">
				<h2 align="center">Регистрация:</h2>
			</font>	
		</div>
		<div id="section">
			<section>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="input100">
						<input type="text" name="username" placeholder="Введите ваш логин:"><br><br>
						<input type="text" name="name" placeholder="Введите ваше имя:"><br><br>
						<input type="text" name="lastname" placeholder="Введите вашу фамилию:"><br><br>
						<input type="password" name="password1" placeholder="Введите пароль:"><br><br>
						<input type="password" name="password2" placeholder="Введите пароль еще раз:"><br><br>
					</div>
					
						<button id="but_1" type="submit" name="submit">Регистрация</button><br><br><br><br><br>
					
					<a class="a" href="log.php">Уже имеете аккаунт?</a>
				</form>
			</section>
		</div>
</body>
</html>