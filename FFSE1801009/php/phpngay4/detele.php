<!DOCTYPE html>
<html>
<head>
	<title>detele</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

</body>
</html>
<?php
session_start();
if(isset($_POST['delete'])){
	unset($_SESSION['giohang'][$_GET['id']]);
	header("location: giohang.php");
}
?>
<form action="" method="post">
	<button class="btn btn-danger" type="submit" name="delete">Xóa</button>
	<a href="/php/phpngay4/giohang.php"><button type="button" class="btn btn-success">Trở lại</button></a>
</form>
