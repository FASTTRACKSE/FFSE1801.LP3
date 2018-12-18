<!DOCTYPE html>
<html>

<head>
	<title>login</title>
</head>

<body>
	<?php
	session_start();
	if (isset($_POST['submit'])){
		$name=$_FILES['anh']['name'];
		move_uploaded_file($_FILES['anh']['tmp_name'],"uploaded/$name");
	} 
	
?>
	<h1>UP FILES</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="anh"><br>
		<input type="submit" name="submit" value="tải lên">
	</form>
	<img src="uploaded/<?=$name?>" style="width: 10rem">

</body>

</html>