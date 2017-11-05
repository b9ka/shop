<?php
require_once "../install.php";
$id = $_POST['id'];
if ($_POST['submit'] === "basket" && isset($_SESSION['id_user'])) {
	$_SESSION['basket']['id'][] = $id;
}
header("Location: ../category.php");