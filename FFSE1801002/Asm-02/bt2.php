<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bt2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name= array("Trần Nguyễn Nhật Nam","Bùi Ngọc Quỳnh Nhi","Nguyễn Hoàng Thanh Mai","Trần Thị Thu Minh","Nguyễn Thái Nguyên Thảo");
        $toan= array(9,7,8.5,6.5,4);
        $ly= array(8.5,8.8,9.2,6,4.1);
        $hoa= array(8.9,7.8,7.5,7,3.2);
        $tong= array();
        for($i=0;$i<count($toan);$i++){
            $tong[$i]=($toan[$i]+$ly[$i]+$hoa[$i])/3;
        }
        $k=0;
        $j=0;
        $tam=0;
        while($k<count($tong)){
            $j=$k+1;
            while($j<count($tong)){
                if($tong[$j]>$tong[$k]){
                    $tam=$tong[$k];
                    $tong[$k]=$tong[$j];
                    $tong[$j]=$tam;
                    //------------------
                    $tam=$name[$k];
                    $name[$k]=$name[$j];
                    $name[$j]=$tam;
                    //------------------
                    $tam=$toan[$k];
                    $toan[$k]=$toan[$j];
                    $toan[$j]=$tam;
                    //------------------
                    $tam=$ly[$k];
                    $ly[$k]=$ly[$j];
                    $ly[$j]=$tam;
                    //------------------
                    $tam=$hoa[$k];
                    $hoa[$k]=$hoa[$j];
                    $hoa[$j]=$tam;
                }$j++;
            }$k++;
        }
    ?>
    <h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
    <table>
        <tr>
            <th>TT</th>
            <th>Họ tên</th>
            <th>Điểm toán</th>
            <th>Điểm lý</th>
            <th>Điểm hóa</th>
            <th>Tổng điểm</th>
            <th>Xếp loại</th>
        </tr>
        <?php for($i=0;$i<count($toan);$i++){
            if($tong[$i]<5){
                echo "<tr style='color: red;'>";
            }else{
                echo "<tr>";
            } ?>
            <td><?=($i+1)?></td>
            <td><?=$name[$i]?></td>
            <td><?=$toan[$i]?></td>
            <td><?=$ly[$i]?></td>
            <td><?=$hoa[$i]?></td>
            <td><?=round($tong[$i], 2)?></td>
            <?php if($tong[$i]<5){ ?>
                <td><?="Loại yếu"?></td>
            <?php }else if($tong[$i]>5 && $tong[$i]<=7){ ?>
                <td><?="Loại trung bình"?></td>
            <?php }else if($tong[$i]>7 && $tong[$i]<=8.5){ ?>
                <td><?="Loại khá"?></td>
            <?php }else if($tong[$i]>8.5){ ?>
                <td><?="Loại giỏi"?></td>
            </tr>
                <?php } ?>
        <?php } ?>
    </table>
    <p>Bạn <b><?=$name[0]?></b> có điểm trung bình cao nhất là: <b><?=$tong[0]?></b></p>
</body>
</html>