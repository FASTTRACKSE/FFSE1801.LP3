<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			width: 100%;
			font-size: 25px;
			text-align: center;
		}
		table{
			margin: auto;
			width: 50%;
			margin-top: 20px;
		}
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th{
			background-color: #e9ecef;
		}
		select{
			width: 200px;
		}
	</style>
</head>
<body>
	<?php  
		$hocsinh = array(
			[
				'ten' => 'Trần Nguyễn Nhật Nam',
				'toan' => 9,
				'li' => 8.5,
				'hoa' => 8.9,
			],
			[
				'ten' => 'Bùi Ngọc Quỳnh Nhi',
				'toan' => 7,
				'li' => 8.8,
				'hoa' => 7.8,
			],
			[
				'ten' => 'Nguyễn Hoàng Thanh Mai',
				'toan' => 8.5,
				'li' => 9.2,
				'hoa' => 7.5,
			],
			[
				'ten' => 'Trần Thị Thu Minh',
				'toan' => 6.5,
				'li' => 6,
				'hoa' => 7,
			],
			[
				'ten' => 'Trần Thái Nguyên Thảo',
				'toan' => 4,
				'li' => 4.1,
				'hoa' => 3.2,
			],
		);

	?>
	<?php 
		$selectOption[0]=0;
		if($_SERVER['REQUEST_METHOD'] == "POST"){ 
	    	$selectOption = $_POST['taskOption'];
		}
 	?>
	<form action="asm02.php" method="post"> 

		<select name="taskOption">
			<option <?php if (isset($selectOption) && $selectOption=="0") echo "selected";?> value="0">Default</option>
			<option <?php if (isset($selectOption) && $selectOption=="1") echo "selected";?> value="1">Tăng dần</option>
			<option <?php if (isset($selectOption) && $selectOption=="2") echo "selected";?> value="2">Giảm dần</option>
		</select>	
			
		<input type="submit" value="Xếp">
	</form>
	<table>
		<tr>
			<th>TT</th>
			<th>Họ tên</th>
			<th>Điểm toán</th>
			<th>Điểm lí</th>
			<th>Điểm hóa</th>
			<th>Trung bình</th>
			<th>Xếp loại</th>
		</tr>
		<?php 
		$arrtb=array();
		foreach ($hocsinh as $key => $value) { 
			$tb=round((($value['toan']+$value['li']+$value['hoa'])/3),2);
			$hocsinh[$key]['tb']=$tb;
			$arrtb[]=$tb;
			if($selectOption==0)
				{}
			if($selectOption==1)
				sort($arrtb);
			if($selectOption==2)
				rsort($arrtb);
		}
		for ($j=0; $j < count($arrtb); $j++) {
			for ($k=0; $k < count($arrtb); $k++) {
				if ($arrtb[$j]==$hocsinh[$k]['tb']) {
					if ($hocsinh[$k]['tb']>=8.5) {$xl="Giỏi";$color="black";}
						elseif($hocsinh[$k]['tb'] >=7) {$xl="Khá";$color="black";}
							elseif ($hocsinh[$k]['tb']>=5) {$xl="Trung Bình";$color="black";}
								else {$xl="Yếu";$color="red";}

		?>
		<tr style="color: <?=$color?>">
			<td><?=$j+1?></td>
			<td><?=$hocsinh[$k]['ten']?></td>
			<td><?=$hocsinh[$k]['toan']?></td>
			<td><?=$hocsinh[$k]['li']?></td>
			<td><?=$hocsinh[$k]['hoa']?></td>
			<td><?=$hocsinh[$k]['tb']?></td>
			<td><?=$xl?></td>
		</tr>
		<?php  	
				}
			}
		}
		?>
	</table>
	<?php 
	$maxtb= max($arrtb);
        foreach ($hocsinh as $key => $value) {
            if($value['tb']==$maxtb){     
	?>
	<h3><?=$value['ten']?> là học sinh có điểm số trung bình cao nhất.</h3>
	<?php
			}
		}
	?>
</body>
</html>