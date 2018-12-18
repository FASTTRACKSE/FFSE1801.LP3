<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.ban{
			border-collapse: collapse;
		}
		.ban tr th, td{
			border: 1px solid #000;
			width: 15rem;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	if(isset($_GET['timkiem'])){
		$name= $_GET['search'];
		//Khởi tạo conection
		$mysqli= new mysqli("localhost","root","","ffse1701");
		//Set TV
		$mysqli->set_charset("utf8");
		//Tạo câu lệnh SQL
		$sql="SELECT * FROM lms_students WHERE first_name LIKE '%{$name}'";
		//Thực hiện truy vấn
		$result = $mysqli -> query($sql);

        //Lọc dữ liệu
        // while($item = $result -> fetch_assoc()){
        //     echo '<pre>';
        //     print_r($item);
        //     echo '<pre>';
        // }
	}
	?>
	<form>
		<input type="text" name="search"/>
		<button type="text" name="timkiem">Tìm kiếm</button>
	</form><br>
	<table class="ban">
		<tr>
			<th>ID</th>
			<th>Lớp</th>
			<th>Tên</th>
			<th>Giới tính</th>
			<th>Email</th>
		</tr>
		<?php while($item = $result -> fetch_assoc()){ ?>
			<tr>
				<td><?= $item['id']?></td>
				<td><?= $item['code']?></td>
				<td><?= $item['first_name']?></td>
				<td><?= $item['sex']?></td>
				<td><?= $item['email']?></td>
			</tr>
        <?php } ?>
	</table>

</body>
</html>