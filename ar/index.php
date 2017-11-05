<?php
require_once "install.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title>strart page</title>
	<link rel="stylesheet" type="text/css" href="style/custom.css"/>
	<style>
		.btn-reg{
			margin-left: 30%;
			width: 30%;
			margin-top: 45%;
		}
		.btn-reg>a{
			display: block;
			padding: 15px;
			background: rgba(21, 128, 26, 0.75);
			width: 20%;
			margin-left: 40%;
			text-decoration: none;
			color: white;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<div>
	<?php if (!isset($_SESSION['id_user'])) : ?>
		<div class="btn-reg">
			<a  href="user/register.php">register</a><br>
			<a  href="user/login.php">login</a>
		</div>
	<?php else : ?>
		<?php echo $_SESSION['login']; ?>
		<div class="btn-reg">
			<a href="user/logout.php">logout</a><br>
			<a href="user/basket.php">go to basket</a>
		</div>
	<?php endif; ?>
</div>


</body>
</html>
