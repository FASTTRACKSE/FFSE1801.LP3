<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
				  table{
		  	  	border:1px solid black;
        		border-collapse: collapse;
        		width:100%;
    }
    th,td{
       	 border:1px solid gray;
       	 padding: 10px;
       
    }
    tr:nth-child(odd){
        background-color: #ddd;
    }
    
      th.left{
          width: 20%;
         
      }
      th.right{
          width: 20%;
      }
	</style>
</head>
<body>
<table>
	<?php
		session_start();
		

		if(isset($_POST['buy'])){
			$data=array(

					'tenhoa'=>$_POST['name'],
					'soluong'=>$_POST['number'],
					'dongia'=>$_POST['money']
			);
			
			$_SESSION[$_POST['id']]=$data;
			$_SESSION['ds_gh'][$_POST['id']]=$data;
		}

	 ?>
	 <pre>
	 	<?php print_r($_SESSION['ds_gh']) ?>
	 </pre>
	<tr>
		<th class="left">Tên Sản Phẩm</th>
		
		<th class="right">Số Lượng</th>
		<th class="right">Giá </th>
		<th class="right">Tổng Tiền</th>

	</tr>
<?php foreach($_SESSION['ds_gh'] as $sinhvien){ 
	$tongtien=0;
	$thanhtien=$sinhvien['soluong']*$sinhvien['dongia'];

	$tongtien= $tongtien+$thanhtien;	?>
	<tr>
		<th class="left"><?=$sinhvien['tenhoa'] ?></th>
		<th class="right"><?=$sinhvien['soluong'] ?> </th>
		<th class="right"><?=$sinhvien['dongia'] ?></th>
		<th class="right"><?=$thanhtien ?></th>
	</tr>

<?php } ?>
<tr>
		<th></th>
		<th></th>
		<th class="right">Thành tiền</th>
		<th class="right"><?php echo "{$tongtien}VND" ?></th>
	</tr> 
</table>

<a href="01.php">Cumback</a>
</body>
</html>