<?php session_start();
	// unset($_SESSION['indicator']);
	// var_dump($_SESSION['indicator'])

	if (isset($_POST['addToCart']))
	{	

		$x=0;

		if(!isset($_SESSION['cart'])){
			// Lưu Session
			$_SESSION['cart'] = array();
			$cart_size=0;
		}
		else {
			$cart_size=count($_SESSION['cart']);	
			for ($i=0;$i<$cart_size;$i++){
				if($_SESSION['cart'][$i]['0']==$_POST['id']){
					$_SESSION['cart'][$i]['2']+=$_POST['quantity'];
					$x=1;
					break;
				}
				// echo $i."=>".$_SESSION['cart'][$i]['1']."<br>"; 
			}
		}
		
		
		echo "x=".$x."<br>";
		// Lưu Session
		if ($x==0){
			array_push($_SESSION['cart'],[$_POST['id'],$_POST['name'],$_POST['quantity'],$_POST['price']]);
			$cart_size++;
		};
		
		echo $cart_size;
		$_SESSION['cart_size']=$cart_size;
		$_SESSION['indicator']="passed";
	
	header ("location: asm03-cart.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	 <style>
	 .no-drop {cursor: no-drop;}
	 </style>

</head>

<body>
	<?php
		echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
		
		$hoa= [
			["id"=> "Chọn hoa...",
			"name"=> "",
			"price" => ""],
			["id"=> "Hoa 1",
			"name"=> "Hoa hồng",
			"price" => "5000"],
			["id"=> "Hoa 2",
			"name"=> "Hoa cúc",
			"price" => "3000"],
			["id"=> "Hoa 3",
			"name"=> "Hoa cẩm chướng",
			"price" => "2500"],
			["id"=> "Hoa 4",
			"name"=> "Hoa ly",
			"price" => "10000"],
			["id"=> "Hoa 5",
			"name"=> "Hoa lan",
			"price" => "14000"],
		];
		$hoa_qt=count($hoa);
    ?>
	<div class="container mt-5">
		<div class="row">
			<div class="card border-primary mb-3 px-0 col-12 col-md-4">
				<div class="card-header bg-primary text-white font-weight-bold ">Cửa hàng Sunflower</div>
				<div class="card-body text-primary">
					<form action="asm03.php" method="POST">
						<div class="form-group">
							<label for="id">Id hoa</label>
							<select class="form-control" id="id" name="id" onchange="flowerChanged(this)">
							<?php for ($i=0;$i<$hoa_qt;$i++){
								$id=$hoa[$i]["id"];
									?>
								<option><?=$id?></option>
							<?php } ?>	
							</select>
						</div>	
						<div class="form-group">
							<label for="name">Tên hoa</label>
							<input class="form-control no-drop" id="name" name="name" type="text" value="" readonly>
						</div>
						<div class="form-group">
							<label for="quantity">Số lượng</label>
							<input class="form-control" id="quantity" type="number" name="quantity" min="1" step="1" value="1">
						</div>
						<div class="form-group">
							<label for="price">Đơn giá</label>
							<input class="form-control no-drop" id="price" name="price" type="text" value="" readonly>
						</div>
						<input class="form-control btn btn-primary" onclick="validate('#name')" type="submit" name="addToCart" value="Mua hàng">	
					</form>


					<script language="javascript">
            function flowerChanged(obj)
            {	
				var id = obj.value;
				if (id === '<?=$hoa["0"]["id"]?>'){
					document.getElementById('name').value = "<?=$hoa["0"]["name"]?>";
					document.getElementById('price').value = "<?=$hoa["0"]["price"]?>";
				}
				<?php for ($i=1;$i<$hoa_qt;$i++){?>
				else if (id === '<?=$hoa[$i]["id"]?>'){
					document.getElementById('name').value= "<?=$hoa[$i]["name"]?>";
					document.getElementById('price').value= "<?=$hoa[$i]["price"]?>";
				}

            
			<?php } 
				
			?>
			}
			
			function validate (name){
				$("form").submit(function(e) {
					if ($(name).val()==""){
						alert ("Bạn chưa chọn loại hoa.");
						e.preventDefault();
				}
				else {
					this.submit();
					}
						
				});
				 
				
			}
			
        </script>
				</div>

			</div>
		</div>
		







		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		 crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		 crossorigin="anonymous"></script>
</body>

</html>