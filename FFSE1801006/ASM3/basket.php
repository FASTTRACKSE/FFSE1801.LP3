<?php session_start();
    // session_destroy();
    echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
    if (isset($_POST['submit'])) {
        
        $donhang = array (
            'ten' => $_POST['tenhoa'],
            'gia' => $_POST['dongia'],
            'sl' => $_POST['soluong']
        );
        $_SESSION["DonHang"] = $donhang;
    };
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giỏ hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-right: 1px solid #e3e3e3;
        }

        td {
            text-align: center;
            padding: 8px;
            width: 100vw;
        }
        tr{
            border-bottom: 1px solid #e3e3e3;
        }
    </style>
</head>
<body>       
        <h1>Giỏ hàng</h1>
        <table>
            <tr style="background: #e3e3e3">
                <td>Tên sản phẩm</td>
                <td>Giá</td>
                <td>Số lượng</td> 
                <td>Tổng tiền</td>
            </tr>
            
            <tr>
                <?php
                    $total = $_SESSION['DonHang']['gia']*$_SESSION['DonHang']['sl'];
                    foreach ($_SESSION['DonHang'] as $value ) {
                        
                        ?>
                        <?php
                        if ($value == $_SESSION['DonHang']['ten']){
                            ?>
                            <td style="color:red"><?=$value?></td>
                            <?php
                        } else {
                            ?>
                            <td><?=$value?></td>
                        <?php
                        };
                    
                    };
                ?>
                <td><?=$total?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="color: red">Thành tiền</td>
                <td><?=$total?></td>
            </tr>
        </table>
</body>
</html>