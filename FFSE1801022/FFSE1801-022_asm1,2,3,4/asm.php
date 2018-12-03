<?php session_start();
    if (isset($_POST['save-session'])){
        // Lưu Session
        $id = $_POST['id'];
        if(isset($_SESSION['id'][$id])){
            $_SESSION['id'][$id][1] = $_SESSION['id'][$id][1] + $_POST['quantity'];
        }
        else{
            $_SESSION['id'][$id] = array($_POST['name'],$_POST['quantity'], $_POST['price']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script language="javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
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
    </style>
    <?php
        $a1 = 3;
        $b1 = 4;
        $a2 = 0;
        $b2 = 4;
        $a3 = 1;
        $b3 = 5;
        $ab = array();
        $ab[0][0]=$a1; $ab[0][1]=$b1;
        $ab[1][0]=$a2; $ab[1][1]=$b2;
        $ab[2][0]=$a3; $ab[2][1]=$b3;
        $ab[3][0]=4; $ab[3][1]=2;
        $ab[4][0]=1; $ab[4][1]=-5;
        $ab[5][0]=0; $ab[5][1]=2;
        $ab[6][0]=5; $ab[6][1]=-5;
        $ab[7][0]=0; $ab[7][1]=4;
        $ab[8][0]=5; $ab[8][1]=0;
        $ab[9][0]=-3; $ab[9][1]=2;
    ?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>a</th>
            <th>b</th>
            <th>x</th>
            <th>Ghi chú</th>
            <th>Chức năng</th>
        </tr>
        <?php
            for($i=0;$i<count($ab);$i++){
                if($ab[$i][0] != 0){
                    $x = (-$ab[$i][1])/($ab[$i][0]);
                    echo "<tr><td class='stt'>"."</td><td>".$ab[$i][0]."</td><td>".$ab[$i][1]."</td><td>".round($x, 2)."</td><td>Phương trình có nghiệm</td><td class='delete'> xóa</td></tr>";
                }
                else{
                    echo "<tr style = 'color:red;'><td class='stt'>"."</td><td>".$ab[$i][0]."</td><td>".$ab[$i][1]."</td><td>"."-"."</td><td>Hệ số không hợp lệ a = 0</td><td class='delete'>xóa</td></tr>";
                }
            }
        ?>
    </table>
    <?php
        $abc = array();
        $abc[0][0]=$a1; $abc[0][1]=$b1; $abc[0][2]=$b1;
        $abc[1][0]=4; $abc[1][1]=$b2; $abc[1][2]=$b2;
        $abc[2][0]=$a3; $abc[2][1]=$b3; $abc[2][2]=$b3;
        $abc[3][0]=4; $abc[3][1]=2; $abc[3][2]=2;
        $abc[4][0]=1; $abc[4][1]=-5; $abc[4][2]=-5;
        $abc[5][0]=2; $abc[5][1]=2; $abc[5][2]=2;
        $abc[6][0]=5; $abc[6][1]=-5; $abc[6][2]=-5;
        $abc[7][0]=3; $abc[7][1]=4; $abc[7][2]=4;
        $abc[8][0]=5; $abc[8][1]=0; $abc[8][2]=0;
        $abc[9][0]=-3; $abc[9][1]=2; $abc[9][2]=2;
    ?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>x1</th>
            <th>x2</th>
            <th>Ghi chú</th>
            <th>Chức năng</th>
        </tr>
        <?php
            for($i=0;$i<count($abc);$i++){
                $dt = $abc[$i][1]*$abc[$i][1]-4*$abc[$i][0]*$abc[$i][2];
                if($dt < 0){
                    echo "<tr style = 'color:red;'><td class='stt'>"."</td><td>".$abc[$i][0]."</td><td>".$abc[$i][1]."</td><td>".$abc[$i][2]."</td><td>"."-"."</td><td>"."-"."</td><td>Phương trình vô nghiệm</td><td class='delete'> xóa</td></tr>";
                }
                else{
                    if($dt == 0){
                        $x = -$abc[$i][1]/(2*$abc[$i][0]);
                        echo "<tr style = 'color:orange;'><td class='stt'>"."</td><td>".$ab[$i][0]."</td><td>".$ab[$i][1]."</td><td>".$ab[$i][1]."</td><td>".round($x,2)."</td><td>".round($x,2)."</td><td>Phương trình có nghiệm kép</td><td class='delete'>xóa</td></tr>";
                    }
                    else{
                        $x1 = (-$abc[$i][1]-sqrt($dt))/(2*$abc[$i][0]);
                        $x2 = (-$abc[$i][1]+sqrt($dt))/(2*$abc[$i][0]);
                        echo "<tr><td class='stt'>"."</td><td>".$abc[$i][0]."</td><td>".$abc[$i][1]."</td><td>".$abc[$i][2]."</td><td>".round($x1,2)."</td><td>".round($x2,2)."</td><td>Phương trình có 2 nghiệm</td><td class='delete'> xóa</td></tr>";
                    }
                }
            }
        ?>
    </table>
    <?php
        $lp3 = array();
        $lp3["Nguyen Van A"] = array(7,8,9);
        $lp3["Nguyen Van B"] = array(9,8,9);
        $lp3["Nguyen Van C"] = array(7,8,9);
        $lp3["Nguyen Van D"] = array(3,3,4);
        $lp3["Nguyen Van E"] = array(7,8,9);
    ?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>Tên học sinh</th>
            <th>Điểm toán</th>
            <th>Điểm ly</th>
            <th>Điểm hóa</th>
            <th>Điểm trung bình</th>
            <th>Xếp loại</th>
        </tr>
        <?php
            foreach($lp3 as $key => $value){
                $tb = ($value[0]+$value[1]+$value[2])/3;
                $color = "black";
                if($tb>8.5){
                    $xl = "Giỏi";
                }else{
                    if($tb>7){
                        $xl = "Khá";
                    }else{
                        if($tb>5){
                            $xl = "Trung bình";
                        }else{
                            $xl = "Yếu";
                            $color = "red";
                        }
                    }
                }
                echo "<tr style='color:".$color.";'> <td class='stt'>STT</td> <td>".$key."</td> <td>".$value[0]."</td> <td>".$value[1]."</td> <td>".$value[2]."</td> <td>".round($tb,2)."</td> <td> Loại ".$xl."</td> </tr>";
            }
        ?>
    </table>
    <?php $lp31 = array();
        $lp31[0]=array("Nguyen Van A",7,8,9);
        $lp31[1]=array("Nguyen Van B",9,8,9);
        $lp31[2]=array("Nguyen Van C",7,8,9);
        $lp31[3]=array("Nguyen Van D",3,3,4);
        $lp31[4]=array("Nguyen Van F",7,8,9);
        for($i = 0 ; $i < count($lp31) ; $i++){
            $tb = array();
            for($j = 0 ; $j < count($lp31) ; $j++){
                $tb[$j] = ($lp31[$j][1]+$lp31[$j][2]+$lp31[$j][3])/3;
            }
            $n = array();
            for($j=$i+1;$j<count($lp31);$j++){
                if($tb[$i]<$tb[$j]){
                    // echo $tb[$i]."<".$tb[$j]."<br/>"; 
                    $n[0] =  $lp31[$i];
                    $lp31[$i] = $lp31[$j];
                    $lp31[$j] = $n[0];
                    // echo $n[0][0];
                }
            }
        }
    ?>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>Tên học sinh</th>
            <th>Điểm toán</th>
            <th>Điểm ly</th>
            <th>Điểm hóa</th>
            <th>Điểm trung bình</th>
            <th>Xếp loại</th>
        </tr>
        <?php
            for($i=0;$i<count($lp31);$i++){
                $color = "black";
                if($tb[$i]>8.5){
                    $xl = "Giỏi";
                }else{
                    if($tb[$i]>7){
                        $xl = "Khá";
                    }else{
                        if($tb[$i]>5){
                            $xl = "Trung bình";
                        }else{
                            $xl = "Yếu";
                            $color = "red";
                        }
                    }
                }
                echo "<tr style='color:".$color.";'> <td class='stt'>STT</td> <td>".$lp31[$i][0]."</td> <td>".$lp31[$i][1]."</td> <td>".$lp31[$i][2]."</td> <td>".$lp31[$i][3]."</td> <td>".round($tb[$i],2)."</td> <td> Loại ".$xl."</td> </tr>";
            }
        ?>
    </table>
    <?php
        echo "Bạn {$lp31[0][0]} có điểm trung bình cao nhất là: ".round($tb[0],2);
    ?>
        <form method="POST" action="">
            ID:<input type="text" name="id" value="" required data-error="Please enter your first name"/> <br/>
            Tên hoa: <input type="text" name="name" value="" required data-error="Please enter your first name"/> <br/>
            Số lượng: <input type="number" name="quantity" value="1" required data-error="Please enter your first name"/> <br/>
            Đơn giá: <input type="number" name="price" value="" required data-error="Please enter your first name"/> VNĐ <br/>
            <input type="submit" name="save-session" value="Lưu Session"/>
        </form>
        <a href="giohoa.php" target="_blank" >kiểm tra</a>






    <table cellspacing="0" id="lp4">
    <tr>
    <th colspan="2">Đăng ký tài khoảng</th>
    </tr>
    <form action="" method="post"  enctype="multipart/form-data">
        <tr>
            <td> Tên đăng nhập (*)</td>
            <td><input type="text" name="name" value="" required data-error=""/></td>
        </tr>
        <tr>
            <td>Mật khẩu (*)</td>
            <td><input type="password" name="password" value="" required data-error=""/></td>
        </tr>
        <tr>
            <td>Họ và tên (*)</td>
            <td><input type="text" name="fullname" value="" required data-error=""/> </td>
        </tr>
        <tr>
            <td>Ảnh đại diện (*)</td>
            <td><input type="file" name="avatar" required/></td>
        </tr>
        <tr>
            <td>Địa chỉ (*)</td>
            <td> <select name="diachi" id="">
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Đà Nẵng" selected>Đà Nẵng</option>
                    <option value=" Hồ chí Minh">Hồ chí Minh</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                <input type="radio" name="gioitinh" class="gioitinh" checked value="Nam">Nam <br>
                <input type="radio" name="gioitinh" class="gioitinh" value="Nữ">Nữ <br>
            </td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
                <input type="checkbox" name="phim" id="" value="Xem phim"> Xem phim <br>
                <input type="checkbox" name="nhac" id="" value="Nghe nhạc"> Nghe nhạc <br>
                <input type="checkbox" name="bao" id="" value="Đọc báo"> Đọc báo <br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="xacnhan" value="Xác nhận"> | <input name="huy" type="submit" value="Hủy bỏ"></td>
        </tr>
    </form>
    </table>
    <a href="danhsach.php" target="_blank">Kiểm tra danh sách</a><br>
        <?php
            if(isset($_POST["xacnhan"])){
                $hotbit = array();
                if(isset($_POST['phim'])){
                    $hotbit[] = $_POST['phim'];
                }
                if(isset($_POST['nhac'])){
                    $hotbit[] = $_POST['nhac'];
                }
                if(isset($_POST['bao'])){
                    $hotbit[] = $_POST['bao'];
                }
                move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_POST['name'].$_FILES['avatar']['name']);
                $_SESSION['name'][$_POST['name']]=array($_POST['password'],$_POST['fullname'],$_FILES['avatar'],$_POST['diachi'],$_POST['gioitinh'],$hotbit);
                print_r($_SESSION['name'][$_POST['name']]);
            }
        ?>
    <?php
        // Nhánh kết nối thành công
        // Thực hiện kết nối
$conn = mysqli_connect('localhost', 'root', 'vertrigo');
 
// Kiểm tra kết nối thành công hay thất bại
// nếu thất bại thì thông báo lỗi
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 
// Thông báo kết nối thành công
echo "Kết nối thành công";
    ?>






    <script>
        $(document).ready(function(){
            $(document).on("click",".delete",function(){
                $(this).parents("tr").remove();
                stt();
            });
            stt();
        })
        function stt(){
            for(let j = 0;j<$("table").length;j++){
                var t = $("table").eq(j).find(".stt");
                for(let i = 0; i < t.length;i++){
                    t.eq(i).text(i+1);
                }
            }
        }
    </script>
</body>
</html>