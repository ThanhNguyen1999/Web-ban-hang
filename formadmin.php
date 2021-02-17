<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/formadmin.css">
</head>
<body>




<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
$connect = new database()
?>
<div class="container">
<div class="main-menu">
		<div class="menu-admin">
					<div class="top">
					<a href="./index.php" class="topname">BAN HANG BO DOI</a>
					</div>

					<div class="mid 1">
					<span>Cơ sở dữ liệu </span>
					<ul class>

					<li>
					<?php 
					$sanpham = $connect->printData('SELECT * FROM laptop');
					echo '<a href="./admin-sanpham.php?sp=laptop"><span>Laptop</span></a>';
					?>
					</li>

					<li>
					<?php 
					$sanpham = $connect->printData('SELECT * FROM PC');
					echo '<a href="./admin-sanpham.php?sp=pc"><span>PC</span></a>';
					?>
					</li>

					<li>
					<?php 
					$sanpham = $connect->printData('SELECT * FROM sphot');
					echo '<a href="./admin-sanpham.php?sp=sphot"><span>Sản phẩm hot</span></a>';
					?>
					
					</li>
					
					</ul>
					</div>
		</div>

</div>

</body>
</html>