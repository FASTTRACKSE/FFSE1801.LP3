<?php
		session_start();

		if(isset($_POST['send'])){

			if ($_FILES['anh']['error']==4){
				echo("Vui long chon file <hr");
			} else {
				$target_dir = "image/";
				$target_file = $target_dir .basename(time().'.'.strtolower(pathinfo($_FILES['anh']['name'],PATHINFO_EXTENSION)));
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$check = getimagesize($_FILES["anh"]["tmp_name"]);
				if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
					var_dump($target_file);

				} else {
					echo "Sorry, there was an error uploading your file.";
					die;
				}
			}
			$data=array(
				'anh'=>$target_file,
				'id'=>$_POST['id'],
				'pass'=>$_POST['pass'],
				'name'=>$_POST['ten'],
				'address'=>$_POST['addr'],
				'gt'=>$_POST['sex'],
				'st'=>$_POST['favo']
			);	
			$_SESSION[$_POST['id']]=$data;
			$_SESSION['ds'][]=$data;
		}
		
?>






<!-- ----------------------------------------------------------------------------------------------------- -->
	 
<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
			<style >
				th.left{
			width: 5%;

			
		}
		th.right{
			width: 15%;
		}
			td.left1{
				width: 5%;

			}
			td.right1{
				width: 15%;
				height: 260px;
				
			}
			</style>
	</head>

	<body>
		<h1>Danh sách tài khoản</h1>
		<a href="01.php"> Quay về trang đăng kí</a>
		<table class="table table-hover table-bordered  ">
			<thead>
		<tr>
			<th class="left">Tên tài khoản</th>
			<th  class="right">Họ và tên</th>
			<th class="right">Ảnh đại diện</th>
			<th class="right">Giới tính</th>
			<th class="right">Địa chỉ</th>
			<th class="right">Sở thích</th>
		</tr>
	</thead>
	<tbody> 
		<?php 
			foreach ($_SESSION['ds'] as $key ) {
		?>
			<tr>
				<td class="left1"><?php echo $key['id'] ?> </td>
				<td class="right1"><?php echo $key['name'] ?> </td>
				<td class="right1"><img width="100%" height="240" src="	<?php echo($key['anh']) ?> "> </td>
				<td class="right1"> <?php echo $key['gt'] ?></td>
				<td class="right1"> <?php echo $key['address'] ?></td>
				<td class="right1"> <?php echo $key['st'] ?></td>
				
			</tr>
		<?php } ?> 
	</tbody>
	</table>
	</body>
</html>