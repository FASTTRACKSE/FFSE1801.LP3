<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        $key=$_GET['id'];
        if(isset($_POST['edit'])){
			$data=array(
					'tenhoa'=>$_POST['tenhoa'],
                    'soluong'=>$_POST['soluong'],
                    'gia'=>$_POST['gia']
			);
            $_SESSION['ds'][$key]=$data;
            header("location: basket.php");
		}
    ?>
    <div class="nen1">
        <h3>Cửa hàng Sunflower</h3>
    </div>
    <div class="nen2">
        <form action="" method="POST">
            Tên hoa: <br><input name="tenhoa" type="text" value="<?=$_SESSION['ds'][$key]['tenhoa']?>"><br>
            Số lượng: <br><input name="soluong" type="number" value="<?=$_SESSION['ds'][$key]['soluong']?>"><br>
            Đơn giá: <br><input name="gia" type="number" value="<?=$_SESSION['ds'][$key]['gia']?>"><br>
            <input name="edit" type="submit" value="Cập nhật">
        </form>
    </div>
</body>
</html>