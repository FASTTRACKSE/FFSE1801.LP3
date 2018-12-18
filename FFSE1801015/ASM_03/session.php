<?php session_start(); //session_destroy();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        body{
            margin: 5% 15%;
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
            border: 1px solid black;
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
</head>
<body>
    <pre>
        <?php
            //print_r($_SESSION);
        ?>
    </pre>
    <h1>Cửa hàng hoa</h1>
    
        <table border="">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Chức năng</th>
            </tr>
    <?php
        foreach($_SESSION['gio_hoa'] as $k => $v){
            $tong = $v['sl']*$v['don_gia'];
    ?>
            <tr>
                <td><?= $v['ten']; ?></td>
                <td><?= $v['don_gia']; ?></td>
                <td><?= $v['sl']; ?></td>
                <td><?= $tong; ?></td>
                <td><a href="http://localhost/PHP/ASM_03/edit.php?id=<?=$k?>">Sửa</a>/<a href="#">Xóa</a></td>
            </tr>
    <?php
        }
    ?>
    <a href="ASM_03.php">Quay lại</a>
</body>
</html>