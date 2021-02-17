<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bán Hàng BoDoi</title>

	<link rel="stylesheet" href="./module/header.css">
	<link rel="stylesheet" href="./module/footer.css">
	<link rel="stylesheet" href="./module/main.css">
</head>
<body>
	<?php
require_once "./script/connectdb.php";
$connect = new database();
?>
	<?php include('./module/header.html'); ?>
	<?php include('./module/menutop.php'); ?>
	<hr>
	<?php include('./module/main1.php'); ?>
	<?php include('./module/footer.html'); ?>

</body>
</html>