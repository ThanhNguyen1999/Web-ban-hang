<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<link rel="stylesheet" href="./module/detail.css" />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
		
		<title>Document</title>
	</head>
	<body>

	<?php
		require_once "./module/header.html";
		require_once "./module/menutop.php";
		require_once "./script/connectdb.php";
		$connect = new database();
		$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');
		if(!isset($_SESSION['total'])) {
			$_SESSION['total'] = 0;
		}

	?>
		<!-- <form action="./giohang.php" method="post"> -->
		<div class="item">
			<div class="item__img">
				<?php 
					echo '<img src="./img/Sanpham/'.$sanpham[0]['Anh'].'" class="item__img--image />';
				?>
				<!-- <img src="./img/gvn_hera_s.jpg" alt="GVN Hera S" class="item__img--image" /--> 
			</div>
			<!-- <i class="fa fa-facebook" aria-hidden="true"></i> -->
			<div class="info">
				<h1 class="item__title">
				<?php echo $sanpham[0]['TenSP']; ?>
				</h1>
						<div class="info_chitiet">
						
					<?php
						echo "<pre>";
						print_r($sanpham[0]['MoTa']);
						echo "</pre>";
						?>
				<!-- <h4>Mainboard :GIGABYTE X570 AORUS ULTRA</h4>
				<h4>CPU 	    :AMD Ryzen 7 3700X /8 nhân 16 luồng AM4</h4>
				<h4>RAM 	    :GSKILL TRIDENT Z RGB 1x8GB 3000</h4>
				<h4>VGA     	:GIGABYTE GeForce RTX™ 2070 SUPER AORUS 8G</h4>
				<h4>SSD 	    :Patriot Burst 2.5 Sata III 240GB</h4>
				<h4>PSU     	:COOLER MASTER MWE 750 BRONZE - V2</h4>
				<h4>Case    	:XIGMATEK Venom Mid-Tower</h4> -->
						</div>
				<div class="danhgia">
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<a href="#">Không có đánh giá</a>
				</div>

				<!-- <div class="thuonghieu">
					<span>Thương hiệu:</span>
					<a href="#" class="thuonghieu__a">Fisco</a>
					<a href="#">Xem thêm Sữa công thức & Bột ăn dặm của Friso</a>
				</div> -->

				<div class="gia">
				<?php 
				$giasp = $sanpham[0]['Gia'];
				echo '<h4>'.number_format("$giasp").' vnđ</h4>';
				?>
					<!-- <h2 class="gia__giasp">639.000đ</h2>
					<span class="gia__giacu">695.000đ</span> -->
					<!-- <span class="gia__phantram">-8%</span> -->
				</div>
		

				<?php
				
						$_SESSION['total'] += $giasp;
				
						$_SESSION['cart'][$_GET['id']]['quantity'] = 1;
						if(!isset($_SESSION['isLogin'])){
							echo '<strong class="deologin">Vui lòng đăng nhập để đặt hàng</strong>';
						} else {
							echo '<div class="nut">';
							echo '<a href="./module/addcart.php?sp='.$_GET['sp'].'&id='.$_GET['id'].'" class="nut__mua">Đặt hàng</a>';
							echo '</div>';
					}
					?>
					<!-- <input type="submit" value="Đặt hàng "> -->
					
					<!-- <button class ="nutb nut__gio">Thêm vào giỏ hang</button> -->

			</div>
		
			
		</div>
		<!-- </form> -->

	<?php require_once "./module/footer.html"; ?>;
	</body>
	</html>

