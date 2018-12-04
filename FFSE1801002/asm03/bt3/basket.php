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
        // session_destroy();
		if(isset($_POST['submit'])){
			$data=array(
					'tenhoa'=>$_POST['tenhoa'],
                    'soluong'=>$_POST['soluong'],
                    'gia'=>$_POST['gia']
			);
			$_SESSION['ds'][$_POST['id']]=$data;
		}
    ?>
    <h1>Giỏ hàng</h1>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach($_SESSION['ds'] as $key=>$idhoa){ ?>
		<tr>
            <td class="mau"><?=$idhoa['tenhoa']?></td>
            <td><?=$idhoa['gia']?></td>
            <td><input value="<?=$idhoa['soluong']?>" class="sl"></td>
            <td><?=($idhoa['gia']*$idhoa['soluong'])?></td>
            <td>
                <a href="http://localhost/FFSE1801.LP3/FFSE1801002/asm03/bt3/edit.php?id=<?=$key?>">Sửa</a> | 
                <a href="http://localhost/FFSE1801.LP3/FFSE1801002/asm03/bt3/delete.php?id=<?=$key?>">Xóa</a>
            </td>
		</tr>
		<?php }?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="mau">Thành tiền:</td>
            <?php
                $thanhtien=0;
                foreach($_SESSION['ds'] as $idhoa2){
                    $thanhtien+=$idhoa2['gia']*$idhoa2['soluong'];
                }
            ?>
            <td><?=$thanhtien?></td>
        </tr>
    </table><br>
    <a href="shop.php">Trở về</a>
</body>
</html>