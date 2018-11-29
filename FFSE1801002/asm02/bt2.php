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
        $ds= array(
            array(
                'ten'=>'Trần Nguyễn Nhật Nam',
                'toan'=>9,
                'ly'=>8.5,
                'hoa'=>8.9
            ),
            array(
                'ten'=>'Bùi Ngọc Quỳnh Nhi',
                'toan'=>7,
                'ly'=>8.8,
                'hoa'=>7.8
            ),
            array(
                'ten'=>'Nguyễn Hoàng Thanh Mai',
                'toan'=>8.5,
                'ly'=>9.2,
                'hoa'=>7.5
            ),
            array(
                'ten'=>'Trần Thị Thu Minh',
                'toan'=>6.5,
                'ly'=>6,
                'hoa'=>7
            ),
            array(
                'ten'=>'Nguyễn Thái Nguyên Thảo',
                'toan'=>4,
                'ly'=>4.1,
                'hoa'=>3.2
            )
            );
        foreach($ds as $k => $v){
            $ds[$k]['tong']=($v['toan']+$v['ly']+$v['hoa'])/3;
            // echo $v['tong'];
            // echo "<br>";
        }
        $k=0;
        $j=0;
        $tam=0;
        while($k<5){
            $j=$k+1;
            while($j<5){
                if(($ds[$j]['tong'])>($ds[$k]['tong'])){
                    $tam=$ds[$k]['tong'];
                    $ds[$k]['tong']=$ds[$j]['tong'];
                    $ds[$j]['tong']=$tam;
                    //--------------------------------
                    $tam=$ds[$k]['ten'];
                    $ds[$k]['ten']=$ds[$j]['ten'];
                    $ds[$j]['ten']=$tam;
                    //--------------------------------
                    $tam=$ds[$k]['toan'];
                    $ds[$k]['toan']=$ds[$j]['toan'];
                    $ds[$j]['toan']=$tam;
                    //--------------------------------
                    $tam=$ds[$k]['ly'];
                    $ds[$k]['ly']=$ds[$j]['ly'];
                    $ds[$j]['ly']=$tam;
                    //--------------------------------
                    $tam=$ds[$k]['hoa'];
                    $ds[$k]['hoa']=$ds[$j]['hoa'];
                    $ds[$j]['hoa']=$tam;
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
        <?php
            foreach($ds as $k3 => $v3){
                if($ds[$k3]['tong']<5){
                    echo "<tr style='color: red;'>";
                }else{
                    echo "<tr>";
                } ?>
                <td><?=($k3+1)?></td>
                <td><?=$ds[$k3]['ten']?></td>
                <td><?=$ds[$k3]['toan']?></td>
                <td><?=$ds[$k3]['ly']?></td>
                <td><?=$ds[$k3]['hoa']?></td>
                <td><?=round($ds[$k3]['tong'],2)?></td>
                <?php if($ds[$k3]['tong']<5){ ?>
                <td><?="Loại yếu"?></td>
                <?php }else if($ds[$k3]['tong']>5 && $ds[$k3]['tong']<=7){ ?>
                <td><?="Loại trung bình"?></td>
                <?php }else if($ds[$k3]['tong']>7 && $ds[$k3]['tong']<=8.5){ ?>
                <td><?="Loại khá"?></td>
                <?php }else if($ds[$k3]['tong']>8.5){ ?>
                <td><?="Loại giỏi"?></td>
            
            <?php } ?>
            </tr>
            <?php } ?>
    </table>
    <p>Bạn <b><?=$ds[0]['ten']?></b> có điểm trung bình cao nhất là: <b><?=$ds[0]['tong']?></b></p>
</body>
</html>