<?php 
	function upload($arr){
		//tao ten moi
		$arr_name= explode(".",$arr['name']);
		$new_name = time().'.'.end($arr);
		//tao duong dan vao  folder hinh cua du an
		$part_root= $_SERVER['DOCUMENT_ROOT'].'/FFSE1801.LP3/lamnt/php_day6/$dir/'.$new_name ;//D://xamp/htdocs/FFSE1801.LP3/lamnt/php_day6/img/195050505.jpg

		//di chuyen file can upload vao folder
		move_uploaded_file($arr['tmp_name'],$part_root);

		return $new_name;

	}	
	
	echo "Hello";
?>