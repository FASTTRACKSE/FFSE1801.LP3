<?php 
            
    session_start();
    // session_unset();
    if (isset($_POST['apply'])) {
        $thongtin = array(
            'taikhoan' => $_POST['account'],
            'ten' => $_POST['name'],
            'hinh' => $_FILES['avatar']['name'],
            'gioitinh' => $_POST['gioitinh'],
            'diachi' => $_POST['add']
        );
        if (isset($_POST['phim'])) {
            $thongtin['sothich'] = $_POST['phim'];
        }
        if (isset($_POST['bao'])) {
            $thongtin['sothich'] = $_POST['bao'];
        }
        if (isset($_POST['nhac'])) {
            $thongtin['sothic'] = $_POST['nhac'];
        }
        move_uploaded_file($_FILES['avatar']['tmp_name'],'./img/'.$_FILES['avatar']['name']);
        $_SESSION['info'] = $thongtin;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASM04</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid gray;
            text-align: left;
            padding: 8px;
            width: 100vw;
        }
        tr{
            border: 1px solid gray;
        }
        img{
            width: 10vw;
        }

    </style>
</head>
<body>
    <table>
        <h1>Danh sách tài khoản</h1>
        <tr>
            <td><strong>TT</strong></td>
            <td><strong>Tên tài khoản</strong></td>
            <td><strong>Họ và tên</strong></td>
            <td><strong>Ảnh đại diện</strong></td>
            <td><strong>Giới tính</strong></td>
            <td><strong>Địa chỉ</strong></td>
            <td><strong>Chức năng</strong></td>
        </tr>
        <?php 
            echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
            $stt = 0;
            foreach ($_SESSION as $key => $value) {
                $stt += 1;
                ?>
                <tr>
                    <td><?=$stt?></td>
                    <td><?=$_SESSION['info']['taikhoan']?></td>
                    <td><?=$_SESSION['info']['ten']?></td>
                    <td><img src="img/<?=$_SESSION['info']['hinh']?>"></td>
                    <td><?=$_SESSION['info']['gioitinh']?></td>
                    <td><?=$_SESSION['info']['diachi']?></td>
                    <td class="remove" onclick="this.parentElement.remove()">Xóa</td>
                </tr> <?php
            }
        ?>


    </table>
    
</body>
</html>