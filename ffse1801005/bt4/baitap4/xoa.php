<?php
	session_start();
	unset($_SESSION['ac'][$_GET['id']]);
	header("location: them.php");


 ?>