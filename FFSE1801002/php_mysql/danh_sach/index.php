<!doctype html>
<html lang="vi">
<head>
    <?php 
    $mysqli = new mysqli("localhost","root","","ffse1701");
    $mysqli->set_charset("utf8");
    // session_start();
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DS_Sinh_Vien</title>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="">
                            <i class="pe-7s-users"></i>
                            <p>Danh sách sinh viên</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="them_sv.php">
                            <i class="pe-7s-add-user"></i>
                            <p>Thêm sinh viên</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Danh sách sinh viên</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php 
            $sql = "SELECT * FROM lms_students";
            $search=""; 
            if(isset($_GET['timkiem'])){
                $search = $_GET['search'];
                $sql = "SELECT * FROM lms_students
                WHERE first_name LIKE '%{$search}'";
            }
            $result = $mysqli -> query($sql);
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2 class="title">Danh sách sinh viên</h2>
                                </div>
                                <div class="header">
                                    <p class="category">Tìm kiếm</p>
                                    <form>
                                        <input type="text" value="<?=$search?>" name="search">
                                        <input type="submit" name="timkiem" value="tìm kiếm">
                                    </form>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã sinh viên</th>
                                                <th>Họ tên</th>
                                                <th>Email</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; while( $item = $result->fetch_assoc() ) { $i++;?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $item['code'] ?></td>
                                                    <td><?= $item['first_name'] ?></td>
                                                    <td><?= $item['email'] ?></td>
                                                    <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>
