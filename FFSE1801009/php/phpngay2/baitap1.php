<!DOCTYPE html>
<html>
<head>
	<title>BT2</title>
</head>
<body>
	<h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
	<?php 
	$tt=1;
	$danhsach = array(
		"hs1" => array(
			'name'=> "Huỳnh Chí Hưng",
			'toan'=> 9,
			'ly'=> 8,
			'hoa'=> 8.8,
			'tongdiem' => '',
			'xeploai' => ''
		),
		"hs2" => array(
			'name'=> "Phạm Thị Tín",
			'toan'=> 7,
			'ly'=> 7.5,
			'hoa'=> 9.5,
			'tongdiem' => '',
			'xeploai' => ''
		),
		"hs3" => array(
			'name'=> "Trần Xuân Kỳ",
			'toan'=> 6,
			'ly'=> 7.8,
			'hoa'=> 8.2,
			'tongdiem' => '',
			'xeploai' => ''
		),
		"hs4" => array(
			'name'=> "Trương Quang Minh",
			'toan'=> 4,
			'ly'=> 4.5,
			'hoa'=> 6,
			'tongdiem' => '',
			'xeploai' => ''
		),
		"hs5" => array(
			'name'=> "Trần Quốc Toản",
			'toan'=> 6,
			'ly'=> 5.5,
			'hoa'=> 8,
			'tongdiem' => '',
			'xeploai' => ''
		),

	);
	?>

	<table border="1px">
		<tr style="background-color: lightgray">
			<th>TT</th>
			<th>Họ tên</th>
			<th>Điểm Toán</th>
			<th>Điểm Lý</th>
			<th>Điểm Hóa</th>
			<th>Tổng điểm</th>
			<th>Xếp loại</th>
		</tr>
		<?php foreach ($danhsach as $key => $value){ 
			$value['tongdiem'] = floor((($value['toan'] + $value['ly'] + $value['hoa'])/3)*100)/100;
			?>
			<?php if($value['tongdiem'] > 8.5) {
				$value['xeploai'] = "Loại giỏi";
			}else{
				if(7 < $value['tongdiem'] && $value['tongdiem'] <= 8.5) {
					$value['xeploai'] = "Loại khá";
				}else{
					if(5 < $value['tongdiem'] && $value['tongdiem'] <= 7){
						$value['xeploai'] = "Loại trung bình";
					}else{
						$value['xeploai'] = "Loại yếu";
					}
				}
			} if($value['xeploai'] != 'Loại yếu'){ ?>

			<tr>
				<td><?php echo $tt++ ?></td>
				<td><?php echo $value['name']?></td>
				<td><?php echo $value['toan']?></td>
				<td><?php echo $value['ly']?></td>
				<td><?php echo $value['hoa']?></td>
				<td><?php echo $value['tongdiem']?></td>
				<td><?php echo $value['xeploai']?></td>
			</tr>
		<?php }else{ ?>
			<tr>
				<td style="color: red"><?php echo $tt++ ?></td>
				<td style="color: red"><?php echo $value['name']?></td>
				<td style="color: red"><?php echo $value['toan']?></td>
				<td style="color: red"><?php echo $value['ly']?></td>
				<td style="color: red"><?php echo $value['hoa']?></td>
				<td style="color: red"><?php echo $value['tongdiem']?></td>
				<td style="color: red"><?php echo $value['xeploai']?></td>
			</tr>
		<?php } ?>
	<?php } ?>
</table>
</body>
</html>