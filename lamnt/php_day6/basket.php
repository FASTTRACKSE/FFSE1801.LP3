<?php 
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
?>
<table>
	<?php 
		foreach($_SESSION['giohoa'] as $key=>$value){
	?>
	<tr>
		<td><a href="http://localhost/php_day6/edit.php?id=<?=$key?>">Sua</td>
		<td><a href="http://localhost/php_day6/delete.php?id=<?=$key?>">Delete</td>
	</tr>

	<?php } ?>
</table>