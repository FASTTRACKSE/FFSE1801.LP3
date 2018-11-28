<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASM 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid gray;
            text-align: center;
            padding: 8px;
            width: 100vw;
        }
        .red{
            color: red !important;
        }
        
        .remove:hover{
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $a = array('5','0','-3','5','10','-1','6','-4','-6',"7");
        $b = array('1','-9','-7','-2','1','8','-6','1','0',"8");
        $x = array();

        for ($i=0;$i<count($a);$i++) {
            $x[$i] = (-$b[$i])/2*$a[$i];
        };

    ?>
    <h1>Giải phương trình bậc nhất, 1 ẩn số</h1>
    <br><br><br>
    <table>
        <tr style="background: #e3e3e3;">
            <td><b>a</b></td>
            <td><b>b</b></td>
            <td><b>x</b></td>
            <td><b>Ghi chú</b></td>
            <td></td>
        </tr>
        <?php
            for ($i=0;$i<count($a);$i++) {
                if ($a[$i] == 0) {
                    
                    $kq = "Phương trình vô nghiệm";
                    echo '<tr style="color:red;">';
                    echo '<td>'.$a[$i].'</td>';
                    echo '<td>'.$b[$i].'</td>';
                    echo '<td>-</td>';
                    echo '<td>'.$kq.'</td>';
                    echo '<td class="remove" onclick="this.parentElement.remove()">Xóa</td>';
                    echo '</tr>';
                } else {
                    $kq = "Phương trình có nghiệm"; 
                    echo '<tr>';
                    echo '<td>'.$a[$i].'</td>';
                    echo '<td>'.$b[$i].'</td>';
                    echo '<td>'.$x[$i].'</td>';
                    echo '<td>'.$kq.'</td>';
                    echo '<td class="remove" onclick="this.parentElement.remove()">Xóa</td>';
                    echo '</tr>';
                }

                
            };
        ?>
    
    </table>
    
</body>
</html>