<!DOCTYPE html>
<html>
<head>
	<title>asm03</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Giỏ hàng</h1>
	<div class="bang">
		<table >
			<tr>
				<th>Tên sản phẩm</th>
				<th> Giá </th>
				<th> Số lượng </th>
				<th> Tổng tiền </th>
				<th> Chức năng </th>
			</tr>
			<?php  
			session_start();
			// session_destroy();
			if (isset($_POST['submit'])) {
				$data=array(
					'name'=>$_POST['tenhoa'],
					'price'=>$_POST['gia'],
					'number'=>$_POST['soluong']
				);
				$_SESSION['ds'][$_POST['id']]=$data;
			}
			?>	

			<?php foreach ($_SESSION['ds'] as $key => $value) { ?>
				<tr>
					<td><?=$value['name']?></td>
					<td><?=$value['price']?></td>
					<td><?=$value['number']?></td>
					<td><?=($value['price']*$value['number'])?></td>
					<td><a href="edit.php?id=<?=$key?>"> Sửa </a>  | <a href="delete.php?id=<?=$key?>"> Xóa </a> </td>
				</tr>	
			<?php } ?>
			<tr> 
				<td class="mau">Thành tiền:</td>
				<td></td>
				<td></td>
				<td></td>
				<?php
				$thanhtien=0;
				foreach($_SESSION['ds'] as $idhoa2){
					$thanhtien+=$idhoa2['price']*$idhoa2['number'];
				}
				?>
				<td><?=$thanhtien?></td>
			</tr>
		</table>
		<p><a href="shop.php">Trở về</a></p>
		<!-- <pre>
			<?php
				print_r($_SESSION['ds']);
			?>
		</pre> -->
	</body>
	</html>