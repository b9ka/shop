<?php
require_once "sql.php";
session_start();
$link = mysqli_connect("localhost", "root", "256512");
if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($link, "CREATE DATABASE IF NOT EXISTS data_base");
$link = mysqli_connect("localhost", "root", "256512", "data_base");
mysqli_query($link, SQL_CREATE_TABLE_USER);
mysqli_query($link, SQL_CREATE_TABLE_PRODUCTS);
//mysqli_query($con, SQL_CREATE_TABLE_CATEGORIES);

$res = mysqli_query($link, SQL_SELECT_USER);

if (mysqli_num_rows($res) === 0) {
	$passwd = hash("md5", "admin");
	mysqli_query($link, "INSERT INTO user (login, password, root) VALUES ('admin', '$passwd', 1)");
	mysqli_query($link, "INSERT INTO `products` (`id`, `name`, `img`, `cost`) VALUES
(1, 'iPhone', 'http://i1.rozetka.ua/goods/1521750/apple_iphone_5s_16gb_space_gray_cpo_images_1521750210.jpg', 999),
(3, 'samsung', 'http://i2.rozetka.ua/goods/1586500/copy_samsung_galaxy_j7_ds_black_5733093750bfa_images_1586500434.jpg', 999),
(5, 'nokia', 'http://i1.rozetka.ua/goods/1837520/nokia_150_ds_black_images_1837520015.jpg', 999)");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>strart page</title>
	<link type="text/css" href="style/custom.css"/>
</head>
<body>


</body>
</html>