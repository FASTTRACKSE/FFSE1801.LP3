<?php 
	 abstract class person{
		var $mat="";
		var $mui="";

		public function __construct($mat,$mui){
			$this->mat = $mat;
			$this->mui = $mui;
		}
		abstract protected function eat($food);

	}

	class programmer extends person{
		var $chuyen_nganh = "IT";
		public function __construct($mat,$mui){
			parent::__construct($mat,$mui);
			echo "Xin chao! Toi la lap trinh vien";
		}
		public function eat($food){
			echo "Toi dang an $food";
		}
	}

	class senior_programmer extends programmer{
		var $exp=  "2 years";
		public static function chem_gio(){
			echo "Toi dep trai nhat";
		}
		public function __construct($mat="",$mui,$exp="2 nam"){

			parent::__construct($mat,$mui);
			$this->exp = $exp;
			
		}
	}


	$pr = new senior_programmer("Xanh","tet","5 nam");
	// $pr->mat = "Xanh";
	// $pr->mui = "cao";

	echo $pr->exp;
	echo "<br>";
	$pr->eat("Chao");
	echo "<br>";
	echo "Mat: {$pr->mat} - Mui: {$pr->mui}";
	echo "<hr>";
	$pr->chem_gio();
?>
