<?php 
	
	/**
	* 
	*/
	class Paises 
	{
		
		public $paises = array('Argentina', 'Belice','Bermuda', 'Bolivia', 'Brasil', 'Canada', 'Chile', 'Costa Rica',  'Colombia', 'Ecuador', 'El Salvador', 'Estados Unidos', 'Falkland Islands', 'Groenlandia', 'Guatemala', 'Guayana' , 'Francesa', 'Guyana', 'Honduras', 'Islas Malvinas', 'Mexico', 'Nicaragua', 'Panama', 'Paraguay', 'Peru', 'Saint Pierre y Miquelon', 'Suriname', 'Uruguay', 'Venezuela');
		
		public $departamentos = array(
			'Ahuachapan', 'Cabanas', 'Chalatenango', 'Cuscatlan', 'La Libertad', 'La paz', 'La Union', 'Morazan', 'San Miguel', 'San Salvador', 'San Vicente', 'Santa Ana', 'Sonsonate', 'Usulutan'); 
		
		public function imprimir(){
		 for ($i=0; $i < count($this->paises) ; $i++) { 
                	echo $this->paises[$i];
                	echo '<br>';
                } 
		}

		public function getPaises(){
			for ($i=0; $i < count($this->paises); $i++) { 
                	echo '<option value="' . ($i+2) . '">'. $this->paises[$i] . '</option>';
                }
		}

		public function getDepartamentos() {
			for ($i=0; $i < count($this->departamentos); $i++) { 
				echo '<option value="' . ($i+2) . '">'. $this->departamentos[$i] . '</option>';
			}
		}

		public function getIdDepartamento($departamento) {
			if( $departamento == 'Ahuachapan') {
				echo 2;
			}
			elseif( $departamento == 'Cabanas') {
				echo 3;
			}
			elseif( $departamento == 'Chalatenango') {
				echo 4;
			}
			elseif( $departamento == 'Cuscatlan') {
				echo 5;
			}
			elseif( $departamento ==  'La Libertad') {
				echo 6;
			}
			elseif( $departamento == 'La paz') {
				echo 7;
			}
			elseif( $departamento == 'La Union') {
				echo 8;
			}
			elseif( $departamento == 'Morazan') {
				echo 9;
			}
			elseif( $departamento == 'San Miguel') {
				echo 10;
			}
			elseif( $departamento == 'San Salvador') {
				echo 11;
			}
			elseif( $departamento == 'San Vicente') {
				echo 12;
			}
			elseif( $departamento == 'Santa Ana') {
				echo 13;
			}
			elseif( $departamento == 'Sonsonate') {
				echo 14;
			}
			 elseif($departamento == 'Usulutan') {
			 	echo 15;
			 }

		}
		
	}

?>

