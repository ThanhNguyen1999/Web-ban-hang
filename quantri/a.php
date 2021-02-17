<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
if ($_SESSION['typeAccount'] == 1) {

	// header('Location:../../phpmyadmin');
	header('Location:../formadmin.php');
} else {
	header('Location:../index.php');

}