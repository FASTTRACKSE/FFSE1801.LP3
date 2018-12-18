<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
	<style>
        body{
            margin: 5% 23%;
        }
        .remove:hover{
            color:red;
            cursor:pointer;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: lightgray;
            font-size:23px;
        }
        table, td{    
            border: 1px solid #ddd;
            text-align: left;
        }
        table, td, th{
            padding:10px;
        }
        input.nhap{
            width:100%;
            margin-bottom: 10px;
        }
    </style>
<body>
	<?php 
		session_start();
		$dulieu = $_SESSION['gio_hoa'][$_GET['id']];
		if(isset($_POST['edit'])){
			$dat = array(
				'ten' => $_POST['ten'],
				'sl' => $_POST['sl'],
				'don_gia' => $_POST['don_gia']
				);
			$_SESSION['gio_hoa'][$_GET['id']] = $dat;
			header("location: session.php");
		}
	?>
	<form method="POST">
		<table>
			<tr>
				<th>Sửa</th>
				<th></th>
			<tr>
			<tr>
				<td>Tên hoa</td>
				<td><input type="text" value="<?=$dulieu['ten']?>" name="ten"></td>
			<tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" value="<?=$dulieu['sl']?>" name="sl"></td>
			<tr>
			<tr>
				<td>Đơn giá</td>
				<td><input type="text" value="<?=$dulieu['don_gia']?>" name="don_gia"></td>
			<tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Cập nhật"></td>
			<tr>
		</table>
	</form>
</body>
</html>

