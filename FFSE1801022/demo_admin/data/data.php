<?php
class database{
    private $conn = null;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $data = 'ffse1701'; //tên database muốn sử dụng.
    public $result = null;
    // public function getdata($data){
    //     $this->data = $data;
    // }
    //xây dựng các phương thức
    private function connect(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->data)
        or die('kết nối thất bại');
        $this->conn->query('SET NAMES UTF8');
    }
    //phương thức select dữ liệu
    public function select($sql){
        $this->connect();
        $this->result = $this->conn->query($sql);
    }
    public function fetch(){
        if($this->result->num_rows > 0){
            $row = $this->result->fetch_assoc();
        }else{
            $row = 0;
        }
        return $row;
    }
    //phương thức chung cho insert, update, delete
    public function command($sql){
        $this->connect();
        $this->conn->query($sql);
    }
}
$dt = new database();
?>