<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		session_start();
		
		if(isset($_POST['them'])){
			$data=array(
					'ten'=>$_POST['hoten'],
					'diem'=>$_POST['diem']
			);
			$_SESSION['ds_sv'][]=$data;
		}

	?>
	<form action="" method="POST">
		Ho ten <input name="hoten" type="text"><br>
		Diem <input name="diem" type="text"><br>
		<input type="submit" name="them" value="Thêm">
	</form>

	<hr>
	<h2>Danh sach sinh vien</h2>
	<!-- <table>
		<tr>
			
			<th>Ten SV</th>
			<th>Diem </th>
		</tr>
		<?php foreach($_SESSION['ds_sv'] as $sinhvien){ ?>
		<tr>
			
			<td><?=$sinhvien['ten'] ?> </td>
			<td><?=$sinhvien['diem'] ?> </td>
		</tr>
		<?php }?>
	</table> -->
	<hr>
	<?php
		for($i=0;$i<count($_SESSION['ds_sv'])-1;$i++){
			for($j=$i;$j<count($_SESSION['ds_sv']);$j++){
				if($_SESSION['ds_sv'][$i]['diem']<$_SESSION['ds_sv'][$j]['diem']){
					
					$tg = $_SESSION['ds_sv'][$i];
					$_SESSION['ds_sv'][$i]=$_SESSION['ds_sv'][$j];
					$_SESSION['ds_sv'][$j]=$tg;
				}
			}
		}
	 ?>
	 <table>
		<tr>
			
			<th>Ten SV</th>
			<th>Diem </th>
		</tr>
		<?php foreach($_SESSION['ds_sv'] as $sinhvien){ 
			if($sinhvien['diem']<5){
				$style="style='color:red'";
			}else{
				$style="";
			}
			?>
		<tr>
			
			<td <?=$style?>><?=$sinhvien['ten'] ?> </td>
			<td <?=$style?>><?=$sinhvien['diem'] ?> </td>
		</tr>
		<?php }?>
	</table>
</body>
</html>