 <pre>
<?php
	$hinh=$_FILES['anh'];
	print_r ($hinh);
	move_uploaded_file($_FILES['anh']['tmp_name'],"uploaded/hinh.jpg");
?>
</pre>
<?php
	session_start();
	if (isset($_POST['submit'])){
		$name=$_FILES['file']['name'];
		
		move_uploaded_file($tmp_name, $part_upload);
	} 
	
?>