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

    </style>
</head>
<body>
    <?php 
        echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
    ?>
    <form method="POST" action="info.php" enctype="multipart/form-data">
        <table>
            <tr>
                <h1>
                Đăng ký tài khoản
                </h1>
            </tr>
            <tr>
                <td>Tên đăng nhập (*)</td>
                <td>
                    <input type="text" name="account">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu (*)</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>Họ và tên (*)</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Ảnh đại diện (*)</td>
                <td>
                    <input type ="file" name="avatar" value="Chọn tệp">
                    <?php 
                        if (isset($_FILES['avatar'])) {
                            move_uploaded_file($_FILES['avatar']['tmp_name'],'./img/'.$_FILES['avatar']['name']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <select name="add">
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Tp.Huế">Tp. Huế</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Hà Nội">Hà Nội</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gioitinh" checked value="Nam">Nam
                    <br>
                    <input type="radio" name="gioitinh" value="Nữ">Nữ
                    <br>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td name="favorite">
                    <input type="checkbox" name="phim"  value ="Xem phim" checked>Xem phim <br>
                    <input type="checkbox" name="nhac" value="Nghe Nhạc">Nghe nhạc<br>
                    <input type="checkbox" name="bao" value="Đọc báo">Đọc báo<br>
                </td>

            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="apply" value="Xác nhận">
                    <input type="submit" name="cancel" value="Hủy bỏ">
                </td>

        </table>

    </form>
</body>
</html>