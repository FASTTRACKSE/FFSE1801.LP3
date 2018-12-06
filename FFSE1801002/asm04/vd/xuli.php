<pre>
<?php
	$hinh=$_FILES['anh'];
	print_r ($hinh);
	move_uploaded_file($_FILES['anh']['tmp_name'],"uploaded/hinh.jpg");
?>
</pre>