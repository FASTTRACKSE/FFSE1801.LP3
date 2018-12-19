<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	table{
		border-collapse: collapse;
		width: 100%;
		text-align: center;
	}	
	th, td {
		border: 1px solid #000;
	}
	</style>
</head>
<body>
<?php
$seacrh="";
if (isset($_POST['send'])) {
	$seacrh=$_POST['seacrh'];
}

 ?>
	<form method="POST">
			<input type="type" value="<?= $seacrh ?>" name="seacrh">
			<button type="submit"  name="send">Gui du lieu</button>

		</form>
	<?php
$mysqli = new mysqli("localhost","root","","ffse1701");
		$mysqli-> set_charset("utf8");
	$sql = "SELECT * FROM lms_students";
	$result = $mysqli->query($sql);
	if (isset($_POST['send'])){
		
		$sql =" SELECT * FROM lms_students WHERE first_name LIKE '%{$_POST['seacrh']}' ";
		$result = $mysqli->query($sql);
};
		

	

		?>
		
		
			<table>
				<a href="add.php">add</a>
			<tr>
				<th>id</th>
				<th>code</th>
				<th>name</th>
				<th>sex</th>
				<th>email</th>
				<th>birthday</th>
				<th>feature</th>
			</tr>
			<?php while ($row = $result -> fetch_assoc()) { ?>
				<tr>
					<td><?=$row['id'] ?></td>
					<td><?=$row['code'] ?></td>
					<td><?=$row['first_name'] ?></td>
					<td><?=$row['sex'] ?></td>
					<td><?=$row['email'] ?></td>
					<td><?=$row['birth_day'] ?></td>
					<td><a href="del.php?code=<?=$row['code']?>">xoa</a>/
						/<a href="edit.php?code=<?=$row['code']?>">edit</a></td>
				</tr>

			<?php 
			// echo("<pre>");
			// 	print_r($row);
			// 	echo("</pre>");

		} ; 	 ?>
		</table>
	</body>
	</html>