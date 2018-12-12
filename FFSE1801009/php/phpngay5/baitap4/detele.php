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
	unset($_SESSION['account'][$_GET['id']]);
	header("location: baitap4b.php");
?>