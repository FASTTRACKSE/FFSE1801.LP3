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
				echo "<tr>";
				echo "<td>".$key."</td>";
				echo "<td>".$value['ten']."</td>";
				echo "<td>".$value['diemtoan']."</td>";
				echo "<td>".$value['diemli']."</td>";
				echo "<td>".$value['diemhoa']."</td>";
				echo "<td>".round($tong=(($value['diemtoan']+$value['diemli']+$value['diemhoa'])/3),1)."</td>";
				echo (if($tong=>8.5){
					"<td>".'Loại giỏi'."</td>"
				}else{if ($tong>6.5) {
					"<td>".'Loại khá'."</td>"
				}else{if ($tong=>5) {
					"<td>".'Loại trung bình'."</td>"
				}else {"<td>".'Loại yếu'."</td>"}
				}});
				echo "</tr>";
			}
		?>	
		</table>
	</div>
</body>
</html>