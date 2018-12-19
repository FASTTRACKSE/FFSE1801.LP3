<?php
$settingDB = [
    'servername'=>"localhost",
    'username'=>"root",
    'password'=>"",
    'nameDB'=>"ffse1801024"
];

function connect($setting){
    $conn = new PDO('mysql:host='.$setting['servername'], $setting['username'], $setting['password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

function creaetDB($conn,$nameDB){
    $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$nameDB'";
    $stmt =  $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    if (sizeof($resultSet)==0) {
        $sql = "CREATE DATABASE $nameDB CHARACTER SET utf8 COLLATE utf8_vietnamese_ci";
        $conn->exec($sql);
        echo "Tạo database thành công.<br>";
        return;
    } 
    echo "Database đã tồn tại.<br>";
    return;

}

function checkExitsTB($conn,$nameDB,$nameTB){
    $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$nameDB' AND TABLE_NAME = '$nameTB'";
    $stmt =  $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchAll();
}

function creaetTB($conn,$nameDB,$nameTB,$table){
    $resultSet = checkExitsTB($conn,$nameDB,$nameTB);
    if (sizeof($resultSet)==0) {
        $conn->exec("CREATE TABLE ".$nameDB.".".$nameTB.$table);
        echo "Tạo table thành công.<br>";
        return;

    }  
    echo "Table đã tồn tại.<br>";
    return;
}

function insertTB($conn,$nameDB,$nameTB,$colInsert,$dataInsert){
    $resultSet = checkExitsTB($conn,$nameDB,$nameTB);
    if (sizeof($resultSet)==0) {
        throw new PDOException("Insert failed. Table not exits.", 1);
    }  
    $conn->exec("INSERT INTO ".$nameDB.".".$nameTB.$colInsert." VALUES ".$dataInsert);
    echo "Thêm dữ liệu vào table thành công.<br>";
}

function selectTB($conn,$nameDB,$nameTB,$colSelect,$settingSelect){
    $resultSet = checkExitsTB($conn,$nameDB,$nameTB);
    if (sizeof($resultSet)==0) {
        throw new PDOException("Select failed. Table not exits.", 1);
    }  
    $stmt = $conn->prepare("SELECT $colSelect FROM $nameDB.".$nameTB." ".$settingSelect);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    echo "Lấy dữ liệu table thành công.<br>";
    $stmt->execute();
    return $stmt->fetchAll();   
}

function destroy($conn,$nameDB,$nameTB,$settingDelete){
    $resultSet = checkExitsTB($conn,$nameDB,$nameTB);
    if (sizeof($resultSet)==0) {
        throw new PDOException("Delete failed. Table not exits.", 1);
    }  
    $conn->exec("DELETE FROM $nameDB.".$nameTB.$settingDelete );
    echo "Xóa dữ liệu table thành công.<br>";
}

try {
    $conn = connect($settingDB);
    creaetDB($conn,$settingDB['nameDB']);
    creaetTB($conn,$settingDB['nameDB'],'sinhvien',"
        (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            age TINYINT(4) NOT NULL,
            class VARCHAR(10) NOT NULL,
            gender VARCHAR(10) NOT NULL
        )
    ");
    if (isset($_REQUEST['insertDefault'])) {
        insertTB($conn,$settingDB['nameDB'],'sinhvien',"(
            name,age,class,gender
        )","
        ('Hồ Công Lịnh',19,'FFSE1701','Nam'),
        ('Trần Thu Hà',19,'FFSE1701','Nữ'),
        ('Trần Thị Tuyết Nhung ',19,'FFSE1701','Nữ'),
        ('Trần Nguyên Nam',19,'FFSE1701','Nam'),
        ('Mai Tuyết Loan',18,'FFSE1702','Nữ'),
        ('Trương Đại Nghĩa',20,'FFSE1702','Nam'),
        ('Phạm Quang Nhân',21,'FFSE1702','Nam'),
        ('Bùi Ngọc Quỳnh Nhi',17,'FFSE1703','Nữ'),
        ('Nguyễn Minh Huy',17,'FFSE1704','Nam')
        ");
    } 
    if (isset($_REQUEST['delete18'])) {
        destroy($conn, $settingDB['nameDB'], 'sinhvien', " where age <18"); } if (isset($_REQUEST['delete'])) { destroy($conn,
        $settingDB['nameDB'], 'sinhvien' , "" ); }if (isset($_REQUEST['delete18'])) {
        destroy($conn, $settingDB['nameDB'], 'sinhvien', " where age <18");
    }
    if (isset($_REQUEST['delete'])) {
        destroy($conn, $settingDB['nameDB'], 'sinhvien', "");
    }
    $dataTB = selectTB($conn,$settingDB['nameDB'],'sinhvien',"*","");
    $dataTB_2 = selectTB($conn,$settingDB['nameDB'],'sinhvien',"*","where age > 19 and gender = 'Nữ'");
    $dataTB_3 = selectTB($conn,$settingDB['nameDB'],'sinhvien',"*","where name like '%Nam%'");
    $countSV = selectTB($conn, $settingDB['nameDB'], 'sinhvien', "count(class)", "where class = 'FFSE1701'");
    
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}finally{
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="?insertDefault" class="btn btn-primary mb-3">Thêm dữ liệu mặc định</a>
        <a href="?delete18" class="btn btn-danger  mb-3"> Xóa những sinh viên có tuổi nhỏ hơn 18</a>
        <a href="?delete" class="btn btn-danger  mb-3"> Xóa tất cả</a>

        <div class="title">
            <h2 class="d-inline-block">Dữ liệu trong bảng</h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Class</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataTB as $key => $value) {?>
                <tr>
                    <th scope="row">
                        <?= $value['id'] ?>
                    </th>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <td>
                        <?= $value['age'] ?>
                    </td>
                    <td>
                        <?= $value['class'] ?>
                    </td>
                    <td>
                        <?= $value['gender'] ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div class="title">
            <h2 class="d-inline-block">Sinh viên là nữ và lớn hơn 19 tuổi </h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Class</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataTB_2 as $key => $value) {?>
                <tr>
                    <th scope="row">
                        <?= $value['id'] ?>
                    </th>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <td>
                        <?= $value['age'] ?>
                    </td>
                    <td>
                        <?= $value['class'] ?>
                    </td>
                    <td>
                        <?= $value['gender'] ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div class="title">
            <h2 class="d-inline-block">Sinh viên có tên là Nam</h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Class</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataTB_3 as $key => $value) { ?>
                <tr>
                    <th scope="row">
                        <?= $value['id'] ?>
                    </th>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <td>
                        <?= $value['age'] ?>
                    </td>
                    <td>
                        <?= $value['class'] ?>
                    </td>
                    <td>
                        <?= $value['gender'] ?>
                    </td>
                </tr>
                <?php 
            } ?>
            </tbody>
        </table>
        <div class="title">
            <h2 class="d-inline-block">Số lượng sinh viên thuộc lớp FFSE1701:
                <?= $countSV[0]['count(class)']; ?>
            </h2>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>