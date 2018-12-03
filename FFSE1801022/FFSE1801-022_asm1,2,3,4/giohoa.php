<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script language="javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
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
        .edit,.delete{
            cursor: pointer;
        }
        .edit:hover,
        .delete:hover{
            color:blue;
        }
    </style>
<body>
        
        <table cellpadding="10" cellspacing="0"> 
            <tr>
                <th>Id</th>
                <th>Tên hoa</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Tổng tiền</th>
                <th>Chức năng</th>
            </tr>
            <form action='' method='post'>
            <?php
                if (isset($_SESSION['id'])){
                    $t = 0;
                    foreach($_SESSION['id'] as $key => $value){
                        if(isset($_POST["delete".$key])){
                            unset($_SESSION['id'][$key]);
                        }
                        if(isset($_POST["edit".$key])){
                            if(isset($_POST["quantity1".$key])){
                                $_SESSION['id'][$key][1] = $_POST["quantity1".$key];
                                echo $_POST["quantity1".$key];
                                $value[1] = $_SESSION['id'][$key][1];
                            }
                        }
                        if (isset($_SESSION['id'][$key])){
                            echo "<tr>";
                            echo "<td>".$key."</td>";
                            echo "<td>".$value[0]."</td><td><input type='number' value='".$value[1]."' name='quantity1".$key."' min='1' max='10'/></td><td>".$value[2]."</td>";
                            $sum = $value[1]*$value[2];
                            echo "<td>".$sum."</td>";
                            echo "<td>   <button name='edit".$key."'> sửa </button> | <button name='delete".$key."'> xóa </button> </td>";
                            echo "</tr>";
                        }
                        if(isset($sum)){
                            $t = $t + $sum;
                        }
                    }
                }
            ?>
            </form> 
        </table>
        <?php
        if(isset($t)){
            echo "Thành tiền: ".$t;
        }
        ?>
</body>
</html>