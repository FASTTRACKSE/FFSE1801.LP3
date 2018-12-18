<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asm3_sunflower</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
    <div id="bill">
        <section class="bg-light mt-4 pt-2 pb-4">
            <div id="shop" class="container">
                <div class="title">
                    <h5
                    class="card-title text-center mt-4 pt-4 shadow-lg pb-4 mb-4"
                    style="font-size: 40px; color:#90717f;"
                    >
                    SUNFLOWER
                    </h5>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-3 container">
                        <form name="cart" action="backet.php" method="REQUEST" style="background:#c6edec" class="pb-4">
                            <h4 class="text-center" style="color:#ffffff; background:#00a19b; padding:10px;">Cửa hàng Sunflower</h4>
                            <div class="form-group pl-4 pr-4 mt-4">
                                <label for="">Id hoa:</label>
                                <input name="flowerId" type="text" class="form-control" placeholder="Nhập Id hoa">
                            </div>
                            <div class="form-group pl-4 pr-4">
                                <label for="exampleInputPassword1">Tên hoa:</label>
                                <input name="flowername" type="text" class="form-control" placeholder="Nhập tên hoa">
                            </div>
                            <div class="form-group pl-4 pr-4">
                                <label for="">Số lượng:</label>
                                <input name="amount" type="number" class="form-control" placeholder="Chọn số lượng hoa">
                            </div>
                            <div class="form-group pl-4 pr-4">
                                <label for="">Đơn giá:</label>
                                <input name="price" type="text" class="form-control" placeholder="Đơn giá">
                            </div>
                            <div class="row container">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button name='buy' type="submit" style="color:#000000; background:#f1f1f1" class="mt-4 btn btn-primary">Mua hoa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="./bootstrap.min.js"></script>
<script src="./jquery-3.3.1.slim.min.js"></script>
<script src="./popper.min.js"></script>
</body>
</html>
