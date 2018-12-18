<?php session_start(); ?>
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
<form method="POST">
    <table>
        <tr>
            <th>Đăng ký tài khoản</th>
            <th></th>
        </tr>
        <tr>
            <td>Tên đăng nhập</td>
            <td>
                <input class="nhap" type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
                <input class="nhap" type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td>
                <input class="nhap" type="text" name="fullname">
            </td>
        </tr>
        <tr>
            <td>Ảnh đại diện</td>
            <td>
                <input type="file" name="img">
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <select name="address">
                    <option>Đà Nẵng</option>
                    <option>Hà Nội</option>
                    <option>Hồ Chí Minh</option>
                    <option>Buôn Ma Thuột</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                <input type="radio" name="gender" value="Nam">Male<br>
                <input type="radio" name="gender" value="Nữ">Female<br>
            </td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
                <input type="checkbox" name="hobby1" value="Xem phim"> Xem phim<br>
                <input type="checkbox" name="hobby2" value="Nghe nhạc"> Nghe nhạc<br>
                <input type="checkbox" name="hobby3" value="Đọc báo"> Đọc báo<br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="xac_nhan" value="Xác nhận">
                <input type="submit" name="huy" value="Hủy bỏ">
                
            </td>
        </tr>
    </table>
</form>
    <?php
        if(isset($_POST['xac_nhan'])){
            $data = array(
                'password' => $_POST['password'],
                'fullname' => $_POST['fullname'],
                'img' => $_POST['img'],
                'address' => $_POST['address'],
                'gender' => $_POST['gender'],
                'hobby1' => $_POST['hobby1'],
                'hobby2' => $_POST['hobby2'],
                'hobby3' => $_POST['hobby3'],
            );
            $_username = $_POST['username'];
            // if(isset($_SESSION['list'])){
            //     $_SESSION['list'][$_username] += $_POST['username']
            // }else{
            //     $_SESSION['list'][$_username] = $data;
            // }
            $_SESSION['list'][$_username] = $data;
            header("location: list.php");
        }
    ?>
    <pre>
        <?php
            print_r($data);
        ?>
    </pre>
</body>
</html>