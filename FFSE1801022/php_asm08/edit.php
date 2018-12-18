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
    if(isset($_GET['id'])){
        $sql = "SELECT user_id, user_name, user_fullname, user_email, user_password FROM lms_users WHERE user_name='".$_GET['id']."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<h2>'.$row['user_name'].'</h2>';
        if(isset($_GET['password'])){
?>
        <div>
            <form method="POST" action="">
            <p>Lưu ý: Nếu muốn giữ nguyên phần nào thì để trống!</p>
                Name: <input type="text" name='name' value = ''/> <br/>
                Fullname:<input type='text' name='fullname' value=''/> <br/>
                Email:<input type='text' name='email' value=''/> <br/>
                Password: <input type='text' name='password' value=''/> <br/>
                <input type='submit' name='edit' value='sửa'/>
            </form>
        </div>
<?php
        }else{
?>
        <br><form action="" method="POST">
            Vui lòng nhập mật khẩu để xác nhận chỉnh sửa: (password: <?php echo $row['user_password']; ?>) <br>
            Password: <input type="password" name='pass' value=''/>
            <input type="submit" name = 'submit' value = 'Xác nhận'>
        </form>
<?php
        }
        if(isset($_POST['submit'])){
            if($_POST['pass']==$row['user_password']){
                header('location:edit.php?id='.$_GET['id'].'&password='.$row['user_password']);
            }
            else{
                echo "<p style='color:red;'>Sai mật khẩu!</p>";
            }
        }
        if(isset($_POST['edit'])){
            if(empty($_POST['name'])){
                $_POST['name'] = $row['user_name'];
            }
            if(empty($_POST['fullname'])){
                $_POST['fullname'] = $row['user_fullname'];
            }
            if(empty($_POST['email'])){
                $_POST['email'] = $row['user_email'];
            }
            if(empty($_POST['password'])){
                $_POST['password'] = $row['user_password'];
            }
            $sql = "UPDATE lms_users SET user_name = '".$_POST[name]."', user_fullname = '".$_POST[fullname]."', user_email = '".$_POST[email]."', user_password='".$_POST[password]."' WHERE user_name ='".$_GET['id']."'";
            $result = mysqli_query($conn, $sql);
            header('location:index.php');
        }
    }
    else{
        header('location:index.php');
    }
?>
</body>
</html>