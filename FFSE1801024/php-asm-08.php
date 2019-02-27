<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script>
        function alert(messs,color,time) {
          setTimeout(() => {
              let diva = document.getElementById('alert');
        
              let divAlert = document.createElement('div')
              divAlert.id = "alert"+time;
              divAlert.className += "alert ";
              switch (color) {
                case 'primary':
                  divAlert.className += "alert-primary";
                  break;
                case 'secondary':
                  divAlert.className += "alert-secondary";
                  break;
                case 'success':
                  divAlert.className += "alert-success";
                  break;
                case 'danger':
                  divAlert.className += "alert-danger";
                  break;
                case 'info':
                  divAlert.className += "alert-info";
                  break;
                case 'warning':
                  divAlert.className += "alert-warning";
                  break;
                default:
                  divAlert.className += "alert-light";
                  break;
              }
              divAlert.innerHTML = messs
              diva.appendChild(divAlert);
              setTimeout(() => {
                document.getElementById("alert"+time).remove();
              }, time);
          }, 200);
        }
    </script>
  </head>
  <body>
  <?php
    session_start();
    $keyShow = 0;
    $settingConnectDB = [
        'host'=>'localhost',
        'user'=>'root',
        'password'=>'',
        'database'=>'ffse1801024',
        'port'=>'3306'
    ];
    $createDB = [
        [
            'DB',
            'CREATE DATABASE IF NOT EXISTS ffse1801024 '
        ],
        [
            'Table lms_users',
            'CREATE TABLE IF NOT EXISTS ffse1801024.lms_users (
                user_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                user_name Nvarchar(50) NOT NULL,
                user_fullname Nvarchar(255) NOT NULL,
                user_email Nvarchar(100) NOT NULL,
                user_password Nvarchar(100) NOT NULL
            )'
        ],
        [
            'Insert Data',
            'INSERT INTO  ffse1801024.lms_users (user_id,user_name, user_fullname, user_email, user_password) VALUES
            (1,"thanhcl","Cao Lê Thành","thanhcl@fasttrack.edu.vn","123456"),
            (2,"lamn","Nguyễn Lâm","lamn@fasttrack.edu.vn","123456"),
            (3,"thangt","Thắng Trần","thangt@fasttrack.edu.vn","123456"),
            (4,"ffse1801024","Nguyễn Đức Việt","ffse1801024@fasttrack.edu.vn","123456"),
            (5,"ffse1801001","Nguyễn Khoa Thị Ngọc Ân","ffse1801001@fasttrack.edu.vn","123456"),
            (6,"admin","Administrator","admin@admin.com","123456"),
            (7,"author","Author","author@admin.com","123456")'
        ]
    ];
    
    $selectDB=[
      [
        'lms_users',
        'SELECT * FROM ffse1801024.lms_users'
      ]
    ];
    $insertDB = 'INSERT INTO  ffse1801024.lms_users (user_name, user_fullname, user_email, user_password) VALUES (?,?,?,?)';

  

    $dataSelectDB = [];

    function connectDB($settingConnectDB){
        $conn = new mysqli($settingConnectDB['host'], $settingConnectDB['user'], $settingConnectDB['password']);
        if ($conn->connect_error) {
           throw new Exception("Lỗi kết nối cơ sở dữ liệu: ".$conn->connect_error, 1);
        } 
        return $conn;
    }

    function queryCreateDB($settingConnectDB,$sql,$connectDB){
        $conn = $connectDB($settingConnectDB);
        global $keyShow;
        foreach ($sql as $key => $value) {
            $keyShow++;
            if ($conn->query($value[1]) === TRUE) {
              echo "<script>alert('Tạo ". $value[0]." thành công.','primary',".($keyShow*1500).")</script>";
            } else {
                if($value[0]=='Insert Data'){
                    echo "<script>alert('Bảng đã có dữ liệu','warning',".($keyShow*1500).")</script>";
                    break;
                }
                throw new Exception("Lỗi: ". $conn->error);
            }
        }
        $conn->close();
    }

    function querySelectDB($settingConnectDB,$sql,$connectDB){
        $conn = $connectDB($settingConnectDB);
        global $dataSelectDB,$keyShow;
        foreach ($sql as $key => $value) {
          $keyShow++;
          if (($result=$conn->query($value[1]))->num_rows > 0) {
              echo "<script>alert('Select ". $value[0]." thành công.','primary',".($keyShow*1500).")</script>";
              $temp = [];
              while($row = $result->fetch_assoc()) {
                $temp[]= $row;
              }
              $dataSelectDB[$value[0]] =  $temp ;
          } else {
            $dataSelectDB[$value[0]] =  [] ;
            echo "<script>alert('Bảng ". $value[0]." không có dữ liệu.','warning',".($keyShow*1500).")</script>";
          }
        }
        $conn->close();
    }

    function queryInsertDB($settingConnectDB,$sql,$connectDB){
        $conn = $connectDB($settingConnectDB);
        global $keyShow;
        $name =$_REQUEST['name'];
        $fname =$_REQUEST['fname'];
        $email =$_REQUEST['email'];
        $password =$_REQUEST['password'];
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('sssd',$name,$fname,$email,$password);
            $stmt->execute();
            $keyShow++;
            if ($stmt->affected_rows == 1) {
              echo "<script>alert('Create thành công.','success',".($keyShow*1500).")</script>";
            } else {
              echo "<script>alert('Thêm dữ liệu bị lỗi','danger',".($keyShow*1500).")</script>";
            }
            $stmt->close();
        }
        $conn->close();
    }
    function queryDestroyDB($settingConnectDB,$connectDB){
        $conn = $connectDB($settingConnectDB);
        global $keyShow;
        $sql = 'DELETE FROM ffse1801024.lms_users WHERE user_id= '.$_REQUEST['destroy'].'';
        $keyShow++;
        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Xóa dữ liệu thành công.','success',".($keyShow*1500).")</script>";
        } else {
          echo "<script>alert('Xóa dữ liệu bị lỗi','danger',".($keyShow*1500).")</script>";
        }
        $conn->close();
    }
    function queryUpdateDB($settingConnectDB,$connectDB){
        $conn = $connectDB($settingConnectDB);
        global $keyShow;
        $name =$_REQUEST['name'];
        $fname =$_REQUEST['fname'];
        $email =$_REQUEST['email'];
        $sql = 'UPDATE ffse1801024.lms_users SET user_name="'.$name.'", user_fullname="'.$fname.'",  user_email = "'.$email.'" WHERE user_id='.$_REQUEST['edit'];
        // $sql = 'UPDATE ffse1801024.lms_users SET user_name='.$name.', user_fullname='.$fname.',  user_email = WHERE user_id=1';
        $keyShow++;
        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Sửa liệu thành công.','success',".($keyShow*1500).")</script>";
        } else {
          echo "<script>alert('Sửa dữ liệu bị lỗi','danger',".($keyShow*1500).")</script>";
        }
        $conn->close();
    }

    try {
        if (isset($_REQUEST['addDB'])) {
          queryCreateDB($settingConnectDB,$createDB,'connectDB');
          $_SESSION['addDB'] = "";
        }
        if (isset($_SESSION['addDB'])) {
          if(isset($_REQUEST['add'])){
            queryInsertDB($settingConnectDB,$insertDB,'connectDB');
          }else if(isset($_REQUEST['destroy'])){
            queryDestroyDB($settingConnectDB,'connectDB');
          }else if(isset($_REQUEST['edit'])){
            queryUpdateDB($settingConnectDB,'connectDB');
          }
          querySelectDB($settingConnectDB,$selectDB,'connectDB');
        }else{
          echo "<script>alert('Vui lòng bấm nút CreateBD','danger',".(30000).")</script>";
        }
        /// chưa kiểm tra database chỉ làm để không bị bug lần đầu khởi chạy
    } catch (\Throwable $th) {
        echo "<pre>".$th->getMessage()."</pre>";
    }
?>
    <div id="app">
      <div class="container">
        <div id="alert"></div>
        <div class="title">
          <h2 class="d-inline-block" >Users List</h2>
          <div class=" float-right mt-2">
            <form action="php-asm-08.php" method='get' id="addDB">
              <input type="text" name="addDB" style="display:none">
            </form>
            <button class="btn btn-primary btn-sm" type="submit" onclick="document.getElementById('addDB').submit()">CreateDB</button>
            <button class="btn btn-success ml-2 btn-sm" data-toggle="modal" data-target="#addNewBtn">Add New User</button>
          </div>
          
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Fullname</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id='table-row'>
            </tbody>
          </table>
      </div>
    </div>
    <div class="modal fade" id="addNewBtn" tabindex="-1" role="dialog" aria-labelledby="modalNewBtn" aria-hidden="true">
        <form action="php-asm-08.php" method="get">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalNewBtn">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ex: viet1998tk" required>
                </div>
                <div class="form-group">
                    <label for="fname">Fullname</label>
                    <input type="text" class="form-control" id="fname" name="fname"  placeholder="ex: Nguyễn Đức Việt" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  placeholder="ex: nguyenducviet...@gmail.com">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password"  name="password" placeholder="***********">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="add">Create</button>
              </div>

            </div>
          </div>
        </form>
      </div>
    <div class="modal fade" id="readBtn" tabindex="-1" role="dialog" aria-labelledby="modalReadBtn" aria-hidden="true">
        <form action="php-asm-08.php" method="get">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalReadBtn">View User Infor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="nameModelRead">Name</label>
                    <input type="text" class="form-control"  id="nameModelRead" name="name"  readonly>
                </div>
                <div class="form-group">
                    <label for="fnameModelRead">Fullname</label>
                    <input type="text" class="form-control"  id="fnameModelRead" name="fname"  readonly>
                </div>
                <div class="form-group">
                    <label for="emailModelRead">Email</label>
                    <input type="email" class="form-control"  id="emailModelRead" name="email" readonly>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    <div class="modal fade" id="editBtn" tabindex="-1" role="dialog" aria-labelledby="modalEditBtn" aria-hidden="true">
        <form action="php-asm-08.php" method="get">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalEditBtn">Update User Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="nameModelEdit">Name</label>
                    <input type="text" class="form-control" name="name"  id="nameModelEdit" placeholder="ex: viet1998tk" required>
                </div>
                <div class="form-group">
                    <label for="fnameModelEdit">Fullname</label>
                    <input type="text" class="form-control" name="fname" id="fnameModelEdit" placeholder="ex: Nguyễn Đức Việt" required>
                </div>
                <div class="form-group">
                    <label for="emailModelEdit">Email</label>
                    <input type="email" class="form-control" name="email" id="emailModelEdit" placeholder="ex: nguyenducviet...@gmail.com">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="edit" id="submitModelEdit">Edit</button>
              </div>

            </div>
          </div>
        </form>

      </div>
    <div class="modal fade" id="destroyBtn" tabindex="-1" role="dialog" aria-labelledby="modalDestroyBtn" aria-hidden="true">
        <form action="php-asm-08.php" method="get">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalDestroyBtn">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    Bạn có chắc chắn mún xóa <strong id="nameModelDestroy"></strong> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" name="destroy" id="submitModelDestroy" value="">Delete</button>
              </div>

            </div>
          </div>
        </form>

      </div>
      <div id="printa"></div>
    <?php
      echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";
    ?>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script>
     
      var arrDB= <?php
        echo json_encode($dataSelectDB);
      ?>;
      function printTable(data ,nameData){
          let table = document.getElementById('table-row');
          for (let i = 0; i < data.length; i++) {
            let td,tr,button,th;
            tr = document.createElement('tr')
            th = document.createElement('th')
            th.scope= "row";
            th.innerHTML = data[i].user_id
            tr.appendChild(th);
            td = document.createElement('td')
            td.innerHTML = data[i].user_name;
            tr.appendChild(td);
            td = document.createElement('td')
            td.innerHTML = data[i].user_fullname;
            tr.appendChild(td);
            td = document.createElement('td')
            td.innerHTML = data[i].user_email;
            tr.appendChild(td);
            td = document.createElement('td')
            button = document.createElement('button')
            button.setAttribute("data-toggle", "modal")
            button.setAttribute("data-target", "#readBtn")
            button.setAttribute("onclick",  'printReadModal('+data[i].user_id+')')
            button.className += "far fa-eye btn btn-outline-info mr-1";
            td.appendChild(button);
            button = document.createElement('button')
            button.setAttribute("data-toggle", "modal")
            button.setAttribute("data-target", "#editBtn")
            button.setAttribute("onclick",  'printEditModal('+data[i].user_id+')')
            button.className += "fas fa-pen btn btn-outline-primary mr-1";
            td.appendChild(button);
            button = document.createElement('button')
            button.setAttribute("data-toggle", "modal")
            button.setAttribute("data-target", "#destroyBtn")
            button.setAttribute("onclick",  'printDetroysModal('+data[i].user_id+')')
            button.className += "fas fa-trash-alt btn btn-outline-danger";
            td.appendChild(button);
            tr.appendChild(td);
            table.appendChild(tr);
          }
      }
      printTable(arrDB.lms_users)

      function printDetroysModal(id) {
        var found = arrDB.lms_users.find(function(element) {
          return element.user_id == id;
        });
        document.getElementById('submitModelDestroy').value = id
        document.getElementById('nameModelDestroy').innerHTML = found.user_name
      }

      function printEditModal(id) {
        var found = arrDB.lms_users.find(function(element) {
          return element.user_id == id;
        });
        document.getElementById('nameModelEdit').value = found.user_name
        document.getElementById('fnameModelEdit').value = found.user_fullname
        document.getElementById('emailModelEdit').value = found.user_email
        document.getElementById('submitModelEdit').value = id
      }

      function printReadModal(id) {
        var found = arrDB.lms_users.find(function(element) {
          return element.user_id == id;
        });
        document.getElementById('nameModelRead').value = found.user_name
        document.getElementById('fnameModelRead').value = found.user_fullname
        document.getElementById('emailModelRead').value = found.user_email
      }
    </script>
  </body>
</html>