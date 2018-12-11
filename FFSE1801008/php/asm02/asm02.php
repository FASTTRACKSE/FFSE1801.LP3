<!DOCTYPE html>
<html>
<head>
	<title>asm02</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    $danhsach_hs = array( 
    "1" => array
    (
        "ten" => 'Trần Nguyễn Nhật Nam',
        "diemtoan" => 9,  
        "diemli" => 8.5,
        "diemhoa" => 8.9
    ),

    "2" => array
    (
        "ten" => 'Bùi Ngọc Quỳnh Nhi',
        "diemtoan" => 7,  
        "diemli" => 8.8,
        "diemhoa" => 7.8
    ),

    "3" => array
    (    
        "ten" => 'Nguyễn Hoàng Thanh Mai',
        "diemtoan" => 8.5,  
        "diemli" => 9.2,
        "diemhoa" => 7.5
    ), 
    "4" => array
    (    
        "ten" => 'Trần Thị Thu Minh',
        "diemtoan" => 6.5,  
        "diemli" => 6,
        "diemhoa" => 7
    ), 
    "5" => array
    (    
        "ten" => 'Nguyễn Thái Nguyên Thảo',
        "diemtoan" => 4,  
        "diemli" => 4.1,
        "diemhoa" => 3.2	
    ),
);
?>
	<div class="bang">
		<h1>Bảng điểm tổng kết lớp 10A1</h1>
		<table border=1 cellspacing=0 cellpading=0>
			<tr>
			<th>TT</th>
			<th> Họ Tên </th>
			<th> Điểm toán </th>
			<th> Điểm lí </th>
			<th> Điểm hóa </th>
			<th> Tổng điểm </th>
			<th> Xếp loại </th>
		</tr>
		<?php		
			foreach ($danhsach_hs as $key => $value) {
				$danhsach_hs[$key]['tong']=(($value['diemtoan']+$value['diemli']+$value['diemhoa'])/3);
				if($danhsach_hs[$key]['tong']<5.0){ echo "<tr  style='color: red;'>";};
				echo "<td>".$key."</td>";
				echo "<td>".$value['ten']."</td>";
				echo "<td>".$value['diemtoan']."</td>";
				echo "<td>".$value['diemli']."</td>";
				echo "<td>".$value['diemhoa']."</td>";
				echo "<td>".round($danhsach_hs[$key]['tong'],1)."</td>";
				if($danhsach_hs[$key]['tong']<5.0){
					echo "<td>".'Loại yếu'."</td>";
				}else{if ($danhsach_hs[$key]['tong']<=6.5) {
					echo"<td>".'Loại trung bình'."</td>";
				}else{if ($danhsach_hs[$key]['tong']<8.5) {
					echo"<td>".'Loại khá'."</td>";
				}else {echo"<td>".'Loại giỏi'."</td>";}
				}};
				echo "</tr>";
			}

		?>	
		</table>
		<p>Bạn <b> <?=$danhsach_hs[1]['ten']?></b> có điểm trung bình cao nhất là: <b><?=$danhsach_hs[1]['tong']?></b></p>
	</div>
</body>
</html>