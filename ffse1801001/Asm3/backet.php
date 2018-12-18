<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asm3_backet</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<?php
session_start();
if (isset($_REQUEST['buy'])) {
 $flowername                    = $_REQUEST['flowername'];
 $amount                        = $_REQUEST['amount'];
 $price                         = $_REQUEST['price'];
 $_SESSION['cart'][$flowername] = [
  'flowername' => $flowername,
  'amount'     => $amount,
  'price'      => $price,
 ];
}
;
?>
<body>
    <div id="bill">
        <section class="bg-light mt-4 pt-2 pb-4">
            <div id="shop" class="container">
                <div class="title">
                    <h5
                    class="card-title text-center mt-4 pt-4 shadow-lg pb-4 mb-4"
                    style="font-size: 40px; color:#90717f;"
                    >
                    SUNFLOWER
                    </h5>
                </div>

                <div class="row">

                    <div class="col-md-8 mt-3 shadow container">
                        <h3 style="padding: 10px" class="text-center">Giỏ hàng</h3>

                        <table class="table">
                            <thead style="background:#dee2e6">
                                <tr>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php
$pay = 0;
foreach (isset($_SESSION['cart']) ? $_SESSION['cart'] : [] as $key => $value) {
 echo "<tr>";
 echo '<th scope="row">' . $value['flowername'] . '</th>';
 echo '<td>' . $value['price'] . '</td>';
 echo '<td>' . $value['amount'] . '</td>';
 $total = (int)$value['amount'] * (int)$value['price'];
 $pay += $total;
 echo '<td>' . $total . '</td>';
 echo '<td>'.'<a href="./edit.php">Sửa |</a>'.'<a href="./edit.php">| Xóa</a>'.'</td>';
 echo "</tr>";


}
;
?>


                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Thành tiền</td>
                                    <td><?php echo $pay; ?> đ</td>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <a href="./sunflower.php">Trở về</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="./bootstrap.min.js"></script>
<script src="./jquery-3.3.1.slim.min.js"></script>
<script src="./popper.min.js"></script>
</body>
</html>
