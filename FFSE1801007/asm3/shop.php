<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			width: 20%;
			/*text-align: center;*/
		}
		h3{
			margin: 0;
			padding: 20px 0;
			background-color: #00A19B;
			text-align: center;
		}
		form{
			background-color: #C6EDEC;
			padding-left: 20px;
		}
		label{
			display: block;
		}
	</style>
</head>
<?php 
	if(isset($_POST['muahoa'])){
		session_start();
		$data= array(
				"name"=>$_POST['name'],
				"qty"=>$_POST['qty'],
				"price"=>$_POST['price']
			);

		$id=$_POST['id'];
		if(isset($_SESSION['giohoa'][$id])){
			$_SESSION['giohoa'][$id]['qty']+=$_POST['qty'];
		}else{
			$_SESSION['giohoa'][$id]=$data;
		}
		header("location: basket.php");
	}

?>
<body>
	<h3>Cửa hàng Sunflower</h3>
	<form method="POST">
		<label>ID hoa :</label>
		<input type="text" name="id"> <br>
		<label>Tên hoa :</label>
		<input type="text" name="name"> <br>
		<label>Số lượng :</label>
		<input type="text" name="qty"> <br>
		<label>Đơn giá :</label>
		<input type="text" name="price"> <br><br>
		<input type="submit" name="muahoa" value="Mua hoa">
	</form>
</body>
</html>