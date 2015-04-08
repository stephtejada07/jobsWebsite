<?php 
	
	/**
	* 
	*/
	class Empresa 
	{
		public function getArea(){
			require '../../db/connect.php';
			if ($db) {
				$selectArea = 'SELECT 
				idArea, 
				area 
				FROM AREA';
  				$stmnt = $db->prepare($selectArea);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idArea'] . '">' . $row['area'] . '</option>';
  				}
  			}
		}

		public function getIdArea($area) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idArea
				      FROM AREA
				      WHERE area = :area';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':area' => $area
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $area = $row['idArea'];
  				}
  			}
		}
	

		
	}

?>

