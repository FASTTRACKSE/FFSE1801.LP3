<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	



	require_once "lib.php";
	$a = NULL;
	$rs = var_dump(isset($b['abc']));
	echo $rs;
	die();
	session_start();
	if(isset($_POST['muahoa'])){ 
		
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";


		if($_FILES['avatar']['name']=="" ){
			$_SESSION['msg']="Vui long chon file";
		}else{
			//Xu ly upload
			$name = upload($_FILES['avatar']);
			$data= array(
				"name"=>$_POST['name'],
				"qty"=>$_POST['qty'],
				"price"=>$_POST['price'],
				'avatar'=>$name
			);
			
			$id=$_POST['id'];
			if(isset($_SESSION['giohoa'][$id])){
				$_SESSION['giohoa'][$id]['qty']+=$_POST['qty'];
			}else{
				$_SESSION['giohoa'][$id]=$data;
			}
			header("location: basket.php");
		}	
	}
?>
<body>
	<?php if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		} ?>
	<form method="POST" enctype="multipart/form-data">
		Id <input type="text" name="id"> <br>
		Ten hoa <input type="text" name="name"> <br>
		So luong <input type="text" name="qty"> <br>
		Don gia <input type="text" name="price"> <br>
		Hinh anh <input type="file" name="avatar"> <br>
		<input type="submit" name="muahoa" value="Mua hoa">
	</form>
</body>
</html>  	