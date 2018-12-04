<?php 
	session_start();
	$dulieu = $_SESSION['giohoa'][$_GET['id']];

	if(isset($_POST['edit'])){
		$data= array(
				"name"=>$_POST['name'],
				"qty"=>$_POST['qty'],
				"price"=>$_POST['price']
			);
		$_SESSION['giohoa'][$_GET['id']]=$data;
		header("location: basket.php");
	}
	
	if(isset($_POST['delete'])){
	unset($_SESSION['giohoa'][$_GET['id']]);
	header("location: basket.php");
	}
?>
<form method="POST">
	<label>Ten hoa</label>
	<input type="text" value="<?=$dulieu['name']?>" name="name"> <br>
	<label>So luong</label>
	<input type="text" value="<?=$dulieu['qty']?>" name="qty"> <br>
	<label>Don gia</label>
	<input type="text" value="<?=$dulieu['price']?>" name="price"> <br>
	<input type="submit" name="edit" value="Cập nhật">
	<input type="submit" name="delete" value="Xóa">
</form>