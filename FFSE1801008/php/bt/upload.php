<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<?php
	session_start();
	if (isset($_POST['submit'])){
		$name=$_FILES['file']['name'];
		
		move_uploaded_file($tmp_name, $part_upload);
	} 
	
?>	
	<h1>UP FILES</h1>
	<form action="xuli.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="anh"><br>
		<input type="submit" name="submit" value="tải lên">
	</form>
	
</body>
</html>