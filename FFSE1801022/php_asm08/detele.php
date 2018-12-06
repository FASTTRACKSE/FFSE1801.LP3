<?php
    $conn = mysqli_connect('localhost', 'root','','ma_sinh_vien');
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    echo "asdasdasd".$_GET['id'];
    mysqli_set_charset($conn, 'UTF8');
    if(isset($_GET['id'])){

        $sql = "DELETE from lms_users WHERE user_name='".$_GET['id']."'";
        $result = mysqli_query($conn, $sql);

        header('location:index.php');
    }

?>