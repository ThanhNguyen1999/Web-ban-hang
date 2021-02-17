<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/giohang.css">
	<link rel="stylesheet" href="./Style/giohangxoa.css">
</head>


<body>
<?php
// if (empty($_POST['Description'])) {
// 	$_POST['Description'] = '';
// }
require_once "./script/vndFormat.php";
require_once "./module/header.html";
require_once "./module/menutop.php";
require_once './script/connectdb.php';
$connect = new database();
// $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');
// // echo "<pre>";
// // print_r($_GET);
// // echo "</pre>";
// $_SESSION['cart'][$_GET['id']]['id'] = $_GET['id'];
// $_SESSION['cart'][$_GET['id']]['sp'] = $_GET['sp'];
// if(isset){
// $_SESSION['cart'][$_GET['id']]['quantity'] = 0;
// }
?>
<!-- <table>
<tbody>
<tr>
<td>Sản phẩm:</td>
<td>Tên Sản phẩm:</td>
<td>Số lượng:</td>
<td>Giá tiền:</td>
<td>Xoá</td>
</tr>
</tbody>
</table> -->


<h1 class=tille-card>Giỏ hàng</h1>
<?php
if(isset($_SESSION['cart']) )
{?>
<form action="./total-update.php" method="post">
<table width="100%">
	<thead>
		<tr>
			<th>Sản Phẩm</th>
			<th>Tên sản phẩm</th>
			<th>Giá tiền</th>
			<th>Số lượng</th>
			<th>Tổng</th>
			<th>Xoá</th>
		</tr>
	</thead>
<tbody>
<?php 

		
		foreach ($_SESSION['cart'] as $key=>$value) { //$key = id sp ; value[id], value[sp]
			echo '<tr>';
			$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
			echo '<td>';
			echo '<img src="./img/Sanpham/'.$sanpham[0]['Anh'].'" class="item_img"  />';
			echo'</td>';

			echo '<td class="tensanpham">';
			echo $sanpham[0]['TenSP'];
			echo'</td>';

			echo '<td class="giasp>';
			$giasp = $sanpham[0]['Gia'];
				echo '<a href=""><h4 class="tien">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';

			echo '<td class="soluongsp">';
			echo '<input type="number" name="quantity[]" id="" value="'.$value['quantity'].'" min="1" class="slsp" onclick="updateTotal()">';
			echo'</td>';

			echo '<td class="giasp2>';
				$giasp = $sanpham[0]['Gia'];
				echo '<a href=""><h4 class="tien2">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';
			

			echo '<td class="xoa">';
			echo '<a href="giohangxoa.php?id='.$value['id'].'&sp='.$value['sp'].'"><img src="./img/remove.png" alt=""></a>';

			echo'</td>';
			
		echo '</tr>';
		}
	


?>
</tbody>
</table>
<div class="tongtien">
<h1>Tổng tiền :</h1>
<?php
$giasp = $sanpham[0]['Gia'];
echo '<h1 class="tientong">'.vndFormat($_SESSION['total']);'.</h1>';
?>
</div>
<div class="thanhtoan" >
<?php 
echo '<a href="thanhtoantc.php"><h2>Thanh toán</h2></a>';
echo '<a href="total-update.php"><h2>update</h2></a>';
?>

</div>

<!-- <input type="submit" value="Cập nhật giỏ hàng"> -->
</form>
<?php
	}
	else{
		?>
		<h3 class="thongbao">Không có sản phẩm nào trong giỏ hàng</h3>
		<div class="back">
			<a href="index.php"><img src="./img/back.png" alt=""><span>Trở về trang chủ</span></a></div>
		<?php
	}
	?>
<?php require_once "./module/footer.html"; ?>
<script src="script/updateTotal.js"></script>
<script>
// var rezo = document.querySelector('.tientong');

// var so=0;
// var tongtien2 = document.querySelectorAll('.tien2');


// for(var i = 0; i < quantitys.length; i++) {
// 	var fomatso += tongtien2[i].textContent;
// 		fomatso = fomatso.replace('đ', '');
// 		fomatso = fomatso.replace(/\./g,'');
// 		fomatso = Number(fomatso);
// 	so += fomatso;

// }
// 		so = so.toLocaleString('vi', {style : 'currency', currency : 'VND'});
// 		rezo.innerHTML = so;

</script>

</body>
</html>