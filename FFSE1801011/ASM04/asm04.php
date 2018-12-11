<?php session_start();
    $a="hello";
    
    if (isset($_POST['signup']))
	{	
        $id=trim($_POST['account']);
        $error = array();
        
        $avaname="ffse".time()."-".$_FILES['avatar']['name'];
        $tmp_name=$_FILES['avatar']['tmp_name'];
        if(!is_dir('./avatar_folder')){
            mkdir('./avatar_folder');
        }
        $part_upload="./avatar_folder/".$avaname;

        $image_file_type = strtolower(pathinfo($part_upload,PATHINFO_EXTENSION));
        $_SESSION['image-type']=$image_file_type;
        $file_types=array('jpg','jpeg','png','gif');
        $check_type_file =  array_search($image_file_type,$file_types );
            if ($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
            && $image_file_type != "gif" ) {
                $error['img_ext']="Avatar bị sai định dạng. Vui lòng sử dụng loại file 'jpg','jpeg','png' hoặc'gif'.";
            }
            if (!move_uploaded_file($tmp_name,$part_upload)) {
                $error['img_up']='Upload file bị lỗi, vui lòng thử lại.';
            }
        
        $data= array(
            "password"=>$_POST['password'],
            "name"=>$_POST['name'],
            "avatar"=>$part_upload,
            "location"=>$_POST['location'],
            "gender"=>$_POST['gender'],
        );
        if (isset($_POST['hobbies'])){
            $data['hobbies']=$_POST['hobbies'];
        } else {$data['hobbies']="";}
        
        if(isset($_SESSION['users'][$id])){
            $error['acc']='Tài khoản của bạn đã bị trùng';  
        }

        if($_POST['password']==''){
            $error['pw']='Password bị lỗi.';
        }
        if ($error==[]){
            $_SESSION['users'][$id]=$data;
            header ('location: app/asm04-list.php');
        }

    } else{
        $error = array();
    }

    if (isset($_POST['delete'])){
        unset($_SESSION['users'][$_POST['delete']]);
        header ('location: app/asm04-list.php');
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        .no-drop {cursor: no-drop;}
	 </style>

</head>

<body>
    <?php
    $city=array(
        'Đà Nẵng',
        'Hải Phòng',
        'Hà Nội',
        'Cần Thơ',
        'TP HCM',
        'Sơn La',
        'Tây Ninh',
        'Thái Bình',
        'Thái Nguyên',
        'Thanh Hóa',
        'Quảng Ngãi',
        'Quảng Ninh',
        'Quảng Trị',
        'Thừa Thiên Huế',
        'Sóc Trăng'
        );
    $city_len=count($city);
    
    ?>
    <div class="container mt-5">
        <div class="row">

            <div class="card border-primary mb-3 px-0 col-12 col-md-6">
                <div class="card-header bg-primary text-white font-weight-bold ">Đăng ký tài khoản</div>
                <div class="card-body text-primary">
                    <form action="asm04.php" method="POST" enctype='multipart/form-data'>

                        <div class="form-group">
                            <label for="account">Tên đăng nhập (*)</label>
                            <input type="text" class="form-control <?php if (isset($error['acc'])){
                                    echo "is-invalid"; } 
                                ?>"
                                id="account" name="account" 
                                value="<?php if (isset($error['acc'])){
                                echo trim($_POST['account']);
                                }?>"
                            required>
                            <div class="valid-feedback">
                                &#x2714;
                            </div>
                            <div class="invalid-feedback">
                                <?=$error['acc']?>
                            </div>
                            fanalux
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu (*)</label>
                            <input type="password" class="form-control is-valid" id="password" name="password" required>
                            <div class="valid-feedback">
                                &#x2714;
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Họ và tên (*)</label>
                            <input type="text" class="form-control is-valid" id="name" name="name" value="<?php if (isset($_POST['name'])){
                                echo trim($_POST['name']);
                            }?>"
                                placeholder="Họ tên đầy đủ" required>
                            <div class="valid-feedback">
                                &#x2714;
                            </div>
                        </div>
                        <div class="form-group custom-file">
                            <input type="file" class="custom-file-input <?php
                                if (isset($error['img_ext'])){ echo "is-invalid";} else if (isset($error['img_up'])){ echo "is-invalid" ; $up_err=true;
                                ; } ?>" id="avatar" name="avatar" placeholder="Ảnh đại diện" required>
                            <label class="custom-file-label" id="avatar_name" for="avatar">Ảnh đại diện</label>
                            <div class="invalid-feedback">
                                <?php if (isset($up_err)){echo $error['img_ext'];} else {echo $error['img_up'];}?>
                            </div><br>
                        </div>
                        <div class="form-group mt-2">
                            <label for="location">Địa chỉ</label>
                            <select class="form-control" id="location" name="location">
                                <?php 
                               if (isset($_POST['location'])){
                                    $temp_location= $_POST['location'];
                                } else {$temp_location="";}
                                for ($i=0;$i<$city_len;$i++){
                                    $location=$city[$i];
                                        ?>
                                <option <?php if($temp_location==$city[$i]) {echo "selected" ;}?> >
                                    <?=$location?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group"> Giới tính
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="male" name="gender" value="male"
                                    required checked>
                                <label class="custom-control-label" for="male">Nam</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="female" name="gender" value="female"
                                    required>
                                <label class="custom-control-label" for="female">Nữ</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                        </div>
                        <div class="form-group">Sở thích
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="movie" value="movie" name="hobbies[]">
                                <label class="custom-control-label" for="movie">Xem phim</label>

                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="music" value="music" name="hobbies[]">
                                <label class="custom-control-label" for="music">Nghe nhạc</label>

                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="book" value="book" name="hobbies[]">
                                <label class="custom-control-label" for="book">Đọc sách</label>

                            </div>
                        </div>
                        <input class="btn btn-primary" onclick="" type="submit" name="cancel" value="Hủy bỏ">
                        <input class="btn btn-success" onclick="validate('#name')" type="submit" name="signup" value="Đăng ký">



                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>

                </div>

            </div>
        </div>
        <script>
            var input = document.getElementById('avatar');
            var infoArea = document.getElementById('avatar_name');

            input.addEventListener('change', showFileName);

            function showFileName(event) {

                // the change event gives us the input it occurred in 
                var input = event.srcElement;

                // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                var fileName = input.files[0].name;

                // use fileName however fits your app best, i.e. add it into a div
                infoArea.textContent = 'Đã chọn: ' + fileName;
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</body>

</html>