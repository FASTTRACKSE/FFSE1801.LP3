<?php
$listStudent = array(
    [
        "ten"=>"Nhật Nam",
        "toan"=>9,
        "ly"=>8.5,
        "hoa"=>8.9
    ],
    [
        "ten"=>"Nhật N3",
        "toan"=>9,
        "ly"=>8.5,
        "hoa"=>8.9
    ],
    [
        "ten"=>"Quỳnh Nhi",
        "toan"=>7,
        "ly"=>8.8,
        "hoa"=>7.8
    ],
    [
        "ten"=>"Thanh Mai",
        "toan"=>8.5,
        "ly"=>9.2,
        "hoa"=>7.5
    ],
    [
        "ten"=>"Thu Minh",
        "toan"=>6.5,
        "ly"=>6,
        "hoa"=>7
    ],
    [
        "ten"=>"Nguyên Thảo",
        "toan"=>4,
        "ly"=>4.1,
        "hoa"=>3.2
    ],
);

function pointAvg($toan,$ly,$hoa){
    $avg =round(($toan+$ly+$hoa)/3,2);
    if ($avg<5) {
        $note = "Loại yếu";
    } 
    else if($avg<=7){
        $note = "Loại trung bình";
    }
    else if($avg<=8.5){
        $note = "Loại khá";
    }
    else {
        $note = "Loại giỏi";
    }
    return [$avg,$note];
}

$listAvgStudent = [];
function arrPointAvg($type,$arr){
    global $listAvgStudent;
    foreach ($arr as $key => $value) {
        $result=  pointAvg( $value['toan'], $value['ly'], $value['hoa']);
        $temp = ['ten'=>$value['ten'],'toan'=>$value['toan'],'ly'=>$value['ly'],'hoa'=>$value['hoa'],'avg'=>$result[0],'note'=>$result[1]];
        array_push($listAvgStudent,$temp);
    }
}
function cmp($a, $b)
{
    if ($a['avg'] == $b['avg']) {
        return 1;
    }
    if(isset($_REQUEST['sort'])){
        if($_REQUEST['sort']=='up'){
            return ($a['avg'] < $b['avg']) ? -1 : 1;
        }
    }else{
        return ($a['avg'] > $b['avg']) ? -1 : 1;
    }
}
function findPointMax($array){
    $max = 0;
    $tempArr = [];
    foreach ($array as $key => $value) {
        if ($value['avg']>$max) {
            $tempArr=[];
            array_push($tempArr,$value);
            $max=$value['avg'];
        } else if($value['avg']==$max) {
            array_push($tempArr,$value);
        }
    }
    return $tempArr;
}

arrPointAvg("aa",$listStudent);
usort($listAvgStudent, "cmp");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            margin-bottom:20px;
        }
        th, td {
            user-select: none;
            padding: 5px;
            text-align: center;    
        }
        .left{
            text-align:left;
        }
        .right{
            text-align:right;
        }
        .red{
            color:red
        }
        .xoa{
            color:black;
            cursor: pointer;
        }
        .xoa:hover{
            color:red
        }
        .xoa:active{
            color:blue
        }
    </style>
</head>
<body>
    <h1>Bảng tổng kết của lớp 10A1</h1>
    <form action="php-asm-02.php" method="get" style="margin-bottom:20px">
        <label>Sắp xếp:</label>
        <select name="sort" id="sort">
            <option value="down">Giảm dần</option>
            <option value="up">Tăng dần</option>
        </select>
        <input type="submit" value="Chạy">
    </form>
    <table id="table">
        <tr style="background:#eee">
            <th>STT</th>
            <th class='left'>Tên</th>
            <th class='right'>Điểm Toán</th>
            <th class='right'>Điểm Lý</th>
            <th class='right'>Điểm Hóa</th>
            <th class='right'>Tổng Điểm </th>
            <th>Xếp Loại</th>
            <th>Chức năng</th>
        </tr>
        <?php
            foreach ($listAvgStudent as $key => $value) {
                if ($value['avg'] >= 5) {
                    echo "<tr>";
                }else{
                    echo "<tr class='red'>";
                }
                echo "<td>".($key+1)."</td>";
                echo "<td class='left'>".$value['ten']."</td>";
                echo "<td class='right'>".$value['toan']."</td>";
                echo "<td class='right'>".$value['ly']."</td>";
                echo "<td class='right'>".$value['hoa']."</td>";
                echo "<td class='right'>".$value['avg']."</td>";
                echo "<td class='left'>".$value['note']."</td>";
                echo "<td class='xoa' onclick='remove(this)'>Xóa</td>";
                echo "</tr>";
            }
        ?>
    </table >
    <?php
      $findPointMax = findPointMax($listAvgStudent);
      foreach ($findPointMax as $key => $value) {
          echo "Bạn <strong>".$value['ten']."</strong> có điểm cao nhất là: <strong>".$value['avg']."</strong>.</br>";
      }
    ?>
    <script>
        function remove(params) {
            var r = confirm("Bạn có mún xóa không");
            if (r == true) {
                params.parentElement.remove();
            } 
        }
        parent.postMessage(location.pathname+location.search,"http://127.0.0.1:5500");
        document.getElementById('sort').value = "<?php echo $_REQUEST['sort'];?>";
    </script>
</body>
</html>