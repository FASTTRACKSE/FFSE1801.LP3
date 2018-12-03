<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


</head>
<body>
<table  class="table table-hover table-bordered  ">
  <tr> 
  	<th >Đăng kí tài khoản</th>

	</tr>
  <tr>
  	<td class="col-md-4"> Tên đăng nhập </td>
  	<td class="col-md-8">
  		<form method="POST" action="02.php"  enctype="multipart/form-data" >
  	 <input type="text" class="form-control" placeholder="Adeptrai" name="id" >
  	  </td>
  </tr>
   <tr>
  	<td class="col-md-4"> Mật khẩu </td>
  	<td class="col-md-8">
  		
  	 <input type="password" class="form-control" placeholder="*****" name="pass"> 
  	</td>
  </tr>
    <tr>
  	<td class="col-md-4"> Họ và tên </td>
  	<td class="col-md-8">
  			<input type="text" class="form-control" placeholder="Nguyễn Văn A" name="ten"></td>
  </tr>
    <tr>
  	<td class="col-md-4"> Ảnh đại diện </td>
  	<td class="col-md-8">
  		  
  		<input type="file" class="form-control-file" name="anh">   </td>
  </tr>
  <tr>
  	<td class="col-md-4"> Địa chỉ </td>
  	<td class="col-md-8">
  		 
  		<select class="form-control" name="addr">
  			<option>Hà Nội</option>
            <option>Đà nẵng</option>
            <option>Hồ Chí Minh</option>
            <option>Quảng Nam</option>
            <option>Quảng Ngãi</option>
  		</select>
   	
  	  </td>
  </tr>
  <tr>
  	<td class="col-md-4"> Giới tính </td>
  	<td class="col-md-8">
  		
				<select class="form-control " name="sex" >
				     <option>Nam</option>
				     <option>Nữ</option>
				</select>
				
  	 </td>
  </tr>
  <tr>
  	<td class="col-md-4"> Sở thích </td>
  	<td class="col-md-8">
  		
			<select class="form-control " name="favo">
							     <option>Đọc báo</option>
							     <option>Nghe nhạc</option>
							     <option>Xem phim</option>
							</select>
							
  	 </td>
  </tr>
  <tr>
  	<td class="col-md-4"></td>
  	<td class="col-md-8">

  	 <input type="submit" name="send"> </form>
  	</td> 
  </tr>
</table>
<!-- <?php
		session_start();
	

		if(isset($_POST['send'])){
			$data=array(

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
<pre>
	<?php 
	print_r($_SESSION['ds']);?>
</pre>
 





<! ----------------------------------------------------------------------------------------------------- -->


<!-- ?php
	

	
	if(isset($_POST['send'])){
		if ($_FILES['anh']['error']==4){
			echo("Vui long chon file <hr");

		} else {

		$name= $_FILES['anh']['name'];
		$cuccu = explode('.', $name);
		$ten=time().".".end($cuccu);
		

		$link = $_FILES['anh']['tmp_name'];
		$link1= $_SERVER['DOCUMENT_ROOT']."/phpday5/Asm04/image/".$ten;;
	$_SESSION['ten'][]="/phpday5/Asm04/image/".$ten;;
	
		move_uploaded_file($link,$link1);
	}}

	 ?>
	 
<?php  if (isset($_SESSION['ten'])==false) {
	echo "Vui lòng tải ảnh lên để được đăng kí chính thức";

} else {
foreach($_SESSION['ten'] as $bla){ 
	
echo "<hr>";
	?>

	<img  width="30%" height="330" src=" <?php echo($bla) ?>">
<?php }} ?> -->
</body>
</html>