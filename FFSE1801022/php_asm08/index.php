<?php
    $conn = mysqli_connect('localhost', 'root','','ma_sinh_vien');
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'UTF8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        table{
            text-align: center;
            margin: 50px 50px;
            padding:0;
            border: 1px rgb(126, 126, 126) solid;
        }
        td,th{
            border: 1px rgb(126, 126, 126) solid;
            margin: 0;
            padding:0 20px;
        }
        .delete{
            cursor: pointer;
        }
        .delete:hover{
            color:blue;
        }
        #lp4{
            text-align:left;
        }
        #lp4 td{
            padding: 10px !important;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            color: red;
        }
    </style>
<body>

<?php
    // $sql = "CREATE TABLE `ma_sinh_vien`.`lms_users` ( `user_id` INT(10) NOT NULL , `user_name` VARCHAR(50) NOT NULL , `user_fullname` VARCHAR(255) NOT NULL , `user_email` VARCHAR(100) NOT NULL , `user_password` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;";
    // $sql = "INSERT INTO lms_users (user_id, user_name, user_fullname, user_email,user_password)
    // VALUES (1, 'thanhcl', 'Cao Lê Thành','thanhcl@fasttrack.edu.com','123456'),
    // (2, 'ffse1702001', 'Nguyễn Văn Nam','ffse1702001@fasttrack.edu.com','abc123'),
    // (3, 'ffse1702002', 'FFSE 022','ffse1702002@fasttrack.edu.com','123bca'),
    // (4, 'admin', 'administrator','admin@gmail.com','654321'),
    // (5, 'author', 'Author','author@gmail.com','abced123');";
    // $conn->query($sql);
    $sql = "SELECT user_id, user_name, user_fullname, user_email, user_password FROM lms_users";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
<?php
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['user_fullname']."</td><td>".$row['user_email']."</td><td>
                <a href='./read.php?name=".$row['user_name']."&fullname=".$row['user_fullname']."&email=".$row['user_email']."'>Read</a>
                <a href='./edit.php?id=".$row['user_name']."'>Edit</a>
                <a href='./detele.php?id=".$row['user_name']."'>Delete</a>
            </td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "Không tìm thấy dữ liệu nào";
    }
?>
    <a href="index.php?add"><button name='add'>Thêm người dùng</button></a>
<?php
    if(isset($_GET['add'])){
?>
    <form action="" method="POST">
    ID: <input type="number" name='id' value='' required/><br/>
    Name: <input type="text" name='name' value='' required/><br/>
    Fullname: <input type="text" name='fullname' value='' required/><br/>
    Email: <input type="email" name='email' value='' required/><br/>
    Password: <input type="text" name='password' value='' required/><br/>
    <input type="submit" name='submit' value='Thêm'>
    <a href="index.php"> Hủy </a>
    </form>

<?php
        if(isset($_POST['submit'])){
            $flag = true;
            $sql = "SELECT user_id, user_name, user_fullname, user_email, user_password FROM lms_users";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                if($_POST['id']==$row['user_id'] || $_POST['name']==$row['user_name']){
                    $flag = false;
                    break;
                }
            }
            if($flag == true){
                $sql = "INSERT INTO lms_users (user_id, user_name, user_fullname, user_email,user_password)
                VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['fullname']."','".$_POST['email']."','".$_POST['password']."')";
                mysqli_query($conn, $sql);
                echo $_POST['fullname'];
                header('location:index.php');
            }
            else{
                echo "<p style='color:red;'>ID và Name không được trùng với những người dùng trước!</p>";
            }
        }
    }
?>


</body>
</html>