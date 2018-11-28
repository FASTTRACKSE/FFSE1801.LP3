<?php
// $name="Hưng";
// echo  $name ; 
// $a="5";
// $b="6";
// $c=$a+$b;
// echo "$c";
	$a=array(3,2,67,12,45,34);
	$max=$a[0];
	for($i=0;$i<count($a);$i++){ 
		if ($a[$i]>$max) {
			$max=$a[$i];
		}
	}
	echo $max;
?>