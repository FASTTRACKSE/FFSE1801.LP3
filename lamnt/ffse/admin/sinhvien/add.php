<?php 
	require "../../templates/backend/header.php";
	$sql = "SELECT * FROM lms_countries";
	$result = $mysqli->query($sql);
	$result1=$mysqli->query($sql);

	if(isset($_POST['create'])){
		$code= $_POST['code'];
		$name=$_POST['first_name'];
		$email = $_POST['email'];
		$street=$_POST['street'];
		$nationality=$_POST['nationality'];
		$country=$_POST['country'];
		$sql = "INSERT INTO lms_students(code,first_name,email,street,nationality,country)
						VALUES('$code','$name','$email','$street',$nationality,$country)
						";
		$rs=$mysqli->query($sql);
		if($rs==true){
			$_SESSION['msg']="Them thanh cong";
			header("location: index.php");
		}else{
			$_SESSION['msg']="Them that bai, vui long lien he 0905870000";
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
                                        <input name="code" class="form-control">
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Ten sinh vien</label>
                                        <input name="first_name" class="form-control">
                                       
                                    </div>
                                    <div class="form-group  col-lg-6">
                                        <label>Email</label>
                                        <input name="email" class="form-control">
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Dia chi</label>
                                        <input name="street" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                    	<label>Quoc tich</label>
                                    	<select class="form-control" name="nationality">
                                    		<?php 
                                    				while($item=$result->fetch_assoc()){
                                  			?>
                                    					<option value="<?=$item['id']?>"><?=$item['name']?></option>
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
                                  			?>
                                    					<option value="<?=$item['id']?>"><?=$item['name']?></option>
                                    		<?php
                                    			 }
                                    		?>
                                    	</select>
                                    </div>
                                    <button name="create" type="submit" class="btn btn-success">Tao moi</button>
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