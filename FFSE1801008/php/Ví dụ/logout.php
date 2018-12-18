<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<?php
	unset($_SESION['username']);
	header("location:login.php"); 
?>
</body>
</html>