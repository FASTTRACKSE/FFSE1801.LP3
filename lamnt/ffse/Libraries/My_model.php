<?php
	
	class My_model{
		var $host="localhost";
		var $username="root";
		var $password="";
		var $db="ffse1701";
		var $mysqli= "";
		var $table="";
		public function __construct(){
			$this->mysqli=new mysqli($this->host,$this->username,$this->password,$this->db);
			$this->mysqli->set_charset("utf8");
		}
		function get_all(){
			$sql= "SELECT * FROM {$this->table}";
			$arItem=array();
			$result=$this->mysqli->query($sql);
			while($item = $result->fetch_assoc()){
				$arItem[]=$item;
			}
			return $arItem;
		}
		function add($data){	
			$str1="";
			$str2="";
			foreach($data as $key=>$value){
				$str1.="$key,";
				$str2.="'$value',";
			}
			$str1 = rtrim($str1,",");
			$str2= rtrim($str2,",");
			$str="INSERT INTO {$this->table}($str1) VALUES($str2)";
			return $this->mysqli->query($str);
		}
	} 
	
?>