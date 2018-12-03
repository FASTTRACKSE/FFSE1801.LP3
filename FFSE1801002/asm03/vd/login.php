<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <form action="" method="POST">
        Username <input name="username" type="text">
        Password <input name="password" type="password"><br>
        <input name="submit" type="submit" value="Login">
    </form>
    <?php
        if(isset($_POST['username'])){
            session_start();
            if($_POST['username']=="dan" && $_POST['password']=="123"){
                $_SESSION['username']=$_POST['username'];
                header("location: home.php");
            }else{
                header("location: login.php");
            }
        }
    ?>
    <!-- <script type="text/javascript">
		alert('Tên đăng nhập hoặc mật khẩu sai, vui lòng nhập lại!');
	</script> -->
</body>
</html>