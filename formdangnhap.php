<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/fromdanhnhap.css">
</head>
<body>
<?php
require_once "./module/header.html";
require_once "./module/menutop.php";
?>


<div class="container">
		<div class="headerr">
			<h1>Đăng nhập</h1>
		</div>
		<form action="./processLogin.php" method="post" style="text-align:-webkit-center;">
			<table>
				<tbody>
					<tr>
						<td class="title">Tên đăng nhập:</td>
						<td>
							<input type="text" name="username" id="hoten">
						</td>
					</tr>
					<tr>
						<td class="title">Mật khẩu:</td>
						<td>
							<input type="password" name="password" title="Phải nhâph nhiều kí tự hơn">
						</td>
					</tr>
					</tr>
				</tbody>
				
			</table>

	</div>

<div class="dangnhap">
	<?php
	echo '<input type="submit" value="Đăng nhập">';
	?>
	<?php
	echo '<a href="./formdangky.php">Đăng ký</a>';
	?>
</div>
</form>
<?php require_once "./module/footer.html"; ?>
</body>
</html>