<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        tr{
            border: 1px solid lightgray;
        }
        th.mot{
            width: 10px;
        }
        th.hai{
            width: 100px;
        }
        th.ba{
            width: 250px;
        }
        tr td.center{
            text-align: center;
        }
        .red{
            color: red;
        }
        .color{
            color:black;
        }
    </style>
</head>
<body>
    <h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
    <table border="1">
        <tr>
            <th class="mot">TT</th>
            <th class="nam">Họ tên</th>
            <th class="hai">Điểm toán</th>
            <th class="hai">Điểm lý</th>
            <th class="hai">Điểm hóa</th>
            <th class="hai">Tổng điểm</th>
            <th class="hai">Xếp loại</th>
        </tr>
        <?php
            
            $stt = "0";
            $school = array(
                'hs' => array(
                    'hs1' => array(
                        'ten' => 'Trần Nguyễn Nhật Nam',
                        'diem_toan' => 9,
                        'diem_ly' => 8.5,
                        'diem_hoa' => 8.9,
                        'tong_diem' => '',
                        'xep_loai' => ''
                    ), 
                    'hs2' => array(
                        'ten' => 'Nguyễn Hoàng Thanh Mai',
                        'diem_toan' => 8.5,
                        'diem_ly' => 9.2,
                        'diem_hoa' => 7.5,
                        'tong_diem' => '',
                        'xep_loai' => ''
                    ), 
                    'hs3' => array(
                        'ten' => 'Bùi Ngọc Quỳnh Nhi',
                        'diem_toan' => 7,
                        'diem_ly' => 8.8,
                        'diem_hoa' => 7.8,
                        'tong_diem' => '',
                        'xep_loai' => ''
                    ),
                    'hs4' => array(
                        'ten' => 'Trần Thị Thu Minh',
                        'diem_toan' => 6.5,
                        'diem_ly' => 6,
                        'diem_hoa' => 7,
                        'tong_diem' => '',
                        'xep_loai' => ''
                    ),
                    'hs5' => array(
                        'ten' => 'Nguyễn Thái Nguyên Thảo',
                        'diem_toan' => 4,
                        'diem_ly' => 4.1,
                        'diem_hoa' => 3.2,
                        'tong_diem' => '',
                        'xep_loai' => ''
                    ),       
                ),                       
            );
        ?>
        <?php    
            foreach($school as $k => $v){ 
                foreach($v as $k1 => $v1){ 
                    $color = "black";
                    $stt++;
                    $v1['tong_diem'] = ($v1['diem_toan'] + $v1['diem_ly'] + $v1['diem_hoa'])/3;
                    if($v1['tong_diem'] >= 8){
                        $v1['xep_loai'] = 'Giỏi';
                    }else{
                        if($v1['tong_diem'] >= 6.5){
                            $v1['xep_loai'] = 'Khá';
                        }else{
                            $v1['xep_loai'] = 'Yếu';
                            $color = "red";
                        }
                    }
        ?>
        <tr <?php
                echo "style= color:".$color;
        ?>>
            <td><?= $stt; ?></td>
            <td><?= $v1['ten']; ?></td>
            <td class='center'><?= $v1['diem_toan']; ?></td>
            <td class='center'><?= $v1['diem_ly']; ?></td>
            <td class='center'><?= $v1['diem_hoa']; ?></td>
            <td class='center'><?= round(($v1['tong_diem']),1); ?></td>
            <td class='center'><?= $v1['xep_loai']; ?></td>
        </tr>
        <?php 
                }
            } 
        ?>
    </table>
    
</body>
</html>