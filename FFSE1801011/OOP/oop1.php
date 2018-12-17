<?php
// Xây dựng lớp hình tròn dẫn xuất từ lớp điểm

    class cpoint 
    {
        private $x;
        private $y;
        protected function input_xy($x,$y){
            $this ->x=$x;
            $this ->y=$y;
        }
        protected function show_xy(){
            echo "x: ".$this -> x . "<br>";
            echo "y: ".$this -> y ."<br>";
        }
    }

    class ccir extends cpoint{
        private $r;
        function input_xy($x,$y){
            parent::input_xy($x,$y);
        }
        function input_r($r){
            $this ->r=$r;
        }
        function show_xy(){
            parent::show_xy();
        }
        function show_r(){
            echo "r: ".$this -> r ."<br>";
        }
    }

    $tron=new ccir();
    $tron->input_xy(7,8);
    $tron->input_r(9);
    $tron->show_xy();
    $tron->show_r();
    
?>