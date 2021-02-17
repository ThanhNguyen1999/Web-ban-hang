<link rel="stylesheet" href="./main.css">
<div class="sp dealhot">
<h1 style="background-color: #0084FF;">Deal Hot trong tháng</h1>
<?php
	require_once "./script/connectdb.php";
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM sphot');
	// echo "<pre>";
	// print_r($sanpham);
	// echo "</pre>";l];
	echo '<div class="dssanpham">';
	for($i = 0; $i < 5; $i++) { 
		echo '<div class="sanpham">';
		echo '<a href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'" /></a>';
		echo '<a href=""><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a href=""><h4 style="color:rgb(252, 53, 53);">'.number_format("$gia").' vnđ</h4></a>';
		echo '</div>';
	}
	echo '</div>';
	?>

</div>

<div class="sp pcbanchay">
	<h1 style="background-color: #0084FF;">PC Bán Chạy</h1>
	<?php
	require_once "./script/connectdb.php";
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM pc');
	// echo "<pre>";
	// print_r($sanpham);
	// echo "</pre>";l];
	echo '<div class="dssanpham">';
	for($i = 0; $i < 5; $i++) { 
		echo '<div class="sanpham">';
		echo '<a href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'" style = "width: 200px;
		height: 200px;" /></a>';
		echo '<a href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><h4 style="color:rgb(252, 53, 53);">'.number_format("$gia").' vnđ</h4></a>';
		echo '</div>';
	}
	echo '</div>';
	?>
</div>

<!-- <div class="tilte">

</div> -->

<div class="sp laptopS">
<h1 style="background-color: #0084FF;">Laptop & Laptop Gaming</h1>

	<?php
	$sanpham = $connect->printData('SELECT * FROM laptop');
	// echo "<pre>";
	// print_r($sanpham);
	// echo "</pre>";l];
	echo '<div class="dssanpham">';
	for($i = 0; $i < 5; $i++) { 
		echo '<div class="sanpham">';
		echo '<a href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'" style = "width: 200px;
		height: 200px;" /></a>';
		echo '<a href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><h4 style="color:rgb(252, 53, 53);">'.number_format("$gia").' vnđ</h4></a>';
		echo '</div>';
	}
	echo '</div>';
	?>
	
</div>


