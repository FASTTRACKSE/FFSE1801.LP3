<?php
$listHS = [
 [
  'name' => 'Trần Nguyễn Nhật Nam',
  'toan' => 9,
  'ly'   => 8.5,
  'hoa'  => 8.9,
 ],
 [
  'name' => 'Nguyễn Thái Nguyên Thảo',
  'toan' => 4,
  'ly'   => 4.1,
  'hoa'  => 3.2,
 ],
 [
  'name' => 'Bùi Ngọc Quỳnh Chi',
  'toan' => 7,
  'ly'   => 8.8,
  'hoa'  => 7.8,
 ],
 [
  'name' => 'Nguyễn Hoàng Thanh Mai',
  'toan' => 8.5,
  'ly'   => 9.2,
  'hoa'  => 7.5,
 ],
 [
  'name' => 'Trần Thị Thu Minh',
  'toan' => 6.5,
  'ly'   => 6,
  'hoa'  => 7,
 ],

];

function diemtrungbinh($listHS)
{
 $listTB = [];
 foreach ($listHS as $key => $value) {
  $tb = round(($value['toan'] + $value['ly'] + $value['hoa']) / 3, 2);
  if ($tb < 5) {
   $xeploai = "Loại yếu";
  } else {
   if ($tb >= 5 && $tb <= 7) {
    $xeploai = "Loại trung bình";
   } else {
    if ($tb > 7 && $tb <= 8.5) {
     $xeploai = "Loại khá";
    } else {
     $xeploai = "Loại giỏi";
    }
   }
  }
  $listTB[] = [
   'name' => $value['name'],
   'toan' => $value['toan'],
   'ly'   => $value['ly'],
   'hoa'  => $value['hoa'],
   'tb'   => $tb,
   'note' => $xeploai,
  ];
 }
 return $listTB;
}
$listTB = diemtrungbinh($listHS);

function sapxep($a, $b)
{
 if ($a['tb'] == $b['tb']) {
  return 0;
 }
 return ($a['tb'] > $b['tb']) ? -1 : 1;
}
usort($listTB, "sapxep");

// $timMax[] = [
//    'name' => $value['name'],
//    'tb'   => $tb,
// ];

// function max($timMax)
// {
//  $total = count($timMax);
//  $max = 0;
//  for ($i = 0; $i > $total; $i++) {
//   if ($timMax['tb'] < $timMax[$i]) {
//    $max = $i;
//   }
//  }
//  return $max;
// };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asm02</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
     <h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
    <table>
        <tr>
            <th>TT</th>
            <th>Họ tên</th>
            <th>Điểm toán</th>
            <th>Điểm lý</th>
            <th>Điểm hóa</th>
            <th>Tổng điểm</th>
            <th>Xếp loại</th>
            <th>Chức năng</th>
        </tr>

    <?php

foreach ($listTB as $key => $value) {
 if ($value['tb'] >= 0 && $value['tb'] < 5) {
  echo "<tr style='color:red'>";
 } else {
  echo "<tr>";
 }

 echo "<td>" . ($key + 1) . "</td>";
 echo "<td>" . $value['name'] . "</td>";
 echo "<td>" . $value['toan'] . "</td>";
 echo "<td>" . $value['ly'] . "</td>";
 echo "<td>" . $value['hoa'] . "</td>";
 echo "<td>" . $value['tb'] . "</td>";
 echo "<td>" . $value['note'] . "</td>";
 echo "<td onclick='this.parentElement.remove()'>Xóa</td>";
}
?>
    </table>
    <?php

$max   = 0;
$maxHS = null;
foreach ($listTB as $value) {
 if ($value['tb'] > $max) {
  $max   = $value['tb'];
  $maxHS = $value;
 }
}
?>
    <h3>Học sinh có điểm số cao nhất</h3>
    <h3>Tên: <?php echo $maxHS['name']; ?> </h3>
    <h3>Điểm trung bình: <?php echo $maxHS['tb']; ?></h3>

</body>
</html>
