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
?>
<form method="POST">
	
	Ten hoa <input type="text" value="<?=$dulieu['name']?>" name="name"> <br>
	So luong <input type="text" value="<?=$dulieu['qty']?>" name="qty"> <br>
	Don gia <input type="text" value="<?=$dulieu['price']?>" name="price"> <br>
	<input type="submit" name="edit" value="Cap nhat">
</form> 