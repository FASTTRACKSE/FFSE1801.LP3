<?php
// Xây dựng lớp đối tượng sách trong thư viện

echo "Vui long chay file trong CLI\n";
    class books{
        // var $type_qty;
        var $name;
        var $quantity;
        var $lended;

        function input($i){
            echo "============== \n";
            $handle = fopen ("php://stdin","r");
            echo "Nhap ten sach thu $i: ";
            $this->name = trim(fgets($handle));
            echo "Nhap so luong sach: ";
            $this->quantity = fgets($handle);
            while (!is_int($this->quantity) && ($this->quantity<=0)){
                echo "Vui long nhap so luong sach la so nguyen duong!";
                $this->quantity = fgets($handle);
            }
            
            echo "Nhap so sach da cho muon: ";
            $this->lended=fgets($handle);
            while (!is_int($this->lended) && ($this->lended<=0)){
                echo "Vui long nhap so sach cho muon la so nguyen duong!";
                $this->lended=fgets($handle);
            }
            while ($this->lended > $this->quantity){
                echo "Khong the cho muon nhieu hon sach trong kho. Vui long nhap lai: ";
                $this->lended=fgets($handle);
            }
            
            echo "\n";
        }
        function output($i){
            echo "==>";
            echo "Ten sach thu $i: ".$this->name."\n";
            echo "So luong sach: ".$this->quantity;
            echo "Da cho muon: ".$this->lended;
            @$left=(int)($this->quantity - $this->lended);
            echo "So sach con lai: ".($left);
            echo "\n \n";
        }
        
    }

        echo "Nhap so luong dau sach ";
        $handle = fopen ("php://stdin","r");
        $type_qty = fgets($handle);
        while (!is_int($type_qty) && ($type_qty<=0)){
            echo "\nVui long nhap so loai sach la so nguyen duong! \n";
            $type_qty = fgets($handle);
        }
        $book=array();
        for ($i=0; $i<$type_qty;$i++){
            $book[$i]=new books;
            $book[$i]->input($i+1);
        }
        echo "Thong tin thu vien: \n";
        for ($i=0; $i<$type_qty;$i++){
            $book[$i]->output($i+1);
        }

?>