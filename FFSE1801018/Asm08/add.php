<?php 
$mysqli = new mysqli("localhost","root","","ffse1701");
$mysqli-> set_charset("utf8");

if(isset($_POST['add'])){
	$sql="INSERT INTO lms_students(id,code,first_name,sex,email,birth_day) VALUES($_POST[id],'$_POST[code]','$_POST[first_name]','$_POST[sex]','$_POST[email]',$_POST[birth_day])";


		if($mysqli->query($sql)){
			header("location: index.php");
		}else{
			echo "them khong thanh cong";
		}

}
?>
<form method="POST">
	<pre>
	<label>ID</label>
	<input type="number" name="id">
	<label>Ma sv</label>
	<input type="text" name="code">
	<label>Ten</label>
	<input type="text" name="first_name">
	<label>Gioi tinh</label>
	<select name="sex">
		<option value="F">Nam</option>
		<option value="M">Nu</option>
	</select>
	<label>Email</label>
	<input type="text" name="email">
	<label>Ngay sinh</label>
	<input type="text" name="birth_day">
	
	<button type="submid" name="add">Add</button>
	</pre>
</form>