<?php
    include "data.php";
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style = "float:left;">Add your member</h4>
                  <i class="material-icons delete" id='deleteadd' style = "float:right; font-size:30px;"> cancel </i>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID</label>
                          <input type="text" class="form-control" id='id'>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" class="form-control" id='name'>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" id='email'>
                        </div>
                      </div>
                      <div class="col-md-4" style="margin-top:23px;">
                        <label class="radio-inline" style='margin-right:30px;'><input type="radio" name="optradio" checked>Nam</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Nữ</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5" style='margin-top:20px;'>
                      <p style='color:gray; float:left'>Birthday:</p>
                        <select class="birthday" name="hang" style="margin-left:10px;" id='birth_day'>
                          <option selected hidden>Day</option>

                        </select> /
                        <select class="birthday" name="hang" style="margin-left:10px;" id='birth_month'>
                          <option selected hidden>Month</option>

                        </select> /
                        <select class="birthday" name="hang" style="margin-left:10px;" id='birth_year'>
                          <option selected hidden>Year</option>

                        </select>
                      </div>
                      <div class='col-md-7'>
                        <div class="form-group">
                          <label class="bmd-label-floating">National</label>
                          <input type="text" class="form-control" id='national'>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Provice</label>
                          <input type="text" class="form-control" id='provice'>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">District</label>
                          <input type="text" class="form-control" id='district'>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <!-- <button class="btn btn-primary pull-right" id="btn-add">ADD</button> -->
                        <input type="submit" class="btn btn-primary pull-right" id="btn-add" value="ADD">
                      </div>
                    </div>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<?php
  if(isset($_POST['id'])){
    echo $_POST['id'];
  }
  if(isset($_POST['name'])){
    echo $_POST['name'];
  }
  if(isset($_POST['email'])){
    echo $_POST['email'];
  }
  if(isset($_POST['national'])){
    echo $_POST['national'];
  }
  if(isset($_POST['provice'])){
    echo $_POST['provice'];
  }
?>