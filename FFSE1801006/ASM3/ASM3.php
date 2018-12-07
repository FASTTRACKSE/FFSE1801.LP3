<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASM03</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form{
            display: inline-block;
            background: #8fe6ea;
            width: 30vw;
            margin-left: 5vw;
            height: 43vh;
        }
        p{
            background: #049ba2;
            color: white;
            padding: 14px;
            margin: 0 0 10px 0;
        }
        input{
            margin-left: 1vw;
        }
    </style>
</head>
<body>
    
    <form method="POST" action="basket.php">
        <p>Cửa hàng Sunflower</p>
        Id hoa:<br>
            <input type="text" name="idhoa" ><br><br>
        Tên hoa:<br>
            <input type="text" name="tenhoa" ><br><br>
        Số lượng:<br>
            <input type="number" name="soluong" ><br><br>
        Đơn giá:<br>
            <input type="number" name="dongia" ><br><br>
            <input type="submit" name="submit" value="Mua hoa">
    </form>

</body>
</html>