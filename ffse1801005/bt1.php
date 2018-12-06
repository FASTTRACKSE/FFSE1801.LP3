<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
.click:hover{
	cursor:default;
	color:red;
}
</style>
<body>
	<h1 > Phương trình bậc nhất</h1>
	<?php
	$a = array(2.5,0,-1.7,0.2,-6.2,0.2,0,-3.9);
	$b=array(2,1,-9,6,0.5,0.3,3.6,6,-0.3);
	$x=array();
	$ghichu=array();
	$TT=1;
	for ($i=0; $i < count($a); $i++) {
		if ($a[$i]!=0) {
			$x[$i]=floor((-$b[$i]/$a[$i])*100)/100;
			$ghichu[$i]="phương trình có nghiệm";
		}else{
			if ($b[$i]==0) {
				$x[$i]='-';
				$ghichu[$i]="phương trình vô số nghiệm";
			}else{
				$x[$i]='-';
				$ghichu[$i]="Hệ số a không hợp lệ, a=0";
			}
		}
	}

	?>
	<table border="1px" >
		<tr style="background: lightgray">
			<th>TT</th>
			<th>a</th>
			<th>b</th>
			<th>x</th>
			<th>Ghi Chú</th>
			<th>Chức Năng</th>
		</tr>
		<?php foreach ($a as $key => $value){ if($x[$key]!='-'){?>
			<tr>
				<td><?php echo $TT++ ?></td>
				<td><?php echo $a[$key] ?></td>
				<td><?php echo $b[$key] ?></td>
				<td><?php echo $x[$key] ?></td>
				<td><?php echo $ghichu[$key] ?></td>
				<td class="click" onclick="this.parentElement.remove()">Xóa</td>
			</tr>
		<?php }else{?>
			<tr>
				<td style="color: red"><?php echo $TT++ ?></td>
				<td style="color: red"><?php echo $a[$key] ?></td>
				<td style="color: red"><?php echo $b[$key] ?></td>
				<td style="color: red"><?php echo $x[$key] ?></td>
				<td style="color: red"><?php echo $ghichu[$key] ?></td>
				<td class="click" onclick="this.parentElement.remove()">Xóa</td>
			</tr>
		<?php } ?>
	<?php } ?>



	</table >

</body>
</html>