<link rel="stylesheet" href="./module/danhmucsp.css">

<?php

	require_once "./module/header.html";
	require_once "./module/menutop.php";

	?>
	<?php
	switch ($_GET['sp']) {
		case 'laptop':
			echo '<h1 style="background-color: #0084FF;">Laptop & Laptop Gaming</h1>';
			break;
		case 'pc':
			echo'<h1 style="background-color: #0084FF;">PC </h1>';
			break;
			case'sphot':
			echo	'<h1 style="background-color: #0084FF;">Sản phẩm bán chạy</h1>';
			break;
		default:
			# code...
			break;
	};
	require_once "./script/connectdb.php";
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
	// echo "<pre>";
	// print_r($sanpham);
	// echo "</pre>";l];
	echo '<div class="dssanpham">';
	for($i = 0; $i < 10; $i++) { 
		echo '<div class="sanpham">';
		echo '<a href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'" style = "width: 200px;
		height: 200px;" /></a>';
		echo '<a href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h4 style="color:rgb(252, 53, 53);">'.number_format("$gia").' vnđ</h4></a>';
		echo '</div>';
	}
	echo '</div>';
	require_once "./module/footer.html";
	?>

	<?php
	
	?>
