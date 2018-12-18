<?php 
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	require "lib.php";
	
?>
<table>
	<?php 
		foreach($_SESSION['giohoa'] as $key=>$value){
	?>
	<tr>
		<td>
		<img width='100px' src="http://localhost/FFSE1801.LP3/lamnt/php_day6/img/<?=$value['avatar']?>">
		</td>
		<td><a href="http://localhost/php_day6/edit.php?id=<?=$key?>">Sua</td>
		<td><a href="http://localhost/php_day6/delete.php?id=<?=$key?>">Delete</td>
	</tr>

	<?php } ?>
</table>