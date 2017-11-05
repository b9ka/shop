<?php
require_once "../install.php";

if (isset($_POST['submit'])) {
	$qery = "SELECT * FROM `user`";
	$result = mysqli_query($link, $qery);
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['login'] == $_POST['login'] && $row['password'] == $_POST['passwd']){
			$_SESSION['id_user'] = $row['id'];
			$_SESSION['login'] = $row['login'];
			break ;
		}
	}
	header("location:../category.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>LOG IN</title>
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
<form action="login.php" method="POST" name="login.php">
	<div class="btn-reg">
		<p><input type="text" name="login" value="" placeholder="login"></p>
		<p><input type="password" name="passwd" value=""></p>
		<p><input type="submit" name="submit" value="OK"></p>
	</div>
</form>

</body>
</html>
