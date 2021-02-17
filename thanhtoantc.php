<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="./Style/giohangxoa.css"> -->
	<link rel="stylesheet" href="./Style/thanhtoantc.css">
</head>


<body>
<?php

require_once "./script/vndFormat.php";
require_once "./module/header.html";
require_once "./module/menutop.php";
require_once './script/connectdb.php';
$connect = new database();
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>

	<!-- <h1 class=tille-card>Giỏ hàng</h1>
	<h3 class=thongbao>Đơn hàng của bạn đã đang được đặt hàng thành công!</h3>
	<h3 class=thongbao2>Xin mời bạn tới của hàng để thanh toán và nhận hàng !</h3>
	<div class="back">
	<?php 
	echo '<a href="index.php"><img src="./img/back.png" alt=""><span>Trở về trang chủ</span></a>';
	?>
	</div> -->


	<div class="alltable">
		<div class="tableleft">

		<div class="checkthongtin">
			<form action="./quantri/donhang.php" method="post">
			<h3>THÔNG TIN THANH TOÁN</h3>
			<hr>
			<div class="dong">
			
			<div class="hoten">
			<label>Họ Tên</label>
			<input type="text" name="name" id="name" placeholder="Nhập họ tên">
			</div>

			<div class="diachi">
				<label>Địa chỉ cụ thể</label>
				<input type="text" name="address" id="address" placeholder="Ví dụ: Ngõ 123,đường Trần Hưng Đạo">
			</div>

			<div class="numberphone">
				<label>Số điện thoại</label>
				<input type="text" name="phone" id="phone" placeholder="Nhập số điện thoại">
			</div>
			
			<div class="email">
			<label>Địa chỉ Email</label>
				<input type="text" name="email" id="email" placeholder="Nhập địa chỉ Email">
			</div>
			</div>
		
		
			</div>
			</div>


			<div class="tableright">
				<div class="donhang">
					<h3>ĐƠN HÀNG CỦA BẠN</h3>
					<hr>
						<div class="donhangdadat">
							<table>
								<thead>
									<tr>
										<th>Sản phẩm</th>
										<th>Thành tiền</th>					
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($_SESSION['cart'] as $key=>$value){
											echo '<tr>';
											$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
											echo '<td>';
											echo $sanpham[0]['TenSP'];
											// echo '<type="number" name="quantity[]" id="" value="'.$value['quantity'].'" min="1" class="slsp" onclick="updateTotal()">';
											
											echo'</td>';	
											echo '<td>';
											$giasp = $sanpham[0]['Gia'];
											echo '<a href=""><h4 class="tien2">'.vndFormat($giasp).'</h4></a>';
											echo'</td>';
											echo'</tr>';
										}
										?>
									</tbody>
									<tfoot>
										<tr>
												<th>Tổng đơn hàng</th>
											  
												<td>
													
													<?php
										$giasp = $sanpham[0]['Gia'];
										echo '<h1 class="tientong">'.vndFormat($_SESSION['total']);'.</h1>';
										// echo "<pre>";
										// print_r($_SESSION);
										// echo "</pre>";
										?>
												</td>
											</tr>
										</tfoot>

									</table>
									<input type="submit" value="Đặt hàng">
								</form>
									
						
									
									
									
									
						
									
								</div>			
								
								
				
								
								
				
				
				</div>


			</div>

			</div>

	</div>
</div>

<script src="validateForm.js"></script>
<?php require_once "./module/footer.html"; ?>
</body>
</html>