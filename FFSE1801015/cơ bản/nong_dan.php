<?php
    include("con_nguoi.php");
    //Lop Con
    class lap_trinh_vien extends con_nguoi{
        
        //Thuoc tinh
        private $suc_khoe;
        private $kinh_nghiem;
        
        //Phuong thuc
        function set_information($ten,$tuoi,$gioi_tinh,$suc_khoe,$kinh_nghiem){
            echo 'Tên nông dân: '.$this -> ten = $ten.'<br>';
            echo 'Tuổi: '.$this -> tuoi = $tuoi.'<br>';
            echo 'Giới tính: '.$this -> gioi_tinh = $gioi_tinh.'<br>';
            echo 'Sức khỏe: '.$this -> suc_khoe = $suc_khoe.'<br>';
            echo 'Kinh nghiệm: '.$this -> kinh_nghiem = $kinh_nghiem.'<br>';
            echo '============n============n=============<br>';
        }
    }
    $lap_trinh_vien = new lap_trinh_vien();
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
    $lap_trinh_vien -> set_information('vu',18,'nam',11,1);
?>