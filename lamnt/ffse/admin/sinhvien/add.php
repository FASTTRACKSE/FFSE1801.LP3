<?php 
		require "../../templates/backend/header.php";
?>
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
<?php 
	if(isset($_POST['create'])){
        require "../../Libraries/My_model.php";
        $model= new My_model();
        $model->table="lms_students";
        
		$code= $_POST['code'];
		$name=$_POST['first_name'];
		$email = $_POST['email'];
		$street=$_POST['street'];
		
        $data= array(
            'code'=>$code,
            'first_name'=>$name,
            'email'=>$email,
            'street'=>$street,

        );
       
        $rs = $model->add($data);
        
		if($rs==true){
			$_SESSION['msg']="Them thanh cong";

			header("Location: http://localhost/FFSE1801.LP3/lamnt/ffse/admin/sinhvien/index.php");
			
		}else{
			$_SESSION['msg']="Them that bai, vui long lien he 0905870000";

			header("Location: http://localhost/FFSE1801.LP3/lamnt/ffse/admin/sinhvien/index.php");


		}

	}
?>
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