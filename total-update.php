<?php
	require_once "./script/connectdb.php";
	$connect = new database();
	
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	$count = 0;
	$total = 0;

	foreach ($_SESSION['cart'] as $key=>$value) {
		$gia = $connect->printData('SELECT Gia FROM '.$value['sp'].' WHERE MaSP="'.$key.'"');
		$_SESSION['cart'][$key]['gia'] = $gia[0]['Gia'];
		echo "<pre>";
		print_r($gia);
		echo "</pre>";
		$count += intval($value['quantity']);

		$cost = $value['cost'];
		$cost = str_replace(" ₫","", $value['cost']);
		$cost = str_replace(".","", $cost);
		$total += intval($cost) * intval($value['quantity']);
	}
	if(isset($_SESSION['count']) ||  isset($_SESSION['total'])) {
		$_SESSION['count'] = $count;
		$_SESSION['total'] = $total;
	} else {
		$_SESSION['count'] = 0;
		$_SESSION['total'] = 0;
	}