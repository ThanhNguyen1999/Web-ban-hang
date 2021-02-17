<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	require_once './script/connectdb.php';
	$database = new database();

	if(isset($_GET['register'])) { //Nếu đăng ký
		if ($_POST['password'] == $_POST['repassword']) {
			$database->insertData('INSERT INTO `account` VALUES ("'.$_POST['username'].'", "'.$_POST['password'].'", "0")');
		}
	} else {
		$dataLogin = $database->printData('SELECT * FROM `account`');


		$data = $database->printData('SELECT * FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";');
		echo 'SELECT * FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";';
		
		//Neu dang nhap
		if(empty($data)) {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		} else {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['isLogin'] = 1;
			$typeAccount = $database->printTypeProduct('SELECT Type FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";', 'Type');
			$_SESSION['typeAccount'] = $typeAccount[0];
			header('Location:./index.php');
		}

	}