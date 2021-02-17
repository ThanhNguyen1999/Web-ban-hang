<?php
require_once '../script/connectdb.php';
$database = new database();
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$connect = new database();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$username = $_SESSION['username'];
$ten=$_POST['name'];
$diachi=$_POST['address'];
$sodt=$_POST['phone'];
$email=$_POST['email'];
$donhang = "";

/* echo $username;
echo $ten;
echo $diachi;
echo $sodt;
echo $email;
echo $_SESSION['total']; */


foreach($_SESSION['cart'] as $key=>$value)
{
	$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
	$donhang .= $sanpham[0]['TenSP']. " | ";
}
// echo $donhang;
echo 'INSERT INTO `khachhang` VALUES ("'.$username.'", "'.$ten.'","'.$diachi.'","'.$sodt.'","'.$email.'","'.$donhang.'" );';


$database->insertData('INSERT INTO `khachhang` VALUES ("'.$username.'", "'.$ten.'","'.$diachi.'","'.$sodt.'","'.$email.'","'.$donhang.'" );');
	header('Location:../index.php');