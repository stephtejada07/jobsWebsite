<?php 
	
	/**
	* 
	*/
	class Paises 
	{
		
		public $paises = array('Argentina', 'Belice','Bermuda', 'Bolivia', 'Brasil', 'Canada', 'Chile', 'Costa Rica',  'Colombia', 'Ecuador', 'El Salvador', 'Estados Unidos', 'Falkland Islands', 'Groenlandia', 'Guatemala', 'Guayana' , 'Francesa', 'Guyana', 'Honduras', 'Islas Malvinas', 'Mexico', 'Nicaragua', 'Panama', 'Paraguay', 'Peru', 'Saint Pierre y Miquelon', 'Suriname', 'Uruguay', 'Venezuela');
		/*$paises[0] = 'Argentina';
		$paises[1] = 'Belice';
		$paises[2] = 'Bermuda';*/

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
			require '../../db/connect.php';
			if ($db) {
				$selectDepartamento = 'SELECT 
					idDdepartamento, 
					departamento 
					FROM DEPARTAMENTO';
  				$stmnt = $db->prepare($selectDepartamento);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idDdepartamento'] . '">' . $row['departamento'] . '</option>';
  				}
  			}
		}

		public function getIdDepartamento($departamento) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idDdepartamento 
					FROM DEPARTAMENTO 
					WHERE departamento = :departamento';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':departamento' => $departamento
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $idDdepartamento = $row['idDdepartamento'];
  				}
  			}
		}
		
	}

?>

