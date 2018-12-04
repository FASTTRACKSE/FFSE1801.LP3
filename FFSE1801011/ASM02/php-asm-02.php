<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        tr th, tr td{
            border: solid 1px black; 
            padding: 1vw 3vw;
            text-align: right;
        }
        tr td.stt{
            padding: 1vw 1vw !important; 
        }
        .error{
            color: red;
        }
        .left{
            text-align: left
        }
        .cen{
            text-align: center;
        }
        table{
            border: solid 1px black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        
        tr th{
            background-color: rgba(0,0,0,0.3);
            font-weight: bold;

        }
    </style>
</head>
<body>
<h1>Bảng điểm tổng kết môn lớp 10A1</h1>
<br>
<?php 
echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
    $lop= [
            ["ten"=> "Trần Nguyễn Nhật Nam",
            "toan" => "7",
            "ly"=> "8.5",
            "hoa"=> "8.9"],
            ["ten"=> "Bùi Ngọc Quỳnh Nhi",
            "toan" => "7",
            "ly"=> "8.8",
            "hoa"=> "7.8"],
            ["ten"=> "Nguyễn Thái Nguyên Thảo",
            "toan" => "4",
            "ly"=> "4.1",
            "hoa"=> "3.2"],
            ["ten"=> "Trần Thị Thu Minh",
            "toan" => "6.5",
            "ly"=> "6",
            "hoa"=> "7"],
            
            ["ten"=> "Trần Thị Thúy Hạnh",
            "toan" => "9",
            "ly"=> "8.5",
            "hoa"=> "8.9"],
            ["ten"=> "Nguyễn Hoàng Thanh Mai",
            "toan" => "8.5",
            "ly"=> "9.2",
            "hoa"=> "7.5"],
        ];
    $stt=1;
    $lop_len=count($lop);
    for ($i=0;$i<$lop_len;$i++){ 
        $lop[$i]['avg']=round((float)($lop[$i]['toan'] + $lop[$i]['ly'] + $lop[$i]['hoa']) /3, 2);    
        }
    for ($i=0; $i<$lop_len-1; $i++){
            for ($j=$i+1; $j<$lop_len; $j++){
            if ($lop[$i]['avg'] < $lop[$j]['avg']){
                $tg=$lop[$i];
                $lop[$i]= $lop[$j];
                $lop[$j]=$tg;
            };
        }
    }
?>
    <table>
        <tr>
        <th>STT</th>
        <th>Họ & tên</th>
        <th>Điểm toán</th>
        <th>Điểm lý</th>
        <th>Điểm hóa</th>
        <th>Điểm TB</th>
        <th>Xếp loại</th>
        </tr>
        <?php 
        // echo "<pre>";
        // print_r ($lop);
        // echo "</pre>";
        
        for ($i=0;$i<$lop_len;$i++){ 
            if ($lop[$i]['avg'] >8.5 ) {
                $xeploai="Loại giỏi";
            } else if ($lop[$i]['avg'] >7 ) {
                $xeploai="Loại khá";
            } else if 
            ($lop[$i]['avg'] >5 ) {
                $xeploai="Loại trung bình";
            } else {$xeploai="Loại yếu";}
        ?>
        <tr <?php if ($xeploai=="Loại yếu") echo "class='error'"?>
        >
            <td class="cen"><?php echo $stt;
                $stt++;
                ?>
            </td>
            <td class="left"><?=$lop[$i]['ten']?></td>
            <td><?=$lop[$i]['toan']?></td>
            <td><?=$lop[$i]['ly']?></td>
            <td><?=$lop[$i]['hoa']?></td>
            <td><?=$lop[$i]['avg']?></td>
            <td class="cen"><?=$xeploai?></td>
        </tr> 
<?php } ?>
    </table><br>
    Bạn <strong><?=$lop[0]['ten']?></strong> có điểm trung bình cao nhất là <strong><?=$lop[0]['avg']?></strong>.
</body>
</html>