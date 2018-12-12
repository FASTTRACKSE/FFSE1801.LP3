<!DOCTYPE html>
<html>
<head>
	<title>bt4</title>
</head>
<body>
	<?php session_start();
	if (isset($_POST['xacnhan'])) {
		$id=$_POST['id'];
		$nameac=$_POST['name'];
		$password=$_POST['password'];
		$fullname=$_POST['fullname'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$fovorite=$_POST['favorite'];
		if ($_FILES['avatar']['error']==4) {
			echo 'Vui lòng chọn file';
		}else{
	// Rename file without timezone
			$name=$_FILES['avatar']['name'];
			$arr=explode('.', $name);
			$file_name=time().'.'.end($arr);
			//get part root of server
			$part_root=$_SERVER['DOCUMENT_ROOT']."/php/phpngay5/img/".$file_name;
			//get tmp part
			$tmp_name=$_FILES['avatar']['tmp_name'];
			//do upload file
			move_uploaded_file($tmp_name, $part_root);
		} 
		$data=array(
			'id'=>$id,
			'name'=>$nameac,
			'password'=>$password,
			'fullname'=>$fullname,
			'address'=>$address,
			'gender'=>$gender,
			'favorite'=>$favorite,
			'img'=>$file_name
		);
		$_SESSION['account'][]=$data;
		header("location: baitap4b.php");
	}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table border="1px" cellpadding="8px" cellspacing="0px" style="width: 900px; margin: auto;">
			<tr>
				<td>Tên đăng nhập(*)</td>
				<td>
					<input type="text" name="name" style="width:240px">
				</td>
			</tr>

			<tr>
				<td>Mật khẩu(*)</td>
				<td>
					<input type="password" name="password" style="width:240px">
				</td>
			</tr>

			<tr>
				<td>Họ và tên(*)</td>
				<td>
					<input type="text" name="fullname" style="width:240px">
				</td>
			</tr>

			<tr>
				<td>Ảnh đại diện(*)</td>
				<td>
					<input type="file" name="avatar" style="width:240px">
				</td>
			</tr>

			<tr>
				<td>Địa chỉ</td>
				<td>
					<select name="address">
						<option value="Đà Nẵng">Đà Nẵng</option>
						<option value="Quảng Nam">Quảng Nam</option>
						<option value="Quảng Bình">Quảng Bình</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Giới tính</td>
				<td>
					<input checked type="radio" name="gender" value="Nam">Nam<br>
					<input type="radio" name="gender" value="Nữ">Nữ
				</td>
			</tr>

			<tr>
				<td>Sở thích</td>
				<td>
					<input checked type="checkbox" name="favorite" value="Xem phim">Xem phim<br>
					<input type="checkbox" name="favorite" value="Nghe nhạc">Nghe nhạc<br>
					<input type="checkbox" name="favorite" value="Đọc báo">Đọc báo
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" name="xacnhan">xác nhận</button>
					<button type="button" name="huybo">hủy bỏ</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>