<?php 
	$arr = array("ten"=>"abc","name"=>"a");
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	$arr['so']=9;
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	unset($arr['so']);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	unset($arr);
	if(isset($arr)){
	echo "<pre>";
	echo $arr;
	echo "</pre>";
	}else{
		echo "Bien ko ton tai";
	}
	
?>