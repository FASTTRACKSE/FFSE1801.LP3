<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_POST['delete'])){
		unset($_SESSION['giohoa'][$_GET['id']]);
		header("location: basket.php");
		}
	 ?>
	 
	<form method="POST"> 
		<label>Are u sure? </label>
		<input type="submit" name="delete" value="Xóa">
	</form>
</body>
</html>
