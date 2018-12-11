<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
	<style type="text/css">
		form{
			margin-top: 20px;
		}
		span{
			display: inline-block;
			width: 20%;
			margin-bottom: 10px;
			font-weight: bold;
		}
		.red{
			color: red;
		}
	</style>
</head>
<?php 
	function upload($arr){
		$name = $arr['image']['name'];
		$tmp_name = $arr['image']['tmp_name'];
		$part_root = $_SERVER['DOCUMENT_ROOT'];
		$part_upload = $part_root."/php_day7/bai4/list_images/".$name;
		move_uploaded_file($tmp_name, $part_upload);
		return $name;
	}
	session_start();
	if(isset($_POST['submit'])){
		$image=upload($_FILES);
		if($_POST['acc']!="" && $_POST['pass']!="" && $_POST['name']!="" && $image!=""){
			$data=array(
				'pass' => $_POST['pass'],
				'name' => $_POST['name'],
				'image' => $image,
				'city' => $_POST['city'],
				'gender' => $_POST['gender'],
				'fav' => $_POST['fav']
			);
			$acc=$_POST['acc'];
			if(isset($_SESSION['profile'][$acc])){
				echo "<h5 class='red'>Tên đăng nhập đã tồn tại!</h5>";
			}else{
				$_SESSION['profile'][$acc]=$data;
				header("location: asm4-2.php");
			}	
		}
		else 
			echo "<h5 class='red'>Thiếu thông tin!</h5>";
	}
 ?>
<body class="container">
	<form method="POST" enctype="multipart/form-data" >
		<div class="form-group">
		<span>Tên đăng nhập(*)</span>
		<input type="text" name="acc" id='account'><br>
		<span>Mật khẩu(*)</span>
		<input type="password" name="pass" id="password"><br>
		<span>Họ và tên(*)</span>
		<input type="text" name="name" id="fullname"><br>
		<span>Ảnh đại diện(*)</span>
		<input type="file" name="image" id="image"><br>
		<span>Địa chỉ</span>
		<select name="city" id="city">
			<option value="Đà Nẵng">Đà nẵng</option>
			<option value="Hà Nội">Hà Nội</option>
		</select>
		<br>
		<span>Giới tính</span>
		<label>Male</label>
		<input type="radio" name="gender" value="male">
		<label>Female</label>
		<input type="radio" name="gender" value="female">
		<br>
		<span>Sở thích</span>
		<label>Xem Phim</label>
		<input type="checkbox" name="fav[]" value="Xem Phim">
		<label>Nghe nhạc</label>
		<input type="checkbox" name="fav[]" value="Nghe nhạc">
		<label>Đọc báo</label>
		<input type="checkbox" name="fav[]" value="Đọc báo">
		<br>
		<input type="submit" name="submit" value="Xác nhận">
		</div>
		<p class="red">Dấu * là thông tin bắt buộc</p>
	</form>
	
</body>
</html>