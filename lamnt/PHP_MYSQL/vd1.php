<?php 
	if(isset($_GET['timkiem'])){
		$name= $_GET['search'];
		//khởi tạo connection
		$mysqli = new mysqli("localhost","root","","ffse1701");
		//set mã tiếng việt
		$mysqli->set_charset("utf8");
		//tao câu lệnh sql
		$sql="SELECT * FROM lms_students WHERE first_name LIKE '%{$name}'";
		//thực truy vấn
		$result = $mysqli->query($sql);

		//lọc dữ liệu
		while($item = $result->fetch_assoc()){
			echo "<pre>";
			print_r($item);
			echo "</pre>";

		}
	}
?>
<form>
	<input type="text" name="search"/>
	<button type="submit" name="timkiem"> Tim kiem</button>
</form>