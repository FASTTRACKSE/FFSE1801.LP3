<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<form method="POST">
		Id <input type="text" name="id"> <br>
		Ten hoa <input type="text" name="name"> <br>
		So luong <input type="text" name="qty"> <br>
		Don gia <input type="text" name="price"> <br>
		<input type="submit" name="muahoa" value="Mua hoa">
	</form>
</body>
</html>