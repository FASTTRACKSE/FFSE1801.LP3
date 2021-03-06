<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASM 02</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid gray;
            text-align: center;
            padding: 8px;
            width: 100vw;
        }
    </style>
</head>
<body>
    <table>
        <h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
        <tr style="background: #e3e3e3;">
            <td>TT</td>
            <td>Họ tên</td>
            <td>Điểm toán</td>
            <td>Điểm lý</td>
            <td>Điểm hóa</td>
            <td>Tổng điểm</td>
            <td>Xếp loại</td>
        </tr>
        <?php
            echo "<script> parent.postMessage(location.pathname+location.search,'http://127.0.0.1:5500');</script>";

            $danhsach = array(
                array(
                    "stt" => 1,
                    "ten" => "Trần Nguyễn Nhật Nam",
                    "toan" => 9,
                    "ly" => 8.5,
                    "hoa" => 8.9,
                    
                ),

                array(
                    "stt" => 2,
                    "ten" => "Bùi Ngọc Quỳnh Nhi",
                    "toan" => 7,
                    "ly" => 8.8,
                    "hoa" => 7.8,
                    
                ),

                array(
                    "stt" => 3,
                    "ten" => "Nguyễn Hoàng Thanh Mai",
                    "toan" => 8.5,
                    "ly" => 9.2,
                    "hoa" => 7.5,
                    
                ),

                array(
                    "stt" => 4,
                    "ten" => "Trần Thị Thu Minh",
                    "toan" => 6.5,
                    "ly" => 6,
                    "hoa" => 7,
                    
                ),

                array(
                    "stt" => 5,
                    "ten" => "Nguyễn Thị Nguyên Thảo",
                    "toan" => 4,
                    "ly" => 4.1,
                    "hoa" => 3.2,
                    
                ),
            );

            $tb = array();

            foreach ($danhsach as $keyhs => $hocsinh) {
                $tb[] = ($hocsinh['toan']+$hocsinh['ly']+$hocsinh['hoa'])/3;
                
            };

            rsort($tb);

            foreach ($tb as $keydiem => $diem) {
                foreach ($danhsach as $keyhs => $hocsinh) {
                    if ($keydiem == $keyhs) {
                        if ($diem<5) { 
                            $xeploai = "Loại yếu" ; 
                        } else if (($diem>5) && ($diem<=7)) {
                            $xeploai = "Lọai trung bình";
                        } else if (($diem>7) && ($diem<=8.5)) {
                            $xeploai = "Loại khá";
                        } else if ($diem>8.5) { 
                            $xeploai = "Loại giỏi";
                        }; ?>
                            <tr <?php if ($diem<5) { echo 'style = "color: red;"'; } ?> >
                            <td><?=$hocsinh['stt']?></td>
                            <td><?=$hocsinh['ten']?></td>
                            <td><?=$hocsinh['toan']?></td>
                            <td><?=$hocsinh['ly']?></td>
                            <td><?=$hocsinh['hoa']?></td>
                            <td><?=round($diem,2)?></td>
                            <td><?=$xeploai?></td>
                            </tr>
                        <?php    
                    };
                 };
            }; 
        ?>
        <br>
        
    </table>
    <p>Bạn <strong><?=$danhsach[0]['ten']?></strong> có điểm trung bình cao nhất là: <strong><?=$tb[0]?></strong> </p>
</body>
</html>






