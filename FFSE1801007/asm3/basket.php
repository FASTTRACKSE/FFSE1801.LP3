<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-size: 26px;
		}
		table{
			width: 75%;
			text-align: center;
		}
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		p::after{
			content: "đ";
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php 
		session_start();

	?>
	<table>
		<tr>
			<th>Tên hoa</th>
			<th>Số lượng</th>
			<th>Giá</th>
			<th>Tổng tiền</th>
			<th colspan="2">Chức năng</th>
		</tr>
		<?php 
			$total=0;
			foreach($_SESSION['giohoa'] as $key=>$value){	
				$subtotal=$value['qty']*$value['price'];
				$total+=$subtotal;
		?>
		<tr>
			<td><?=$value['name']?></td>
			<td><?=$value['qty']?></td>
			<td><?=$value['price']?></td>
			<td><?=$subtotal?></td>
			<td style="width: 10%"><a href="http://localhost/php_day6/bai3/edit.php?id=<?=$key?>">Sửa</td>
			<td style="width: 10%"><a href="http://localhost/php_day6/bai3/delete.php?id=<?=$key?>">Xóa</td>
		</tr>

		<?php }?>
		
	</table>
		<a href="http://localhost/php_day6/bai3/shop.php">Tiếp tục mua</a>
		<p>Thành tiền : <?=$total?> </p>
</body>
</html>
