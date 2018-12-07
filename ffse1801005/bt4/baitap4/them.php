<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php session_start();
		$tt=1;
		// echo "<pre>";
		// print_r($_SESSION['ac']);
		// echo "</pre>";
	 ?>
	 <table border="1px" cellpadding="10px" cellspacing="0px">
	 	<tr>
	 		<td>TT</td>
	 		<td>Tên tài khoản</td>
	 		<td>Họ và tên</td>
	 		<td>Ảnh đại diện</td>
	 		<td>Giới tính</td>
	 		<td>Địa chỉ </td>
	 		<td>Chức năng </td>
	 	</tr>
	 	<?php 
	 	foreach ($_SESSION['ac'] as $key => $value) { ?>
	 		<tr>
	 			<td><?=$tt++ ?></td>
	 			<td><?=$value['name'] ?></td>
	 			<td><?=$value['fullname'] ?></td>
	 			<td><img width="100" src="http://localhost/bt4/img/<?php echo $value['img']?>"></td>
	 			<td><?=$value['gender'] ?></td>
	 			<td><?=$value['diachi'] ?></td>
	 			<td><a href="http://localhost/bt4/baitap4/xoa.php?id=<?=$key?>">Xóa</a></td>
	 		</tr>
	 	<?php } ?>
	 </table>
</body>
</html>