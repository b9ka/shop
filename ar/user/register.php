<?php
require_once "../install.php";
if (isset($_POST['submit'])) {
	$login = $_POST['login'];
	$pass = $_POST['passwd'];

	$query = "SELECT * FROM `user` WHERE `login` = '$login'";
	$result = mysqli_query($link, $query);
	if (mysqli_num_rows($result)) {
		echo "login is exist<br>";
	} else {
		echo "OK<br>";
		$query = "INSERT INTO `user` (`id`, `login`, `password`, `root`) VALUES (NULL, '$login', '$pass', 0);";
		mysqli_query($link, $query);
		header("Location: login.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style>
		.mt-20{
			margin-top: 20px;
		}
		.btn-reg{
			margin-left: 33%;
			width: 33%;
			margin-top: 50%;
		}
		.btn-reg>p>input{
			height: 30px;
			background: rgba(21, 128, 26, 0.75);
			width: 100%;
			height: ;
			text-decoration: none;
			color: white;
			text-align: center;
			font-size: 16px;
		}
		.btn-reg>p>button{
			text-decoration: none;
			display: block;
			padding: 3px;
			background: rgba(21, 128, 26, 0.75);
			width: 80%;
			margin-left: 10%;
			text-decoration: none;
			color: white;
			text-align: center;
			font-size: 15px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<form action="register.php" method="POST" name="register.php">
	<div class="btn-reg">
		<p><input type="text" name="login" value="" placeholder="login"></p>
		<p><input type="password" name="passwd" value=""></p>
		<p><button type="submit" name="submit" value="OK">OK</button></p>
	</div>
</form>
</body>
</html>