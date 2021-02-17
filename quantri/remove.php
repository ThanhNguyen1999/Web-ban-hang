<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once '../script/connectdb.php';
	$database = new database();
// echo $_GET['id'];

// 	echo 'DELETE FROM `'.$_GET['sp'].'` WHERE  MaSP="'.$_GET['id'].'";';
	$database->insertData('DELETE FROM `'.$_GET['sp'].'` WHERE  MaSP="'.$_GET['id'].'";');
	header('Location:../formadmin.php');