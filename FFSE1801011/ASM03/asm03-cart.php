<?php session_start();

// Nếu click vào nút Lưu Session
	
	$cart_size=count($_SESSION['cart']);
	echo $cart_size;

	if (isset($_POST['update'])){
		echo "Da cap nhat <br>";
		// $i=0;
		$_SESSION['cart'] = array();
		foreach ($_POST as $key=>$value){
			if (preg_match('/id/', $key)){
				$i=substr($key,strlen($key)-1,1);
				array_push($_SESSION['cart'],[$_POST['id'.$i],$_POST['name'.$i],$_POST['quantity'.$i],$_POST['price'.$i]]);
				
			}
		}
			

		
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<style>
		.no-drop {cursor: no-drop;}
		input{
			display: inline;
		}
		.right{
			text-align: right;
		}
	 </style>

</head>

<body>
	<div class="container my-5">
		<h1>Giỏ hàng</h1>
		<form action="asm03-cart.php" method="POST">
			<table class="table mt-5">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Tên sản phẩm</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Đơn giá</th>
						<th scope="col">Tổng tiền</th>
						<th scope="col">Bỏ khỏi giỏ</th>
					</tr>
				</thead>
				<tbody>
					<input type="hidden" name="cart_size" value="<?=$cart_size?>">
					<?php for ($i=0;$i<$cart_size;$i++){ ?>
					<tr>
						<th scope="row">

							<input type="text" readonly class="form-control-plaintext qty" value="<?=$i+1?>">
						</th>

						<td>
							<input type="hidden" name="id<?=$i?>" value="<?=$_SESSION['cart'][$i]['0']?>">
							
							<input type="text" readonly class="form-control-plaintext" name="name<?=$i?>" value="<?=$_SESSION['cart'][$i]['1']?>">
						</td>

						<td><input class="form-control" id="quantity<?=$i?>" type="number" name="quantity<?=$i?>" min="1" step="1" value="<?=$_SESSION['cart'][$i]['2']?>"></td>
						<td class="right">&times; <input type="text" readonly class="form-control-plaintext price right" id="price<?=$i?>" name="price<?=$i?>"
							 value="<?=$_SESSION['cart'][$i]['3']?>"  data-mask="#,###" data-mask-reverse="true" data-mask-maxlength="false">

						</td>
						<td class="right">
							= <input type="text" readonly class="form-control-plaintext sum right" id="sum<?=$i?>" value="<?=($_SESSION['cart'][$i]['2']*$_SESSION['cart'][$i]['3'])?>" data-mask="#,###" data-mask-reverse="true" data-mask-maxlength="false">

						</td>
						<td><a href="#" id="del<?=$i?>" class="del"><i class="fas fa-times fa-2x text-danger"></i> Bỏ</a></td>
					</tr>
					<?php 

						if (empty($total)){
								$total=$_SESSION['cart'][$i]['2']*$_SESSION['cart'][$i]['3'];
						} else {
								$total+=$_SESSION['cart'][$i]['2']*$_SESSION['cart'][$i]['3'];
						}
					} ?>
					<tr>
						<td colspan="4">Thành tiền</td>
						<td id='total' class="right">
						<input type="text" readonly class="form-control-plaintext total right" value="<?php
							if (empty($total)){echo "";}
							else {echo $total;}
							?>" data-mask="#,###" data-mask-reverse="true" data-mask-maxlength="false">
							

						</td>
					</tr>
				</tbody>
			</table>
			<div class="alert alert-warning" id="warning" role="alert" hidden>
				Bạn chưa cập nhật giỏ hàng.
			</div>
			<div class="alert alert-success" id="success" role="alert">
				Bạn đã cập nhật giỏ hàng thành công!
			</div>
			<a class="btn btn-primary" id="back" href="asm03.php" onclick="validate2()">Trở về</a>
			<input id="update" class="btn btn-success" type="submit" name="update" value="Cập nhật" onclick="validate()"
			 disabled>

		</form>

	</div>
	<script>


		function validate() {

			if ($(".qty").val() == undefined) {
				$('form').submit(function (e) {
					let leave = confirm("Giỏ hàng đang trống, bạn có muốn lưu không?");
					if (leave) {
						this.submit();
					} else {
						e.preventDefault();
					}
				})

			}
		}

		function validate2() {

			if (!document.getElementById('update').disabled) {

				let leave = confirm("Bạn có muốn thoát mà không lưu giỏ hàng?");

				$(document).on("click", '#back', function (event) {

					if (!leave) {
						event.preventDefault();
					} else {
						location.href = $(this).attr('href');
					}
				});

			}
		}

		var size = <?=$cart_size?>;

		
		function formatNumber(obj,char){
			$(obj).each(function(){
				let str=""
				let old_str=this.value
				let num_len=old_str.length;
				for (let i=3;i<num_len+3;i+=3){
					if (i<num_len){
						str+=old_str.substr(-i,3);
					}
					else {str=old_str.substr(0,3-i+num_len) +","+ str;}
					
					// console.log(str);
					// console.log(i);
				}
				if (char==undefined){char=""}
				this.parentElement.innerHTML=char+str;
			});
		}
		// formatNumber('.price','&times; ');
		// formatNumber('.sum','= ');
		// formatNumber('.total');
		
		for (var i = 0; i < size; i++) {
			$('#quantity' + i).on('change', function () {
				let total = 0;

				let temp = this.id.substr(this.id.length - 1, 1);
				let price = $('#price' + temp).val()

				let sum = this.value * price;
				$('#sum' + temp).val(sum);

				for (let j = 0; j < size; j++) {
					// console.log(j)
					total += parseInt($('#sum' + j).val());
					// console.log($('#sum' + j));
				}
				
				$('#total').html(total);
				document.getElementById('update').disabled = false;
				document.getElementById('warning').hidden = false;
				document.getElementById('success').hidden = true;
			});
		}
		
		$(".del").on('click', function () {
			var decide = confirm("Bạn có muốn xóa dòng này không?");
			if (decide) {
				this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);

				let total = 0;
				for (let j = 0; j < size; j++) {
					console.log(size)
					if ($('#sum' + j).val()==undefined){
						continue;
					} else {
						total += parseInt($('#sum' + j).val());
						console.log(total);
					}

				}
				
				$('#total').html(total);
				document.getElementById('update').disabled = false;
				document.getElementById('warning').hidden = false;
				document.getElementById('success').hidden = true;


			}
		})
	</script>

	<?php

			// unset($_SESSION['cart']);

            ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
</body>

</html>