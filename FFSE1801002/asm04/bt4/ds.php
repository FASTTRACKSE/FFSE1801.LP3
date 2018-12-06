<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="style2.css" />
</head>

<body>
    <?php
        session_start();
        if(isset($_POST['xacnhan'])){
            $data=array(
                'passwork'=>$_POST['mk'],
                'ten'=>$_POST['ten'],
                // 'avt'=>'',
                'diachi'=>$_POST['diachi'],
                'sex'=>$_POST['sex'],
                'sothich'=>$_POST['sothich']
            );
            $_SESSION['danhsach'][$_POST['username']]=$data;
        }
    ?>
    <h1>Danh sách tài khoản</h1>
    <table>
        <tr>
            <th>TT</th>
            <th>Tên tài khoản</th>
            <th>Họ và tên</th>
            <th>Ảnh đại diện</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Chức năng</th>
        </tr>
        <?php $tt=1; foreach ($_SESSION['danhsach'] as $k => $vl){ ?>
            <tr>
                <td><?=$tt?></td>
                <td><?=$k?></td>
                <td><?=$vl['ten']?></td>
                <td></td>
                <td><?=$vl['sex']?></td>
                <td><?=$vl['diachi']?></td>
                <td><a href="">Xóa</td>
            </tr>
            <?php $tt++; ?>
        <?php } ?>
    </table>
    <pre>
        <?php
            print_r($_SESSION['danhsach']);
        ?>
    </pre>
</body>

</html>