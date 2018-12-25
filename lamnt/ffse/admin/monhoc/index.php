<?php 
	require "../../Libraries/My_model.php";
	$model=new My_model();
	$model->table="lms_subjects";
	$arMH= $model->get_all();
   echo "<pre>";
   print_r($arMH);
   echo "</pre>";
   die();
?>