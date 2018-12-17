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
        while($item = $result -> fetch_assoc()){
            echo '<pre>';
            print_r($item);
            echo '<pre>';
        }
	}
?>
<form>
	<input type="text" name="search"/>
	<button type="text" name="timkiem">Tìm kiếm</button>
</form>