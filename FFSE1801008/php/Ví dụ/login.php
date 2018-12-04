<?php  
session_start();
if ($_POST['username']=="hung" && $_POST['password']=="1234") {
	$_SESSION['username']=$_POST['username'];
	header("location:home.php");
}else{
	header("location:day4.php");
}




?>