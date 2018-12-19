<?php 
	require "../../templates/backend/header.php";
	$sql = "SELECT * FROM lms_countries";
	$result = $mysqli->query($sql);
	$result1=$mysqli->query($sql);
	$code= $_GET['code'];
	$sql2= "SELECT * FROM lms_students WHERE code='$code'";
	$ar_sv= $mysqli->query($sql2)->fetch_assoc();

	if(isset($_POST['create'])){
		
		$name=$_POST['first_name'];
		$email = $_POST['email'];
		$street=$_POST['street'];
		$nationality=$_POST['nationality'];
		$country=$_POST['country'];
		$sql = "UPDATE lms_students SET first_name='$name',email='$email',street='$street',nationality=$nationality,country=$country WHERE code='$code'";
		
		$rs=$mysqli->query($sql);

		if($rs==true){
			$_SESSION['msg']="Sua thanh cong";
			header("location: index.php");
		}else{
			$_SESSION['msg']="Sua that bai, vui long lien he 0905870000";
			header("location: index.php");
		}

	}
?>
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">

			Them moi sinh vien</h1>
			</div>
		</div>
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="POST" class="col-lg-12">
                                    <div class=" form-group col-lg-6">
                                        <label>Ma sinh vien</label>
                                        <input disabled name="code" value="<?=$ar_sv['code']?>" class="form-control">
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Ten sinh vien</label>
                                        <input value="<?=$ar_sv['first_name']?>" name="first_name" class="form-control">
                                       
                                    </div>
                                    <div class="form-group  col-lg-6">
                                        <label>Email</label>
                                        <input value="<?=$ar_sv['email']?>" name="email" class="form-control">
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Dia chi</label>
                                        <input value="<?=$ar_sv['street']?>" name="street" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                    	<label>Quoc tich</label>
                                    	<select class="form-control" name="nationality">
                                    		<?php 
                                    				while($item=$result->fetch_assoc()){
                                    					if($item['id']==$ar_sv['nationality']){
                                    						$str="selected";
                                    					}else{$str="";}
                                  			?>
                                    					<option <?=$str?> value="<?=$item['id']?>"><?=$item['name']?></option>
                                    		<?php
                                    			 }
                                    		?>
                                    	</select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                    	<label>Quoc gia</label>
                                    	<select class="form-control" name="country">
                                    		<?php 
                                    				while($item=$result1->fetch_assoc()){
                                    					if($item['id']==$ar_sv['country']){
                                    						$str="selected";
                                    					}else{$str="";}
                                  			?>
                                    					<option <?=$str?>  value="<?=$item['id']?>"><?=$item['name']?></option>
                                    		<?php
                                    			 }
                                    		?>
                                    	</select>
                                    </div>
                                    <button name="create" type="submit" class="btn btn-success">Cap nhat</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
	</div>
<?php 
	require "../../templates/backend/footer.php";
?>