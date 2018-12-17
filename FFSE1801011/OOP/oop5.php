<?php
// Xây dựng lớp Date mô tả thông tin ngày, tháng, năm

    echo "Vui long chay file trong CLI\n";
    class Date {
        private $normal_date=[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        private $leap_date=[31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        
        var $date;
        var $day;
        var $month;
        var $year;
        var $handle;
        function __construct(){
            echo "Nhập chuỗi ngày tháng năm theo định dạng: dd/mm/yyyy: ";
            $this->handle=fopen ("php://stdin","r");
            $this->date=trim(fgets($this->handle));
        }

        function is_leap_year($year){
            if (($year%400 == 0) || ($year%4 == 0 && $year%100 != 0)){
                return true;
            } else { 
                return false;
            }
        }
        function validate(){
            $error=true;
            $pattern = "/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/([0-9]{4})$/";
            while ($error){
                if (preg_match($pattern, $this->date,$result)){
                    $this->day=$result[1];
                    $this->month=$result[2];
                    $this->year=$result[3];
                    if ($this->is_leap_year($this->year))
                    {
                        if ($this->day > $this->leap_date[$this->month-1])
                        {
                            echo 'Ngày không hợp lệ. Vui lòng nhập lại: ';
                            $this->date=trim(fgets($this->handle));
                        }
                        else {$error=false;}
                    }
                    else
                    {
                        if ($this->day > $this->normal_date[$this->month-1])
                        {
                            echo 'Ngày không thuộc tháng. Vui lòng nhập lại: ';
                            $this->date=trim(fgets($this->handle));
                        }
                        else {$error=false;}
                    }
                } else {
                    echo 'Chưa đúng định dạng/ngày tháng không hợp lệ. Vui lòng nhập lại: ';
                    $this->date=trim(fgets($this->handle));
                }
                
            }
            
        }
        function output(){
            echo "Ngày đã nhập: ".$this->date."\n";
        }
        function nextday(){
            $day=$this->day+1;
            $month=$this->month;
            $year=$this->year;
            if ($this->is_leap_year($year))
            {   echo $year." la nam nhuan \n";
                if ($day > $this->leap_date[$month-1])
                {
                    $day = 1;
                    $month++;
                    if ($month > 12)
                    {
                        $month = 1;
                        $year++;
                    }
                }
            }
            else
            {   echo $year." ko phai la nam nhuan \n";
                if ($day > $this->normal_date[$month-1])
                {
                    $day = 1;
                    $month=$month+1;
                    if ($month > 12)
                    {
                        $month = 1;
                        $year=$year+1;
                    }
                }
            }
            echo "Ngày kế tiếp: ".$day."/".$month."/".$year."\n";
        
        }
    }

    
    $y="";
    while ($y!="y"){
        $date01=new Date;
        $date01->validate();
        $date01->output();
        $date01->nextday();
        echo "Nhập Y để thoát chương trình, nhập ký tự bất kỳ hoặc enter để tiếp tục.";
        $y=trim(strtolower(fgets(fopen ("php://stdin","r"))));
        
    }
    
?>