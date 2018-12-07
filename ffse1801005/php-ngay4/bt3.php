<!DOCTYPE html>
<html>
<head>
	<title>bt3</title>
</head>
<body style="width: 250px;text-align: center;">


	<form action="" method="post" enctype="multipart/form-data" style="background-color: #4cdada70;text-align: left;
	">
	<h3 style="background-color: green;padding: 5px;"><strong style="color: white;font-size: 20px">Cửa hàng Sunflower</strong></h3>
	Id hoa:<br><br>
	<input type="text" name="id"><br><br>
	Tên hoa:<br><br>
	<input type="text" name="tenhoa"><br><br>
	Số lượng:<br><br>
	<input type="number" name="soluong"><br><br>
	Đơn giá:<br><br>
	<input type="number" name="dongia"><br><br>
	<div style="text-align: center;"><input type="submit" name="submit" value="Mua hoa"></div><br>

	<?php
	session_start();
	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$tenhoa=$_POST['tenhoa'];
		$soluong=$_POST['soluong'];
		$dongia=$_POST['dongia'];
		$data=array(
			'tenhoa'=>$tenhoa,
			'soluong'=>$soluong,
			'dongia'=>$dongia
		);
		$_SESSION['giohang'][]=$data;
		header("location: giohang.php");
	}
	?>
</form>
</body>
</html>