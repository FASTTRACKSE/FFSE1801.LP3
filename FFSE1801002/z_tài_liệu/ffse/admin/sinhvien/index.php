<?php 
require "../../templates/backend/header.php";
?>
<?php 
$mysqli = new mysqli("localhost","root","","ffse1701");
$mysqli->set_charset("utf8");
$sql = "SELECT * FROM lms_students";
$search="";
if(isset($_GET['timkiem'])){
  $search = $_GET['search'];
  $sql = "SELECT * FROM lms_students
  WHERE first_name LIKE '%{$search}'";

}
$result=$mysqli->query($sql);
?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sach sinh vien</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
        	<div class="panel panel-default">
                <div class="panel-heading">
                    Tim kiem 
                    <form>
                     <input type="text" value="<?=$search?>" name="search">
                     <input type="submit" name="timkiem" value="tim kiem">
                 </form>
             </div>
             <!-- /.panel-heading -->
             <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ma sinh vien</th>
                                <th>Ho ten</th>
                                <th>Email</th>
                                <th>Chuc nang</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php $i=0; while( $item = $result->fetch_assoc() ) { $i++;?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $item['code'] ?></td>
                                <td><?= $item['first_name'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><a href="#">Sua</a> <a href="#">Xoa</a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
</div>

</div>
<?php 
require "../../templates/backend/footer.php";
?>