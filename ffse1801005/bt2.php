<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bt2</title>
</head>
<body>
	<?php
	$TT=1;
	$lop10a1=array(
		'hs1'=>array(
			'hoten'=>'Trần Nhật Nam',
			'toán'=>9,
			'lý'=>8,
			'hóa'=>6.5,
			'tk'=>'',
			'xl'=>'',
		),
		'hs2'=>array(
			'hoten'=>'Bùi Ngọc Nhi',
			'toán'=>9,
			'lý'=>9,
			'hóa'=>9.5,
			'tk'=>'',
			'xl'=>'',
		),
		'hs3'=>array(
			'hoten'=>'Nguyễn Hoàng Mai',
			'toán'=>9,
			'lý'=>7,
			'hóa'=>6.5,
			'tk'=>'',
			'xl'=>'',
		),
		'hs4'=>array(
			'hoten'=>'Trần Thị Thu Minh',
			'toán'=>7,
			'lý'=>8,
			'hóa'=>6.5,
			'tk'=>'',
			'xl'=>'',
		),
		'hs5'=>array(
			'hoten'=>'Nguyễn Thị Thu Thảo',
			'toán'=>4,
			'lý'=>3.5,
			'hóa'=>3.5,
			'tk'=>'',
			'xl'=>'',
		),
	);
	?>



	<table border="1px">
		<tr style="background: lightgray">
			<th>TT</th>
			<th>Họ Tên</th>
			<th>Điểm toán</th>
			<th>Điểm lý</th>
			<th>Điểm hóa</th>
			<th>Tổng kết</th>
			<th>Xếp loại</th>
		</tr>
		<?php foreach ($lop10a1 as $key => $value) {
			$value['tk']=floor((($value['toán']+$value['lý']+$value['hóa'])/3)*100)/100;
			?>
			<?php
			if ($value['tk']<5) {
				$value['xl']='loại yếu';
			}else{
				if ($value['tk']>5&&$value['tk']<=7) {
					$value['xl']='loại trung bình';
				}else{
					if ($value['tk']>7&&$value['tk']<=8.5) {
						$value['xl']='loại khá';
					}else{
						$value['xl']='loại giỏi';
					}
				}
			} if ($value['xl']!='loại yếu') {
				?>
				<tr>
					<td><?php echo $TT++ ?></td>
					<td><?php echo $value['hoten'] ?></td>
					<td><?php echo $value['toán'] ?></td>
					<td><?php echo $value['lý'] ?></td>
					<td><?php echo $value['hóa'] ?></td>
					<td><?php echo $value['tk']?></td>
					<td><?php echo $value['xl'] ?></td>
				</tr>
			<?php }else {?>
				<tr>
					<td style="color:red"><?php echo $TT++ ?></td>
					<td style="color:red"><?php echo $value['hoten'] ?></td>
					<td style="color:red"> <?php echo $value['toán'] ?></td>
					<td style="color:red"><?php echo $value['lý'] ?></td>
					<td style="color:red"><?php echo $value['hóa'] ?></td>
					<td style="color:red"> <?php echo $value['tk']?></td>
					<td style="color:red"><?php echo $value['xl'] ?></td>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
</body>
</html>