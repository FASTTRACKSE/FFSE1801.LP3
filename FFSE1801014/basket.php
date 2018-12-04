<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        /* width: 100%; */
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 20px;
    }
    #title{
        background: lightgray;
    }
    #thanhtien{
        color: red;
    }
    .bordernone{
        border: none;
        outline: none;
    }
    a{
        text-decoration: none;
    }
    input[type=number]{
        width: 50%;
        padding: 12px 20px;
        /* margin: 8px 0; */
        box-sizing: border-box;
    }
    </style>
</head>
<body>
    <?php 
        session_start();
        // session_destroy();
    ?>
    <table>
        <tr id='title'>
            <th><b>id</b></th>
            <th><b>tên sản phẩm</b></th>
            <th> <b>giá</b></th>
            <th><b>số lượng</b></th>
            <th><b>tổng tiền</b></th>
        </tr>
    <?php 
            $endtotal=0;
        if (isset($_SESSION['danhsach'])) {
            foreach ($_SESSION['danhsach'] as $key => $value) {?>
            <?php $total=$value['price']*$value['quantity']; $endtotal+=$total; ?>
        <tr>
            <td><?= $key?></td>
            <td><?= $value['name'] ?></td>
            <td><?= number_format($value['price']).'đ' ?></td>
            <td> <input class='bordernone' min=1 type="number" name="" id="" value="<?= $value['quantity'] ?>"></td>
            <td><?= number_format($total).'đ'?></td>
        </tr>
    <?php }}?>
        <tr>
            <td class='bordernone'></td>
            <td class='bordernone'></td>
            <td class='bordernone' id='thanhtien'>Thành tiền:</td>
            <td class='bordernone'><?= number_format($endtotal).'đ' ?></td>
        </tr>
    </table>

    <a href="shop.php">trở về</a>
    <!-- <script>
        function updatedata() {

        }
    </script> -->
</body>
</html>