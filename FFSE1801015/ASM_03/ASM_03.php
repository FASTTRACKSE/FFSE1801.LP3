<?php session_start();
 //session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
    <style>
        body{
            margin: 5% 23%;
        }
        .remove:hover{
            color:red;
            cursor:pointer;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: lightgray;
            font-size:23px;
        }
        table, td{    
            border: 1px solid #ddd;
            text-align: left;
        }
        table, td, th{
            padding:10px;
        }
        input.nhap{
            width:100%;
            margin-bottom: 10px;
        }
    </style>
<body>
    <?php
        if(isset($_POST['mua_hoa'])){
            session_start();
            $data = array(
                'ten' => $_POST['ten'],
                'sl' => $_POST['sl'],
                'don_gia' => $_POST['don_gia']
            );
            $id = $_POST['id'];
            if(isset($_SESSION['gio_hoa'][$id])){
                $_SESSION['gio_hoa'][$id]['sl'] += $_POST['sl'];
            }else{
                $_SESSION['gio_hoa'][$id] = $data;
            }
            header("location:session.php");
        }
    ?>
    <form method="POST">
        <table>
            <tr>
                <th>Cửa hàng hoa</th>
                <th></th>
            <tr>
            <tr>
                <td>Id hoa</td>
                <td><input type="text" name="id"></td>
            <tr>
            <tr>
                <td>Tên hoa</td>
                <td><input type="text" name="ten"></td>
            <tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="number" name="sl"></td>
            <tr>
            <tr>
                <td>Đơn giá</td>
                <td><input type="number" name="don_gia"></td>
            <tr>
            <tr>
                <td></td>
                <td><input type="submit" name="mua_hoa" value="Mua hoa"></td>
            <tr>
            
        </table>
    </form>
</body>
</html>