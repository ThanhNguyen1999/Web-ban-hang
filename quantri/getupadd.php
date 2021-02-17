<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// echo "<pre>";
// 	print_r($_POST);
// 	echo "</pre>";
	$fileupload = $_FILES['image'];
	// echo "<pre>";
	// print_r($fileupload);
	// echo "</pre>";
	if($fileupload['name'] != null){
		$filename= $fileupload['tmp_name'];
	
		$destination = '../img/Sanpham/'.$fileupload['name'];
		move_uploaded_file($filename, $destination);
	
	}

	$type = $_POST['type'];
	$tensp= $_POST['ten-sp'];
	$motasp= $_POST['mota-sp'];
	$giasp= $_POST['Gia-sp'];
	$anhsp= $fileupload['name'];

	require_once '../script/connectdb.php';
	$database = new database();
// echo 'INSERT INTO `'. $type.'` VALUES ("", "'.$tensp.'", "'.$motasp.'","'.$giasp.'","'.$anhsp.'" );';
	$database->insertData('INSERT INTO `'. $type.'` VALUES ("", "'.$tensp.'", "'.$motasp.'","'.$anhsp.'","'.$giasp.'" );');
	header('Location:../formadmin.php');