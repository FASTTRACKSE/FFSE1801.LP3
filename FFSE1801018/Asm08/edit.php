<?php 
$mysqli = new mysqli("localhost","root","","ffse1701");
$mysqli-> set_charset("utf8");

$code=$_GET['code'];

$sql="SELECT * FROM lms_students WHERE code='{$code}'";
$sv = $mysqli->query($sql)->fetch_assoc();

if(isset($_POST['add'])){
		
		$id=$_POST['id'];
		
		$first_name=$_POST['first_name'];
		$sex=$_POST['sex'];
		$email=$_POST['email'];
		$birth_day=$_POST['birth_day'];
		$sql1 = "UPDATE lms_students SET id='$id',first_name='$first_name',sex='$sex',email='$email' WHERE code='$code'";
		
		$rs=$mysqli->query($sql1);
		if($rs==true){
			echo "Sua thanh cong";
			
			
		}else{
			echo "Sua that bai, vui long lien he 0905870000";
			
		}
	}
?>
<form method="POST">
	<pre>
	<label>ID</label>
	<input type="number"value="<?=$sv['id'];?>" name="id">
	<label>Ma sv</label>
	<input type="text" disabled value="<?=$sv['code'];?>" name="code">
	<label>Ten</label>
	<input type="text"value="<?=$sv['first_name'];?>" name="first_name">
	<label>Gioi tinh</label>
	<select name="sex"value="<?=$sv['sex'];?>">
		<option value="F">Nam</option>
		<option value="M">Nu</option>
	</select>
	<label>Email</label>
	<input type="text"value="<?=$sv['email'];?>" name="email">
	<label>Ngay sinh</label>
	<input type="text"value="<?=$sv['birth_day'];?>" name="birth_day">
	
	<button type="submid" name="add">Add</button>
	</pre>
	<a href="index.php">Turn left</a>
</form>