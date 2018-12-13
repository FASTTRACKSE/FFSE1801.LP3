<!DOCTYPE html>
<html>
<head>
	<title>asm03</title>
</head>
<body>
	<h1>Giỏ hàng</h1>
	<div class="bang">
		<table border=1 cellspacing=0 cellpading=0>
			<tr>
				<th>Tên sản phẩm</th>
				<th> Giá </th>
				<th> Số lượng </th>
				<th> Tổng tiền </th>
			</tr>
	<?php  
		session_start();
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
			</tr>	
		<?php } ?>
		</table>
		<p><a href="shop.php">Trở về</a></p>
		<pre>
			<?php
				print_r($_SESSION['ds']);
			?>
		</pre>
</body>
</html>