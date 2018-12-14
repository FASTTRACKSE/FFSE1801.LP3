<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			width: 50%;
			text-align: center;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		a{
			text-decoration: none;
			color: red;
		}
		img{
			width: 100px;
			height: 70px;
		}
	</style>
</head>
<?php 
	session_start();
 ?>
<body>
	<table>
		<tr>
			<th>TT</th>
			<th>Tên tài khoản</th>
			<th>Họ và tên</th>
			<th>Ảnh đại diện</th>
			<th>Giới tính</th>
			<th>Địa chỉ</th>
			<th>Fav</th>
			<th>Chức năng</th>
		</tr>
		<?php
			$stt=1;
			foreach ($_SESSION['profile'] as $key => $value) {
		 ?>
		 <tr>
		 	<td><?=$stt++?></td>
		 	<td><?=$key?></td>	 	
		 	<td><?=$value['name']?></td>
		 	<td><img src="list_images/<?=$value['image']?>"></td>
		 	<td><?=$value['gender']?></td>
		 	<td><?=$value['city']?></td>
		 	<td>
		 		<?php 
		 			if($value['fav']!=''){
			 			foreach ($value['fav'] as $key2 => $value2) {
			 				echo $value2."<br> ";
			 			}
		 			}
		 		?>	
		 	</td>
		 	<td><a href="http://localhost/php_day7/bai4/asm4-delete.php?id=<?=$key?>">Xóa</a></td>
		 </tr>
		<?php } ?>
	</table>
	<a href="asm4.php">Thêm</a>
</body>
</html>