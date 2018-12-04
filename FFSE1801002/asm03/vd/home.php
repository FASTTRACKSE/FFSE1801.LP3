<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['username'])==false){
            header("locatin: login.php");
        }
    ?>
    <h1>HELLO MAN</h1>
    <br>
    <p>Thoát ra <a href="logout.php">tại đây.</a></p>
</body>
</html>