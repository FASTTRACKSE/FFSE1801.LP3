<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
	<?php 
	session_start();
	if (isset($_SESSION['username'])==false)
	{
		header("location:login.php");
	}
	?>
	<h1>he lu</h1><br>
	<p><a href="logout.php">đăng xuất</a></p>
</body>
</html>