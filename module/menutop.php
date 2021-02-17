<link rel="stylesheet" href="./module/header.css">
<?php
require_once "./script/connectdb.php";
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$connect = new database()
?>
<div class="header-menu">
	<div class="wrapper">
	<div class="danhmuc">
		<h3>Danh mục sản phẩm</h3>
		<div class="minidm">
			<div class="laptop">
			<?php
			$sanpham = $connect->printData('SELECT * FROM laptop');
				echo '<a href="./danhmucsp.php?sp=laptop"><span>Laptop</span></a>';
			?>
				<!-- <span>Laptop</span> -->
				<!-- <div class="  laptop-gaming">
					<h3>Laptop Gaming</h3>
					<ul>
						<li>Acer</li>
						<li>Asus</li>
						<li>MSI</li>
						<li>Dell</li>
						<li>HP</li>
						<li>Lenovo</li>
					</ul>
				</div> -->
			</div>
			<div class="PCG">
	
			<?php
				$sanpham = $connect->printData('SELECT * FROM pc');
					echo '<a href="./danhmucsp.php?sp=pc"><span>PC</span></a>';
				?>
	
			</div>

			<div class="sphot">
			<?php
				$sanpham = $connect->printData('SELECT * FROM sphot');
					echo '<a href="./danhmucsp.php?sp=sphot"><span>Sản phẩm hot</span></a>';
				?>
			</div>
		</div>
	</div>
	<div>
		<a class="btn-header" href="#">Khuyễn mãi Gaming Gear</a>
		<a class="btn-header" href="huongdanthanhtoan.php">Hướng dẫn thanh toán</a>
		<a class="btn-header" href="#">Hướng dẫn trả góp</a>
		<a class="btn-header" href="#">Chính sách bảo mật</a>
		<a class="btn-header" href="#">Chính sách vận chuyển</a>
	</div>
	</div>
	<?php
 if(empty($_SESSION['isLogin'])) {
	echo '<div class="dangnhap">';
	echo '<a href="formdangnhap.php"><h2>Đăng nhập</h2></a>';
	echo '</div>';
 } else {
	 echo '<h2>Xin chào, '.$_SESSION['username'].'</h2>';
	 echo '<a href="logout.php">đăng xuất</a>';
 }
 if (isset($_SESSION['typeAccount']) && $_SESSION['typeAccount'] == 1) {
	echo '<a href="quantri/a.php" ><img src="img/admin.png" style="width: 40px;"></a>';
}

 ?>
<!-- <div class="dangnhap">
	<a href="formdangnhap.php"><h2>Đăng nhập</h2></a>
</div> -->

<div class="giohang">
	<a href="giohang.php"><img src="img/cart.png" alt='1'></a>
</div>
	
	

</div>