<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="ds.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Đăng ký tài khoản</th>
                <th></th>
            </tr>
            <tr>
                <td>Tên đăng nhập (*)</td>
                <td><input name="username" type="username" class='nhap'></td>
            </tr>
            <tr>
                <td>Mật khẩu (*)</td>
                <td><input name="mk" type="passwork" class='nhap'></td>
            </tr>
            <tr>
                <td>Họ và tên (*)</td>
                <td><input name="ten" type="text" class='nhap'></td>
            </tr>
            <tr>
                <td>Ảnh đại diện (*)</td>
                <td>
                    <input name="avt" type="file" value="Chọn tệp">
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <select name="diachi">
                        <option value='Đà Nẵng'>Đà Nẵng</option>
                        <option value='Quảng Nam'>Quảng Nam</option>
                        <option value='Quảng Ngãi'>Quảng Ngãi</option>
                        <option value='Đắk Lắk'>Đắk Lắk</option>
                        <option value='Đà Lạt'>Đà Lạt</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <label>
                        <input type="radio" name="sex" value="Nam"/>Nam
                    </label><br/>
                    <label>
                        <input type="radio" name="sex" value="Nữ"/>Nữ
                    </label>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <label>
                        <input type="checkbox" name="sothich" value="Xem phim"/>Xem phim
                    </label><br/>
                    <label>
                        <input type="checkbox" name="sothich" value="Nghe nhạc"/>Nghe nhạc
                    </label><br/>
                    <label>
                        <input type="checkbox" name="sothich" value="Đọc báo"/>Đọc báo
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name='xacnhan' type='submit' value='Xác nhận'>
                    <input name='huybo' type='submit' value='Hủy bỏ'>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>