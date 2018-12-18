<?php
// Viết 1 lớp biểu diễn hình chữ nhật có các thuộc tính là 2 cạnh

echo "Vui long chay file trong CLI\n";
    class rectangle{
        // var $type_qty;
        var $width;
        var $length;

        function __construct(){
            echo "============== \n";
            $handle = fopen ("php://stdin","r");
            echo "Nhap chieu dai: ";
            $this->length = fgets($handle);
            while (!is_int($this->length) && ($this->length<=0)){
                echo "Vui long nhap chieu dai la so nguyen duong!";
                $this->length = fgets($handle);
            }
            
            echo "Nhap chieu rong: ";
            $this->width=fgets($handle);
            while (!is_int($this->width) && ($this->width<=0)){
                echo "Vui long nhap chieu rong la so nguyen duong!";
                $this->width=fgets($handle);
            }
            
            echo "\n";
        }
        private function circum(){
            return @($this->length + $this->width )*2;
        }
        private function area(){
            return @($this->length * $this->width );
        }
        function __destruct(){
            echo "==> Thong tin Hinh CN: \n";
            echo "Chieu dai: ".$this->length;
            echo "Chieu rong: ".$this->width;
            echo "Chu vi: ".$this->circum()."\n";
            echo "Dien tich: ".$this->area();
            echo "\n \n";
        }
        
    }

        $rectangle01=new rectangle;

?>