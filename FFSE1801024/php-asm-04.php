<?php
    session_start();
    echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
    $request = $_REQUEST;
    $session =  getSession();

    function setSession($data,$index){
        $_SESSION[$index] = $data;
    }

    function getSession(){
        return $_SESSION;
    }

    function saveFile($target_dir,$requestName,$arrTypeFile){
        $target_file = $target_dir . basename($_FILES[$requestName]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if ($_FILES[$requestName]["size"] > 500000) {
            return [false,"Xin lỗi, kích thước tệp tin quá lớn."];
        }
        $checkTypeFile =  array_search($imageFileType, $arrTypeFile);
        if ($checkTypeFile===false) {
            return [false,"Xin lỗi, tệp tin không phù hợp."];
        }
        if (move_uploaded_file($_FILES[$requestName]["tmp_name"], $target_file)) {
            return [true,"Tệp tải lên thành công!",$target_file];
        } else {
            return [false,"Xin lỗi, Xảy ra lỗi khi tải lên tệp."];
        }
    }

    function handleAddAccount($request,$session){
        if (!isset($session['account'])) {
            $session['account']= [];
        }
        $account = $request['account'];
        $password = $request['password'];
        $fname = $request['fname'];
        $saveF = saveFile('./','avatar',['jpg','jpeg','png']);
        if($saveF[1]===false){
            return $saveF[1];
        }
        $linkAvatar = $saveF[2];
        $address = $request['address'];
        $sex = $request['sex'];
        $like = $request['like'];
        $accountSession =  $session['account'];
        $accountSession[] = [
            'account'=>$account,
            'password'=>$password,
            'fname'=>$fname,
            'avatar'=>$linkAvatar,
            'address'=>$address,
            'sex'=>$sex,
            'like'=>$like,
        ];
        setSession($accountSession,'account');
        return 'Tạo tài khoản thành công';
    }

    function destroy($id, $session){
        $account = $session['account'];
        unset($account[$id]);
        setSession($account,'account');
    }

    if (sizeof($request)>0) {
        if (isset($request['add'])) {
           $mess= handleAddAccount($request,$session);
        } else if(isset($request['destroy'])){
            destroy($request['destroy'], $session);
        }
    } 
    $session =  getSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="container">
            <?php
                if(isset($mess)){
                    echo '<div class="alert alert-success" role="alert">
                        '.$mess.'
                    </div>';
                }
            ?>
            <div class="row mt-3">
                <div class="col-3"> 
                    <div class="alert alert-primary" role="alert" >
                        Đăng ký tài khoản
                    </div>
                    <form action="php-asm-04.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="account">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="account" name="account" placeholder="vd: viet1998tk" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                        </div>
                        <div class="form-group">
                            <label for="fname">Họ và tên</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Nguyễn Đức Việt" required>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Ảnh đại diện</label>
                            <input type="file" class="form-control-file" id="avatar" name="avatar" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <select class="form-control form-control-sm" name="address">
                                <option>Hà Nội</option>
                                <option>Đà nẵng</option>
                                <option>Hồ Chí Minh</option>
                                <option>Quảng Nam</option>
                                <option>Quảng Ngãi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sex">Giới tính:</label>
                            <select class="form-control form-control-sm" name="sex">
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="like">Sở thích</label>
                            <input type="text" class="form-control" id="like" name="like" placeholder="Nghe nhạc, Xem phim ...." required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add" style="width:49.12%">Xác nhận</button>
                        <button type="button" class="btn btn-outline-dark" onclick="location.reload()" style="width:49.12%">Hủy bỏ</button>
                    </form>
                </div>
                <div class="col-9">
                    <div class="alert alert-warning" role="alert">
                        Danh sách tài khoản
                    </div>
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên tài khoản</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Ảnh đại diện</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach (isset($session['account'])?$session['account']:[] as $key => $value) {
                                    echo '<tr><form action="php-asm-04.php" method="post">';
                                    echo '<th scope="row">'.$key.'</th>';
                                    echo '<td>'.$value['account'].'</td>';
                                    echo '<td>'.$value['fname'].'</td>';
                                    echo '<td><img src="./'.$value['avatar'].'" width="220px;"></td>';
                                    echo '<td>'.$value['address'].'</td>';
                                    echo '<td>'.$value['sex'].'</td>';
                                    echo '<td><button type="submit" class="btn btn-danger" name="destroy" value="'.$key.'" style="width:80px">xóa</button></td>';
                                    echo '</form></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>