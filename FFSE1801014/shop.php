<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop hoa</title>
    <style>
        form{ 
            width: 50%;
            background: aliceblue;
            /* padding-top: 20px; */
            padding-bottom: 20px;
            font-size: 30px;
            font-weight: both;
        }
        input[type=text] {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
            background: #33cccc;
        }
        input[type=submit]{
            margin-left: 45%;
            font-size: 30px;
            font-weight: both;
        }
        input[type=number]{
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form action="shop.php" method='POST'>
        <h1>Cửa Hàng Sunflower</h1>
        <label for="">Id hoa</label> <br>
        <input type="text" name='id' required> <br>
        <label for="">Tên hoa</label> <br>
        <input type="text"name='name' required> <br>
        <label for="">số lượng</label> <br>
        <input type="number" name='quantity' min=1 required> <br>
        <label for="">Đơn giá</label> <br>
        <input type="number" name='price' min = 1000 required> <br>
        <input type="submit" value="mua hoa" name='buy'>
    </form>
    <?php 
        session_start();
        if(isset($_POST['id'])){
            $_SESSION['danhsach'][$_POST['id']] = array (
                'name'=> $_POST['name'],
                'quantity'=> $_POST['quantity'],
                'price'=> $_POST['price']
            );
            header("location: basket.php");
        }
    ?>
</body>
</html>