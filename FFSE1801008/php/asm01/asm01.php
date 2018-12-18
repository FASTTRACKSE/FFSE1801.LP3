<!DOCTYPE html>
<html>
<head>
	<title>asm01</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	$a= array(2.5,0,-1.7,0.2,-6.2,0.2,9.5,3.9);
	$b= array(2.0,1.0,-9.6,0.5,0.3,3.6,6.0,-0.3);
	$x= array();
	for($i=0;$i<count($a);$i++){
		if ($a[$i]==0) {
			$x[$i]="";
		}else{
			$x[$i]=-($b[$i])/($a[$i]);
		} 
	}
?>
<div class="bang1">
	<h1>Giải phương trình bậc nhất</h1><br>
	<table border=1 cellspacing=0 cellpading=0>
		<tr>
			<th>TT</th>
			<th> A </th>
			<th> B </th>
			<th> x </th>
			<th> Ghi chú </th>
			<th> Chức năng </th>
		</tr>
<?php
	for ($tt=0; $tt<count($a); $tt++) { 
	echo "<tr>";
		echo "<td>".($tt+1)."</td>";
		echo "<td>".$a[$tt]."</td>";
		echo "<td>".$b[$tt]."</td>";
		if($a[$tt]!=0){ echo "<td>".$x[$tt]."</td>";}
		else{echo "<td>_</td>";}
		if($a[$tt]!=0){ echo "<td> Phương trình có nghiệm </td>";}
		else{echo "<td> Hệ số không hợp lệ </td>";}
		echo "<td> Xóa </td>";
	echo "</tr>";
	}
?>
	</table>
</div>	
<?php
	$c= array(1,0,4,1.5,3,0.5,3);
	$d= array(4,6,8,0,6,3,5);
	$e= array(0,2,4,5,6.5,4,8);
	$x1= array();
	$x2= array();
	for($i=0;$i<count($c);$i++){
		if ($c[$i]==0) {
			$x1[$i]="";
			$x2[$i]="";
		}else{
			$delta[$i]=($d[$i])*($d[$i])-4*$c[$i]*$e[$i];
			if ($delta[$i]>0){
				$x1[$i]=(-$d[$i]-sqrt($delta[$i]))/2*$c[$i];
				$x2[$i]=(-$d[$i]+sqrt($delta[$i]))/2*$c[$i];
			}else {
				if ($delta[$i]==0) {
					$x1[$i]=(-$d[$i])/2*$c[$i];
					$x2[$i]=(-$d[$i])/2*$c[$i];
				}else {
					$x1[$i]="Vô nghiệm";
					$x2[$i]="Vô nghiệm";
				}
			}
		} 
	}
?>
<div class="bang2">
	<h1>Giải phương trình bậc 2</h1><br>
	<table border=1 cellspacing=0 cellpading=0>
		<tr>
			<th>TT</th>
			<th> A </th>
			<th> B </th>
			<th> C </th>
			<th> Delta </th>
			<th> x1 </th>
			<th> x2 </th>
			<th> Ghi chú </th>
			<th> Chức năng </th>
		</tr>	
<?php
	for ($tt=0; $tt<count($c); $tt++) { 
	echo "<tr>";
		echo "<td>".($tt+1)."</td>";
		echo "<td>".$c[$tt]."</td>";
		echo "<td>".$d[$tt]."</td>";
		echo "<td>".$e[$tt]."</td>";
		if($c[$tt]>0){
			echo "<td>".$delta[$tt]."</td>";
		}else{
			echo "<td>___</td>";
		}
		if($c[$tt]!=0){ 
			echo "<td>".$x1[$tt]."</td>";
		}else{
			echo "<td>___</td>";
		}
		if($c[$tt]!=0){ 
			echo "<td>".$x2[$tt]."</td>";
		}else{
			echo "<td>___</td>";}
		if($c[$tt]==0){ 
			echo "<td> Hệ số không hợp lệ </td>";
		}else{
			if($delta[$tt]>0){
				echo "<td> Phương trình có 2 nghiệm </td>";
			}else{
				if ($delta[$tt]==0) {
					echo "<td> Phương trình có nghiệm kép </td>";
					}else {
						echo "<td> Phương trình vô nghiệm  </td>";
					}
				}
			}
		echo "<td> Xóa </td>";
	echo "</tr>";
	}
?>			
	</table>
</div>	
</body>
</html>