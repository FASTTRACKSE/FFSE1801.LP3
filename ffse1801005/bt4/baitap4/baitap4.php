<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>batap4</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<table border="1px" cellpadding="10px" cellspacing="0px">
			<tr>
				<td>Tên đăng nhập(*)</td>
				<td>
					<input type="text" name="name" >
				</td>
			</tr>
			<tr>
				<td>Mật khẩu(*)</td>
				<td>
					<input type="password" name="password" >
				</td>
			</tr>
			<tr>
				<td>Họ và tên(*)</td>
				<td>
					<input type="text" name="fullname" >
				</td>
			</tr>
			<tr>
				<td>Ảnh đại diện(*)</td>
				<td>
					<input type="file" name="avatar" >
				</td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td>
					<select name="diachi">
						<option value="đà nẵng">đà nẵng</option>
						<option value="quảng ngãi">quảng ngãi</option>
						<option value="quảng nam">quảng nam</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input checked="checked" type="radio" name="gender" value="nam">Nam<br/>
					<input  type="radio" name="gender" value="nu">Nữ
				</td>
			</tr>
			<tr>
				<td>Sở thích</td>
				<td>
					<input checked="checked" type="checkbox" name="sothich" >Xem phim<br/>
					<input type="checkbox" name="sothich" >Nghe nhạc<br/>
					<input type="checkbox" name="sothich" >Đọc báo<br/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="xacnhan">Xác nhận</button>
					<button type="button" name="xacnhan">Hủy bỏ</button>
				</td>
			</tr>
		</table>
	</form>
	<?php session_start();
	if (isset($_POST['xacnhan'])) {
		$id=$_POST['id'];
		$namedn=$_POST['name'];
		$password=$_POST['password'];
		$fullname=$_POST['fullname'];
		$diachi=$_POST['diachi'];
		$gender=$_POST['gender'];
		$sothich=$_POST['sothich'];


		$name=$_FILES['avatar']['name'];
		$arr=explode('.', $name);
		$file_name=time().'.'.end($arr);
		//get part root of server
		$part_root=$_SERVER['DOCUMENT_ROOT']."/bt4/img/".$file_name;
		//get tmp part
		$tmp_name=$_FILES['avatar']['tmp_name'];
		//do upload file
		move_uploaded_file($tmp_name, $part_root);
		$data=array(
			'id'=>$id,
			'name'=>$namedn,
			'password'=>$password,
			'fullname'=>$fullname,
			'diachi'=>$diachi,
			'gender'=>$gender,
			'sothich'=>$sothich,
			"img"=>$file_name
		);
		$_SESSION['ac'][]=$data;
		header("location: them.php");
	}
	?>
</body>
</html>