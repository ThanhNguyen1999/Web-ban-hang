<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/formadmin.css">
	<link rel="stylesheet" href="./Style/admin-addsp.css">
</head>
<body>


<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	$connect = new database();
	// $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
?>
<div class="container">
<div class="main-menu">
		<div class="menu-admin">
					<div class="top">
					<a href="./formadmin.php" class="topname">BAN HANG BO DOI</a>
					</div>

					<div class="mid 1">
					<span>Cơ sở dữ liệu </span>
					<ul class>

					<li>
					<?php 
					$sanpham = $connect->printData('SELECT * FROM laptop');
					echo '<a href="./admin-sanpham.php?sp=laptop"><span>laptop</span></a>';
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
<div class="data">
	<form action="./quantri/getupadd.php" method="post" enctype="multipart/form-data">
	<table>
	<tbody>
<tr>
<tr>
<td>Loại Sản phẩm</td>
<td>
	<select name="type" id="">
		<option value="laptop">Laptop</option>
		<option value="pc">PC</option>	
		<option value="sphot">Sản Phẩm Hot</option>
	</select>
</td>


</tr>

<td>Tên Sản Phẩm</td>
<td> <input type="text"  class='add tensp' name="ten-sp"> </td>
</tr>

<tr>
<td>Mô Tả Sản Phẩm</td>
<td ><textarea name="mota-sp" id="" cols="30" rows="10"></textarea> </td>
</tr>

<tr>
<td>Giá Sản Phẩm</td>
<td><input type="text"   class='add giasp' name="Gia-sp"></td>
</tr>

<!-- <tr>
<td>Ảnh Sản Phẩm</td>
<td><input type="text"   class='add anhsp'name="anh-sp"></td>
</tr> -->
	
<tr>
<td>Thêm Ảnh</td>
<td> <input type="file" name="image" ></td>
</tr>	
	
	</tbody>
	</table>


<div class="addsp">
		 <input type="submit" value="Lưu" class="luu">
</div>
</form>
</div>
</div>


	
</body>
</html>