<?php
function bacnhat($a, $b, $v)
{
    if ($a != 0) {
        if ($b != 0) {
            $x = -$b / $a;
            return array(round($x,2),"Phương trình có nghiệm");
        } else {
            return array(0,"Phương trình có nghiệm");
        }
    } else {
        return array('-',"Hệ số không hợp lệ, $v=0");
    }
}
function bachai($a, $b, $c)
{
    if ($a!=0) {
        $delta = ($b*$b) - (4*$a*$c);
        if ($delta < 0){
            $note = 'Phương trình vô nghiệm.';
            return array('-','-',$note);
        }
        else if ($delta == 0){
            $note = 'Phương trình nghiệm kép.';
            $result=-$b/2*$a;
            $result= round($result,2);
            return array( $result,$result,$note);
        }
        else {
            $note = 'Phương trình có hai nghiệm phân biệt.';
            $resultx1 =round( (-$b + sqrt($delta))/2*$a,2);
            $resultx2 =round( (-$b - sqrt($delta))/2*$a,2);
            return array($resultx1,$resultx2,$note);
        }
    } else {
        $result = bacnhat($b, $c, 'Phương trình bậc nhất: b');
        return array($result[0],'-',$result[1]);
    }
}
$valuebn = array(
    [
        "a" => 2.5,
        "b" => 2,
    ],
    [
        "a" => 0,
        "b" => 1,
    ],
    [
        "a" => -1.7,
        "b" => -9.6,
    ],
    [
        "a" => 0.2,
        "b" => 0.5,
    ],
    [
        "a" => -6.2,
        "b" => 0.3,
    ],
    [
        "a" => 0.2,
        "b" => 3.6,
    ],
    [
        "a" => 9.5,
        "b" => 6,
    ],
    [
        "a" => -3.9,
        "b" => -0.3,
    ],
    [
        "a" => 0,
        "b" => 6,
    ],
    [
        "a" => 5,
        "b" => 2,
    ],
);
$valuebh = array(
    [
        "a" => 2.5,
        "b" => 2,
        "c" => -2
    ],
    [
        "a" => 0,
        "b" => 1,
        "c" => 2
    ],
    [
        "a" => -1.7,
        "b" => -9.6,
        "c" => 10
    ],
    [
        "a" => 0.2,
        "b" => 0.5,
        "c" => 9
    ],
    [
        "a" => -6.2,
        "b" => 0.3,
        "c" => 8
    ],
    [
        "a" => 0.2,
        "b" => 3.6,
        "c" => 1
    ],
    [
        "a" => 9.5,
        "b" => 6,
        "c" => -1
    ],
    [
        "a" => -3.9,
        "b" => -0.3,
        "c" => 5
    ],
    [
        "a" => 0,
        "b" => 6,
        "c" => 3
    ],
    [
        "a" => 5,
        "b" => 2,
        "c" => 2
    ],
);
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
        }
        th, td {
            user-select: none;
            padding: 5px;
            text-align: center;    
        }
        .left{
            text-align:left;
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
    <h1>Giải phương trình bậc nhất</h1>
    <table id="table">
        <tr style="background:#eee">
            <th>STT</th>
            <th>a</th>
            <th>b</th>
            <th>x</th>
            <th>Ghi chú</th>
            <th>Chức năng</th>
        </tr>
        <?php
            foreach ($valuebn as $key => $value) {
                $result=  bacnhat( $value['a'], $value['b'],' a');    
                if (is_numeric($result[0])) {
                    echo "<tr>";
                }else{
                    echo "<tr class='red'>";
                }
                echo "<td>".($key+1)."</td>";
                echo "<td>".$value['a']."</td>";
                echo "<td>".$value['b']."</td>";

                echo "<td>".$result[0]."</td>";
                echo "<td class='left'>".$result[1]."</td>";
                echo "<td class='xoa' onclick='remove(this)'>Xóa</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <h1>Giải phương trình bậc hai</h1>
    <table id="table">
        <tr style="background:#eee">
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
            foreach ($valuebh as $key => $value) {
                $result=  bachai( $value['a'], $value['b'], $value['c']);    
                if (is_numeric($result[0])) {
                    echo "<tr>";
                }else{
                    echo "<tr class='red'>";
                }
                echo "<td>".($key+1)."</td>";
                echo "<td>".$value['a']."</td>";
                echo "<td>".$value['b']."</td>";
                echo "<td>".$value['c']."</td>";
                echo "<td>".$result[0]."</td>";
                echo "<td>".$result[1]."</td>";
                echo "<td class='left'>".$result[2]."</td>";
                echo "<td class='xoa' onclick='remove(this)'>Xóa</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        function remove(params) {
            var r = confirm("Bạn có mún xóa không");
            if (r == true) {
                params.parentElement.remove();
            } 
        }
        parent.postMessage(location.pathname+location.search,"http://127.0.0.1:5500");
    </script>
</body>
</html>