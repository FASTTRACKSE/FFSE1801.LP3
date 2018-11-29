<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asm-01</title>
    <link rel="stylesheet" href="style-day1.css">
</head>
<body>
    <?php
        $a= array(2.5,0,-1.7,0.2,-6.2,0.2,9.5,-3.9);
        $b= array(2,1,-9.6,0.5,0.3,3.6,6,-0.3);
        $x= array();
        for($i=0;$i<count($a);$i++){
            if($a[$i]==0){
                $x[$i]="";
            }
            else{
                $x[$i]= -($b[$i])/($a[$i]);
            }
        }
    ?>
    <h1>Giải phương trình bậc nhất, 1 ẩn số</h1>
    <br>
    <table>
        <tr>
            <th>TT</th>
            <th>a</th>
            <th>b</th>
            <th>x</th>
            <th>Ghi chú</th>
            <th>Chức năng</th>
        </tr>
        <?php
            for($i=0;$i<count($a);$i++){
                if($a[$i]!=0){
                    echo "<tr>";
                }else{
                    echo "<tr style='color:red;'>";
                }
                echo "<td>".($i+1)."</td>";
                echo "<td>".$a[$i]."</td>";
                echo "<td>".$b[$i]."</td>";
                if($a[$i]==0){
                    echo "<td>-</td>";
                }
                else{
                    echo "<td>".round($x[$i], 2)."</td>";
                }
                if($a[$i]==0){
                    echo "<td>Hệ số không hợp lệ, a=0</td>";
                }
                else{
                    echo "<td>Phương trình có nghiệm</td>";
                }
                echo "<td class='del' onclick='remove(this)'>xóa</td>";
                // echo "<td class='del' onclick='this.parentElement.remove()'>xóa</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        function remove(params){
            if(confirm("Bạn có muốn xóa dòng này không?")){
                params.parentElement.remove();
            } 
        }
    </script>
</body>
</html>