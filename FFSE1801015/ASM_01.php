<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        tr{
            border: 1px solid lightgray;
        }
        th.mot{
            width: 10px;
        }
        th.hai{
            width: 100px;
        }
        th.ba{
            width: 100px;
        }
        th.bon{
            width: 100px;
        }
        th.nam{
            width: 250px;
        }
        tr td{
            text-align: center;
        }
        .red{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Giải phương trình bậc nhất</h1>
    <table border="1">
        <tr>
            <th class="mot">TT</th>
            <th class="hai">a</th>
            <th class="ba">b</th>
            <th class="ba">x</th>
            <th class="nam">Ghi chú</th>
        </tr>
        <?php
            $stt = "0";
            $a = array(0,8,0,8,6,0,2.5,9,4,5);
            $b = array(0,0,5,5,3,5,4,1,3,7);
            $x = array();
            $str = array();
            for($i = 0;$i <count($a);$i++){
                $stt++;
                if($a[$i] != 0){
                    $x[$i]=-$b[$i]/$a[$i];
                    $str[$i]="Phương trình có nghiệm";
                }else{
                    $x[$i]="-";
                    if($b[$i] != 0){
                        $str[$i]="<span style='color:red;'> Hệ số không hợp lệ a=0 </span>";
                        
                    }else{
                        $str[$i]=" Phương trình vô số nghiệm";
                    }
                }
        ?>
        <tr>
            <td><?= $stt; ?></td>
            <td><?= $a[$i]; ?></td>
            <td><?= $b[$i]; ?></td>
            <td><?= $x[$i]; ?></td>
            <td><?= $str[$i]; ?></td>
        </tr>
        <?php }?>
    </table>

    <h1>Giải phương trình bậc hai</h1>
    <table border="1">
        <tr>
            <th class="mot">TT</th>
            <th class="hai">a</th>
            <th class="ba">b</th>
            <th class="ba">c</th>
            <th class="bon">x</th>
            <th class="nam">Ghi chú</th>
        </tr>
        <?php
            $stt = "0";
            $a = array(1,8,2,2,1,6,3,4,6,4);
            $b = array(3,0,4,5,4,2,3,6,2,3);
            $c = array(5,4,2,3,4,7,2,5,2,1);
            $x = array();
            $str = array();
            for($i = 0;$i <count($a);$i++){
                $stt++;
                $d[$i] = ($b[$i]*$b[$i] - 4*$a[$i]*$c[$i]);
                if($d[$i] < 0){
                    $x[$i] = "-";
                    $str[$i] = "Phương trình vô nghiệm";
                }else{
                    if($d[$i] == 0){
                        $x[$i] = (-$b[$i]/2*$a[$i]);
                        $str[$i] = "Phương trình có một nghiệm kép";
                    }else{
                        $x[$i] = ((-$b[$i] + sqrt($d[$i]))/(2*$a[$i])).",".(($b[$i] + sqrt($d[$i]))/(2*$a[$i]));
                        $str[$i] = "Phương trình có hai nghiệm phân biệt";
                    }
                }
                
        ?>
        <tr>
            <td><?= $stt; ?></td>
            <td><?= $a[$i]; ?></td>
            <td><?= $b[$i]; ?></td>
            <td><?= $c[$i]; ?></td>
            <td><?= $x[$i]; ?></td>
            <td><?= $str[$i]; ?></td>
        </tr>
        <?php }?>
    </table>
    
</body>
</html>