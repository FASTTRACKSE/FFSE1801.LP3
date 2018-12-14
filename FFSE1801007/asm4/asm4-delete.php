<?php 
	session_start();
	if (isset($_POST['delete'])) {
		unset($_SESSION['profile'][$_GET['id']]);
		header("location: asm4-2.php");
	}
 ?>
 <form method="POST">
 	<input type="submit" name="delete" value="Delete"> 
 </form>