<!doctype html>
<html lang="en">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	<section class="cart">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="cart-heading">Giỏ hàng</h1>
					<form action="./module/update-session.php" method="post">
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Phân loại</th>
										<th>Giá</th>
										<th>Số lượng</th>
										<th>Tổng</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if(isset($_SESSION['cart'])) {
											foreach ($_SESSION['cart'] as $key=>$value) {
												echo '<tr>';
													echo '<td class="product-thumbnail">';
														echo '<a href="#"><div class="img" style="background-image: url('.'\'img/products/'.$value['image'].' \''.');"></div></a>';
													echo '</td>';
													echo '<td class="product-name"><a href="#">'.$value['name'].' </a></td>';
													echo '<td class="product-type">'.$value['color'].' - '.$value['size'].' </td>';
													echo '<td class="product-price-cart"><span class="amount">'.$value['cost'].'</span></td>';
													echo '<td class="product-quantity">';
														echo '<input value="'.$value['quantity'].'" type="number" name="quantity[]" onclick="updateTotal()" min=1>';
													echo '</td>';
													echo '<td class="product-subtotal">'.vndFormat(vndtoNumber($value['cost']) * $value['quantity']).'</td>';
													echo '<td class="product-remove"><a href="module/delete-session.php?key='.$key.'"><i class="far fa-times"></i></a></td>';
												echo '</tr>';
											}
										}
									?>
								</tbody>
							</table>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="coupon-all">
							<div class="coupon">
								<input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Mã giảm giá" type="text">
								<input class="button" name="apply_coupon" value="Áp dụng" type="submit">
							</div>
							<div class="update-cart">
								<input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit">
							</div>
							</div>
						</div>
					</div>
					</form>
				<div class="row">
				<div class="col-md-5 ml-auto">
					<div class="cart-page-total">
							<h2>Tổng tiền</h2>
							<ul>
									<li>Tạm tính<span><?php echo vndFormat($_SESSION['total']); ?></span></li>
									<li>Thành tiền<span class="total-final"><?php echo vndFormat($_SESSION['total']); ?></span></li>
							</ul>
							<?php
							if(!isset($_SESSION['cart']) || !empty($_SESSION['cart'])) {
								echo '<a href="checkout.php">Tiến hành đặt hàng</a>';
							}
							?>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>