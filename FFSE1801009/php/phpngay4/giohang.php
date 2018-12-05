<!DOCTYPE html>
<html>
<head>
	<title>giohang</title>
</head>
<body>
	<h1>Giỏ hàng</h1>
	<?php
	session_start();
	?>
	<table cellpadding="10px" cellspacing="0px" style="border: 1px solid">
		<tr style="background-color: #cdcfcf">
			<td><strong>Tên sản phẩm</strong></td>
			<td><strong>Giá</strong></td>
			<td><strong>Số lượng</strong></td>
			<td><strong>Tổng tiền</strong></td>
			<td><strong>Chức năng</strong></td>
		</tr>
		<?php
		$sum=0;
		$tong=0;

		?>
		<?php foreach ($_SESSION['giohang'] as $key => $value) {
			$sum= ($value['dongia']* $value['soluong']);
			$tong=$tong+$sum;
			?>

			<tr>
				<td style="border-bottom: 1px solid"><?=$value['tenhoa']?></td>
				<td style="border-bottom: 1px solid"><?=$value['dongia']?></td>
				<td style="border-bottom: 1px solid"><?=$value['soluong']?></td>
				<td style="border-bottom: 1px solid"><?= $sum ?></td>
				<td><a href="http://localhost/php/phpngay4/edit.php?id=<?=$key?>">Sữa</a>/<a href="http://localhost/php/phpngay4/detele.php?id=<?=$key?>">Xóa</a></td>
			</tr>
		<?php }?>
	</table>
</body>
</html>
<h3 style="margin-left: 265px;">Thành tiền: <?=$tong?> vnd</h3>
<a href="baitap3.php">Trở về</a>