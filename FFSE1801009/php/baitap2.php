<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<style type="text/css">
	#remove:hover{
		cursor: help;
		color: #ff253e;
	}
</style>
<body>
	<?php 
	$a=array(2.5,0,-1.7,0.2,-6.2,2,9.5,-3.9);
	$b=array(2,1,-9.6,0.5,0.3,3.6,6,-0.3);
	$x=array();
	$gc=array();
	$stt=1;
	for($i=0; $i < count($a) ; $i++) { 
		if($a[$i]!=0){
			$x[$i]=floor((-$b[$i]/$a[$i])*100)/100;

			$gc[$i] = "phương trình có nghiệm";
		}else{
			if($b[$i] == 0){
				$x[$i]= " -";
				$gc[$i] = "phương trình vô số nghiệm";
			}else{
				$x[$i]= " -";
				$gc[$i] = "hệ số không hợp lệ, a=0";
			}
		}
	}

	?>

	<table border="1px">
		<tr style="background: lightgray">
			<th>stt</th>
			<th>a</th>
			<th>b</th>
			<th>x</th>
			<th>Ghi chú</th>
			<th>Chức năng</th>
		</tr>
		<?php foreach ($a as $key => $value) { if($x[$key]!=" -"){?>
			<tr>
				<td><?php echo $stt++ ?></td>
				<td><?php echo $a[$key] ?></td>
				<td><?php echo $b[$key] ?></td>
				<td><?php echo $x[$key] ?></td>
				<td><?php echo $gc[$key] ?></td>
				<td id="remove" onclick="this.parentElement.remove()">Xóa</td>
			</tr>
		<?php }else{?>
			<tr>
				<td style="color: red"><?php echo $stt++ ?></td>
				<td style="color: red"><?php echo $a[$key] ?></td>
				<td style="color: red"><?php echo $b[$key] ?></td>
				<td style="color: red"><?php echo $x[$key] ?></td>
				<td style="color: red"><?php echo $gc[$key] ?></td>
				<td id="remove" onclick="this.parentElement.remove()">Xóa</td>
			</tr>
		<?php }?> 
	<?php } ?>
</table>
</body>
</html>