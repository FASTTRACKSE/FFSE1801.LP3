<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    $conn = mysqli_connect('localhost', 'root','','ma_sinh_vien');
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'UTF8');
    if(isset($_GET['name'])){
?>
        <div>
            <h2>View user info</h2>
            <p>Name: <?php echo $_GET['name'];?></p> <br>
            <p>Full name: <?php echo $_GET['fullname'];?></p> <br>
            <p>Email: <?php echo $_GET['email'];?></p> <br>
        </div>
        <div><a href="index.php">quay lại</a></div>
<?php
    }
    else{
        header('location:index.php');
    }

?>
</body>
</html>