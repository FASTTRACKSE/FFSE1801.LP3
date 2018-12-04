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
    function handleAddCart($request,$session){
        if (!isset($session['cart'])) {
            $session['cart']= [];
        }
        $idflow = $request['idflow'];
        $nameflow = $request['nameflow'];
        $quantityflow = $request['quantityflow'];
        $priceflow = $request['priceflow'];
        $cart = $session['cart'];
        $cart[$idflow] = [
            'idflow'=>$idflow,
            'nameflow'=>$nameflow,
            'quantityflow'=>$quantityflow,
            'priceflow'=>$priceflow
        ];
        setSession($cart,'cart');
    }

    function destroy($id, $session){
        $cart = $session['cart'];
        unset($cart[$id]);
        setSession($cart,'cart');
    }

    function edit($id, $value, $session){
        $cart = $session['cart'];
        $temp = $cart[$id]['quantityflow'];
        $cart[$id]['quantityflow'] = $value+ $temp;
        setSession($cart,'cart');
    }

    if (sizeof($request)>0) {
        if (isset($request['add'])) {
            handleAddCart($request,$session);
        } else if(isset($request['edit'])){
            edit($request['edit'], $request['quantityflow'], $session);
        }else if(isset($request['destroy'])){
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
            <div class="row mt-3">
                <div class="col-3">
                    <div class="alert alert-primary" role="alert">
                        Cửa hàng SunFlow
                    </div>
                    <form action="php-asm-03.php" method="post">
                        <div class="form-group">
                            <label for="idhoa">Id Hoa</label>
                            <input type="text" class="form-control" id="idhoa" name="idflow" placeholder="vd: h1,h3...." required>
                        </div>
                        <div class="form-group">
                            <label for="namehoa">Tên Hoa</label>
                            <input type="text" class="form-control" id="namehoa" name="nameflow" placeholder="vd: hoa huệ, hoa cúc..." required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Số Lượng</label>
                            <input type="number" class="form-control" id="quantity" name="quantityflow" min="1" value="1">
                        </div>
                        <div class="form-group">
                            <label for="price">Đơn Giá</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="price">₫</span>
                                </div>
                                <input type="number" class="form-control" id="price" name="priceflow"  min="1000" value="1000">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="add">Đặt hoa</button>
                    </form>
                </div>
                <div class="col-9">
                    <div class="alert alert-warning" role="alert">
                        Giỏ hàng
                    </div>
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $globalTotal = 0;
                                foreach (isset($session['cart'])?$session['cart']:[] as $key => $value) {
                                    echo '<tr><form action="php-asm-03.php" method="post">';
                                    echo '<th scope="row">'.$key.'</th>';
                                    echo '<td>'.$value['nameflow'].'</td>';
                                    echo '<td>'.$value['priceflow'].'₫</td>';
                                    echo '<td><input type="number" name="quantityflow" value="'.$value['quantityflow'].'" style="width:70px" min="1"></td>';
                                    $total = $value['quantityflow']*$value['priceflow'];
                                    echo '<td>'.$total.'₫</td>';
                                    echo '<td><button type="submit" name="edit" value="'.$key.'">sửa</button> <button type="submit" name="destroy" value="'.$key.'">xóa</button></td>';
                                    echo '</form></tr>';
                                    $globalTotal += $total;
                                }
                                echo '<tr>';
                                echo '<th scope="row"></th>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td>Thành tiền</td>';
                                echo '<td>'.$globalTotal.'₫</td>';
                                echo '<td></td>';
                                echo '</tr>';
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