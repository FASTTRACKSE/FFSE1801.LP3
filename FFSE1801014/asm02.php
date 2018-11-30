<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        $arr = array(
            [                                                       
                'name' =>'Trần Nguyễn Nhật Nam',
                'math' => 9,
                'physic' => 8.5,
                'chemitry' => 8.9,
                'total' => '',
                'note' => '',                
            ],
            [
                'name' =>'Bùi Ngọc Quỳnh Nhi',
                'math' => 9,
                'physic' => 8.5,
                'chemitry' => 8.9,
                'total' => '',
                'note' => '',                
            ],
            [
                'name' =>'Nguyễn Hoàng Thanh Mai',
                'math' => 8.5,
                'physic' => 9.2,
                'chemitry' => 7.5,
                'total' => '',
                'note' => '',                
            ],
            [
                'name' =>'Trần Thị Thu Minh',
                'math' => 6.5,
                'physic' => 6,
                'chemitry' => 7,
                'total' => '',
                'note' => '',                
            ],
            [
                'name' =>'Nguyễn Thái Nguyên Thảo',
                'math' => 4,
                'physic' => 4.1,
                'chemitry' => 3.2,
                'total' => '',
                'note' => '',                
            ],
        );
    foreach ($arr as $key => $value) {
        // tinh diem trung binh diem
        $total= round((($value['math']+$value['physic']+$value['chemitry'])/3), 2);
        $arr_total[$key]=$total;

        // tinh xep loai hoc sinh
        if ($total<5) {
            $temp= "Loại yếu";
        } else {
            if ($total<=7) {
                $temp= "Loại trung Bình";
            } else {
                if ($total<=8.5) {
                    $temp= "Loại Khá";
                } else {
                    $temp= "Loại Giỏi";
                }
            }
        }
        // truyền giá trị của điểm trung bình và ghi chú xếp loại vào mảng ban đầu
        $arr[$key]['total'] = $total;
        $arr[$key]['note'] = $temp;
    }
    ?>
    <h1 style="text-align:center">Bảng điểm tổng kết môn của lớp 10A1</h1>
    <table>
        <tr>
            <th>TT</th>
            <th>Họ Tên</th>
            <th>Điểm Toán</th>
            <th>Điểm Lý</th>
            <th>Điểm Hóa</th>
            <th>Tổng Điểm</th>
            <th>Xếp Loại</th>
        </tr>
        <!-- sort -->
    <?php
        function my_sort($a, $b)
        {
            if ($a['total'] == $b['total']) {
                return 0;
            }
            if (isset($_REQUEST['sort'])) { 
                if($_REQUEST['sort']=='up'){
                    return ($a['total'] < $b['total']) ? -1 : 1;
                }else {
                    return ($a['total'] > $b['total']) ? -1 : 1;
                }
            } 
            
        };
        usort($arr,'my_sort');
    ?>
        <!-- print arr -->
    <?php foreach ($arr as $key => $value) {?>
        <tr <?php if ( $value['total']<5) {echo "style='color:red'";}?>>
            <td><?= ($key+1)?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['math']?></td>
            <td><?= $value['physic']?></td>
            <td><?= $value['chemitry']?></td>
            <td><?= $value['total']?></td>
            <td><?= $value['note']?></td>
        </tr>
    <?php 
    }
    ?>
    </table> 
    <?php 
    // xuất ra những học sinh có điểm số cao nhất
        $max= max($arr_total);
        echo "<h1>";
        foreach ($arr as $key => $value) {
            if($value['total']==$max){
                echo $value['name'].", ";
            }
        }
        echo "là học sinh có điểm số trung bình cao nhất! </h1>";
    ?>
    <!-- form sort -->
    <form action='asm02.php' method='get'>
        <select name="sort" id="name">
            <option value="up" <?php if($_REQUEST['sort']=='up'){echo "selected=\"selected\"";} ?>>up</option>
            <option value="down" <?php if ($_REQUEST['sort'] == 'down') {echo "selected=\"selected\"";}?>>down</option>            
        </select>
        <input type="submit" name="submit" value="Get Selected Values" />
    </form>
</body>
</html>