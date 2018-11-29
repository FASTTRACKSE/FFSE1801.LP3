<?php
$course = array(
    array(
    'title' => 'Khóa học lập trình Frontend Online',
    'fee' => 1200000
    ),
    array(
    'title' => 'Khóa học  lập trình web PHP-MYSQL',
    'fee' => 1680000
    )
);
foreach($course as $k => $v){
    echo "{$k}<br/>";
    echo "--{$v['title']}<br/>";
    echo "--{$v['fee']}<br/>";
}
?>