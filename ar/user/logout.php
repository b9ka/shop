<?php
require_once "../install.php";

unset($_SESSION['login']);
unset($_SESSION['id_user']);
unset($_SESSION['basket']);
session_destroy();
header("location:../index.php");


