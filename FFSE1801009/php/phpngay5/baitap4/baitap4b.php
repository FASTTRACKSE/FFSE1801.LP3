<!DOCTYPE html>
<html>
<head>
	<title>bt4</title>
</head>
<body>
	<?php 
	$tt=1;
	session_start();
	//session_destroy();
	?>
	<table border="1px" cellpadding="8px" cellspacing="0px" style="width: 900px; margin: auto;text-align: center;">
		<tr>
			<td>TT</td>
			<td>Tên tài khoản</td>
			<td>Họ và tên</td>
			<td>Ảnh đại diện</td>
			<td>Giới tính</td>
			<td>Địa chỉ</td>
			<td>Chức năng</td>
		</tr>
		<?php foreach ($_SESSION["account"] as $key => $value) { ?>
			<tr>
				<td><?php echo $tt++ ?></td>
				<td><?=$value['name']?></td>
				<td><?php echo $value['fullname'] ?></td>
				<td><img style="width: 100px" src="http://localhost/php/phpngay5/img/<?=$value['img']?>"></td>
				<td><?php echo $value['gender'] ?></td>
				<td><?php echo $value['address'] ?></td>
				<td><a href="http://localhost/php/phpngay5/baitap4/detele.php?id=<?=$key?>">Xóa</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>