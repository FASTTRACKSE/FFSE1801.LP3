<?php
// Xây dựng lớp Nguoi, lớp dẫn xuất Nhanvien kế thừa từ lớp Nguoi

    class CPerson {
        var $name;
        var $age;

        protected function show_person_info(){
            echo "Name: ".$this->name."<br>";
            echo "Age: ".$this->age."<br>";

        }

    }

    class Nhanvien extends CPerson{
        var $code;
        function show_staff_info(){
            parent::show_person_info();
            echo "Code: ".$this->code."<br>";
        }
        
    }

    $nhanvien01=new Nhanvien;
    $nhanvien01->name="Khoa";
    $nhanvien01->age="26";
    $nhanvien01->code="0001";

    $nhanvien01->show_staff_info();


?>