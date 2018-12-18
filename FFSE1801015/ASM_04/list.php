<?php session_start(); //session_destroy(); ?>
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
            margin: 2% 7%;
        }
        .remove:hover{
            color:red;
            cursor:pointer;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: lightgray;
            font-size:19px;
        }
        table td{
            text-align: center;
        }
        table, td, th{
            padding:10px;
            border: 1px solid black;
        }
        img{
            width:150px;
            height:150px;
        }
        a{
            margin: 20px;
        }
    </style>
<body>
    <h1>Danh sách tài khoản</h1>
    <pre>
        <?php
            // print_r($_SESSION['list']);
        ?>
    </pre>
    <a href="http://localhost/PHP/ASM_04/ASM_04.php">Quay lại</a>
    <table>
        <tr>
            <th>TT</th>
            <th>Tên tài khoản</th>
            <th>Họ và tên</th>
            <th>Ảnh đại diện</th>
            <th>Sở thích</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Chức năng</th>
        </tr>
    <?php
        $stt="0";
        foreach($_SESSION['list'] as $key => $value){
            $stt++;
    ?>
        <tr>
            <td><?= $stt ?></td>
            <td><?= $key ?></td>
            <td><?= $value['fullname']; ?></td>
            <td><img src="../img/<?= $value['img'] ?>"/></td>
            <td><?= $value['hobby1']."<br/>"; echo $value['hobby2']."<br/>"; echo $value['hobby3']."<br/>";?></td>
            <td><?= $value['gender']; ?></td>
            <td><?= $value['address']; ?></td>
            <td class="remove" onclick="this.parentElement.remove()">XÓA</td>
        </tr>
    <?php } ?>
    </table>
    
</body>
</html>