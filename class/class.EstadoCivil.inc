<?php 
	
	/**
	* 
	*/
	class EstadoCivil {
		
		//public $estadoCivil = array('Acompanado/a', 'Casado/a', 'Divorciado/a', 'Separado/a', 'Soltero/a', 'Viudo/a');

		//public $genero = array('Femenino', 'Masculino');

		public function imprimir() {
		 for ($i=0; $i < count($this->estadoCivil) ; $i++) { 
                	echo $this->estadoCivil[$i];
                	echo '<br>';
                } 
		}

		public function getEstadoCivil() {
			require '../../db/connect.php';
			if ($db) {
				$selectEstadoCivil = 'SELECT 
				idEstadoCivil,
               		estadoCivil
				FROM ESTADO_CIVIL';
  				$stmnt = $db->prepare($selectEstadoCivil);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idEstadoCivil'] . '">' . $row['estadoCivil'] . '</option>';
  				}
  			}
		}





		public function getIdEstadoCivil($estadoCivil) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idEstadoCivil
				      FROM ESTADO_CIVIL
				      WHERE estadoCivil = :estadoCivil';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':estadoCivil' => $estadoCivil
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $estadoCivil = $row['idEstadoCivil'];
  				}
  			}
		}

		public function getGenero() {
			require '../../db/connect.php';
			if ($db) {
				$selectGenero = 'SELECT 
				idGenero,
               		genero
				FROM GENERO';
  				$stmnt = $db->prepare($selectGenero);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idGenero'] . '">' . $row['genero'] . '</option>';
  				}
  			}
		}
		public function getIdGenero($genero) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idGenero
				      FROM GENERO
				      WHERE genero = :genero';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':genero' => $genero
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $generox = $row['idGenero'];
  				}
  			}
		}

		
	}

?>

