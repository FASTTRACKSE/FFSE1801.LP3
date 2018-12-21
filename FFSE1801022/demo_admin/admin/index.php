<?php 
    include 'top.php';
?>
<style>
  .page{
    float: left; 
    width:40px;
    height:40px; 
    text-align: center;  
    line-height: 40px;
    cursor: pointer;
    background: rgb(160, 137, 175);
    margin-right:5px;
    border-radius: 5px;
  }
  .page:hover{
    background: rgb(130, 137, 175);
  }
  #add{
    cursor: pointer;
  }
  #add:hover{
    color: rgb(170, 170, 235);
  }
  #themsv{
    Transition: 1s;
    overflow: hidden;
    height:1px;
  }
  .birthday{
    text-align: center !important;
    color: gray !important;
    width: 50px !important;
    border-radius: 5px;
  } 
  .delete{
    cursor: pointer;
  }
  .delete:hover{
    color: rgb(170, 170, 235);
  }
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="nav-item active user" style='cursor: pointer;'>
            <a class="nav-link">
            <i class="material-icons"> verified_user </i>
              <p>User</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div style='width:300px;float:left;'>
                    <form class="navbar-form">
                      <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search for names..." id='searchsv'>
                        <p id='showsearch'></p>
                        <!-- <button type="submit" class="btn btn-white btn-round btn-just-icon" id='btn-search'> -->
                          <!-- <i class="material-icons">search</i> -->
                          <div class="ripple-container"></div>
                        </button>
                      </div>
                    </form>
                  </div>
                  <div style='float:right; margin-top:12px;' id='add'>
                    <i class="material-icons" style='float:left'> person_add </i>
                    <b style='float:left; margin-left:5px;margin-top:3px; font-size:16px'> Thêm thành viên</b>
                  </div>
                </div>
                <div class="card-body">
                  <div id="themsv"></div>
                  <div class="table-responsive"  id="loadsv">
                    



      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $(document).on("click",".page",function(){
        var p = $(this);
        loaduser(p.find("b").text());
      })
      $(".user").click(function(){
        loaduser(1);
      });
      $(".user").click();
      $("#add").click(function(){
        themsv();
      });
      $(document).on("click","#deleteadd",function(){
        $('#themsv').empty().css('height','1px');
      });
      $(document).on("click","#btn-add",function(){
        return addsv();
      });
      $(document).on("keyup","#searchsv",function(){
        return searchsv();
      });
    });
    function themsv(){
      $('#themsv').load("../data/themsv.php",function(){
        $('#themsv').css('height','400px');
      });
    }
    function loaduser(page){
      $('#loadsv').load("../data/sinhvien.php",{
        page: page
      });
    }
    function addsv(){
        var id = $('#id').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var birth_day = $('#birth_day').val();
        var birth_month = $('#birth_month').val();
        var birth_year = $('#birth_year').val();
        var national = $('#national').val();
        var provice = $('provice').val();
        var district = $('district').val();
          $.ajax({
            type:'post',
            url:'../data/themsv.php',
            data:{
              id:id,
              name:name,
              email:email,
              birth_day:birth_day,
              birth_month:birth_month,
              birth_year:birth_year,
              national:national,
              provice:provice,
              district:district
            },
            cache:false,
            success:function(html){
              $('#themsv').html(html);
              loaduser(1);
            }
          })
          return false;
        }
        function searchsv(){
          var searchsv = $('#searchsv').val();
          $.ajax({
            type:'post',
            url:'../data/sinhvien.php',
            data:{
              searchsv:searchsv
            },
            cache:false,
            success:function(html){
              $('#loadsv').html(html);
            }
          })
          return false;
        }
  </script>
<?php
    include 'bottom.php';
?>