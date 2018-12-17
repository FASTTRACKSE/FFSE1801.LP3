<?php
    include("con_nguoi.php");
    //Lop Con
    class lap_trinh_vien extends con_nguoi{
        
        //Thuoc tinh
        private $ma;
        private $luong;
        
        //Phuong thuc
        function set_information($ten,$tuoi,$gioi_tinh,$ma,$luong){
            echo 'Tên lập trình: '.$this -> ten = $ten.'<br>';
            echo 'Tuổi: '.$this -> tuoi = $tuoi.'<br>';
            echo 'Giới tính: '.$this -> gioi_tinh = $gioi_tinh.'<br>';
            echo 'Mã: '.$this -> ma = $ma.'<br>';
            echo 'Lương: '.$this -> luong = $luong.'<br>';
            echo '============n============n=============<br>';
        }
    }
    $lap_trinh_vien = new lap_trinh_vien();
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
?>