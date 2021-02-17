<?php

// require_once "./script/vndFormat.php";
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once '../script/connectdb.php';
$connect = new database();
$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');

$_SESSION['cart'][$_GET['id']]['id'] = $_GET['id'];
$_SESSION['cart'][$_GET['id']]['sp'] = $_GET['sp'];
header("Location: ../giohang.php");
?>