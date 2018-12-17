<?php 
	class Animal{
		var $chan= "2 chân";
		protected function eat(){
			return "Con vật đang ăn: ";
		}
	}

	class Pig extends Animal{
		var $chan = "4 chân";
		public function eat(){
			$pr = parent::eat();
			echo "$pr cám";
		}
	}


	 $heo1= new Pig();
	echo  $heo1->chan;
	
?>