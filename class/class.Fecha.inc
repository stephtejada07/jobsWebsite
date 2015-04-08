<?php 
	
	/**
	* 
	*/
	class Fecha {
		
		public $fecha;
		

		public function setFecha() {
			$this->fecha = date('Y-m-d') ;
			//echo $fecha;
		}

		public function getFecha() {
			echo $this->fecha;
		 
		}

	}

?>

