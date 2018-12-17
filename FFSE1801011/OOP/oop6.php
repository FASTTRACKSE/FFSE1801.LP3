<?php
    class time{
        var $hour;
        var $minute;
        var $second;
        function __construct($h,$m,$s){
            $this->hour=(int)$h;
            $this->minute=(int)$m;
            $this->second=(int)$s;
        }
        function set($h,$m,$s){
            $this->hour=(int)$h;
            $this->minute=(int)$m;
            $this->second=(int)$s;
            
        }
        private function validate(){
            if ($this->hour<0 || $this->hour>23||
                $this->minute<0 || $this->minute>59 ||
                $this->second<0 || $this->second>59               
                ){
                    return false;
                }
            else {
                return true;
            }
        }

        function timeto12(){
            if ($this->validate()){
                if ($this->hour>=12){
                    if($this->hour=12){
                        echo "Dinh dang 12h: ".($this->hour).":".$this->minute.":".$this->second." PM\n";
                    }
                    else{
                        echo "Dinh dang 12h: ".($this->hour-12).":".$this->minute.":".$this->second." PM\n";
                    }
                   
                }
                else {echo "Dinh dang 12h: ".$this->hour.":".$this->minute.":".$this->second." AM\n";}
            }
            else {
                echo "Time ~ ".$this->hour.":".$this->minute.":".$this->second." is invalid.\n";
            }
            
        }
        function timeto24(){
            if ($this->validate()){
                echo "Dinh dang 24h: ".($this->hour).":".$this->minute.":".$this->second."\n";
            }
            else {
                echo "Time ~ ".$this->hour.":".$this->minute.":".$this->second." is invalid.\n";
            }
        }
        function set_h($h){
            $this->hour=$h;
        }
        function set_m($m){
            $this->minute=$m;
        }
        function set_s($s){
            $this->second=$s;
        }
    }

    $time01=new time(12,24,15);
    $time01->timeto12();
    $time01->timeto24();
    $time01->set(00,12,59);
    $time01->timeto12();
    $time01->timeto24();
    $time01->set_h(03);
    $time01->timeto12();
    $time01->timeto24();
    
?>