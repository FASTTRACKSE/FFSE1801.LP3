<?php 
session_start();
$dulieu = $_SESSION['giohang'][$_GET['id']];
if(isset($_POST['edit'])){
	$data=array(
		'tenhoa'=>$_POST['tenhoa'],
		'soluong'=>$_POST['soluong'],
		'dongia'=>$_POST['dongia']
	);
	$_SESSION['giohang'][$_GET['id']]=$data;
	header("location: giohang.php");
}
?>
<form action="" method="post" enctype="multipart/form-data" style="background-color: #4cdada70;text-align: left;width: 200px;text-align: center;
">
<h3 style="background-color: #00c4ff;padding: 5px;"><strong style="color: white;font-size: 20px">Cửa hàng Sunflower</strong></h3>
Tên hoa:<br><br>
<input type="text" name="tenhoa" value="<?php echo $dulieu['tenhoa'] ?>"><br><br>
Số lượng:<br><br>
<input type="number" name="soluong" value="<?php echo $dulieu['soluong'] ?>"><br><br>
Đơn giá:<br><br>
<input type="number" name="dongia" value="<?php echo $dulieu['dongia'] ?>"><br><br>
<div style="text-align: center;"><input type="submit" name="edit" value="Cập nhật"></div><br>
</form>