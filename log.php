<?php
	require_once "db.php";
	require_once "logg.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Вход в личный кабинет</title>
	<link href="style/style.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="images/bg_1.jpg">
	<div id="pryam">
		<div id="h1">
			<font face="ARIAL BLACK" size="5">
				<h2 align="center">Вход</h2><br>
			</font>	
		</div>

		<div id="section">
			<section>
				
				<?php
					if(empty($_COOKIE['username'])) {
				?>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="input100">
						<input type="text" name="username" placeholder="Введите логин:"><br><br>
				    </div>
					<div class="input100">
						<input type="password" name="password" placeholder="Введите пароль:"><br><br>
					</div>
					<button id="but_1" type="submit" name="submit">Вход</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<a class="a" href="reg.php">Регистрация</a>
					</form>
				<?php
				}
				else {
					?><br><br>
					<button id="but_1" href="reg.php"><a class="a_1" href="preg.php"> Профиль</a></button><br><br>
					<button id="but_1"><a class="a_1" href="exit.php">Выйти</a></button>
				<?php	
				}
				?>
			</section>
			
			
		
		</div>	
	</div>

</body>
</html>