<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/formadmin.css">
</head>
<body>


<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
?>
<div class="container">
<div class="main-menu">
		<div class="menu-admin">
					<div class="top">
					<a href="./formadmin.php" class="topname">BAN HANG BO DOI</a>
					</div>

					<div class="mid 1">
					<span>Cơ sở dữ liệu </span>
					<ul  class >

					<li>
					<?php 
					$sanpham = $connect->printData('SELECT * FROM laptop');
					echo '<a href="./admin-sanpham.php?sp=laptop"><span>Laptop</span></a>';
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
	<table width="100%">
	<thead>
		<tr>
			<th>Sản Phẩm</th>
			<th>Tên Sản Phẩm</th>
			<th>Mô Tả Sản Phẩm</th>
			<th>Giá Tiền</th>
			<th>Xoá</th>
		</tr>
	</thead>
	<tbody>
<?php 
		// for($i = 0 ;$i <10 ; $i++)
		$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
		foreach ($sanpham as $key=>$value) 
		{ //$key = id sp ; value[id], value[sp]
			echo'<tr>';
			echo '<td class=anhmota>';
			echo '<img src="./img/Sanpham/'.$value['Anh'].'" class="item_img" style="width: 200px;" />';
			echo'</td>';
			echo '<td class="tensanpham">';
			echo $value['TenSP'];
			echo'</td>';

			echo '<td>';
			echo "<pre>";
			print_r($value['MoTa']);
			echo "</pre>";
			echo '</td>';
			echo '<td class="giasp>';
			$giasp = $value['Gia'];
				echo '<a href=""><h4 class="tien">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';

			echo '<td class="xoa">';
			$_GET['id']=$value['MaSP'];
			echo '<a href="./quantri/remove.php?sp='.$_GET['sp'].'&id='.$_GET['id'].'"><img src="./img/remove.png" alt=""></a>';

			echo'</td>';

			echo'</tr>';
		}

?>
</tbody>
</table>


<div class="addsp">
<?php 
echo '<a href="./admin-addsp.php?sp=" class="addsanpham">Thêm Sản Phẩm</a>';

?>

</div>
</div>
</div>


	
</body>
</html>
