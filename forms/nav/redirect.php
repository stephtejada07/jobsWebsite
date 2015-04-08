<?php 
require_once '../../sesiones/crearsesion.php';
echo "Sesion ID: " . $_SESSION['sess_id'];
?>

<?php  
try {
	require_once '../../db/connect.php';
	
	// 
	if ($db && isset($_POST['buscarArea']) && $_POST['area'] != "") {
		$sqlCount = 'SELECT COUNT(idEmpresa) 
			FROM EMPRESA 
			WHERE AREA_idArea = :idArea';
		$stmnt = $db->prepare($sqlCount);
		$valorId = array(
			':idArea' => $_POST['area']
			);
		$stmnt->execute($valorId);

		$numero_filas = $stmnt->fetchColumn();

		if ($numero_filas == 0) {
			echo "numero de filas: $numero_filas";
		}
		else {
			$sqlSelect = 'SELECT 
				e.nombreEmpresa, 
				e.correo,
				a.area
				FROM EMPRESA as e
				INNER JOIN AREA as a
				ON e.AREA_idArea = a.idArea
				WHERE e.AREA_idArea = :idArea';
			$stmnt = $db->prepare($sqlSelect);
			$valorId = array(
				':idArea' => $_POST['area']
				);
			$stmnt->execute($valorId);
			foreach ($stmnt as $row) {
				$nombreEmpresa = $row['nombreEmpresa'];
				echo "Nombre empresa" . $nombreEmpresa;
			}
		}
	}

	//
	elseif ($db && isset($_POST['buscarDepartamento']) && $_POST['departamento'] != "") {
		echo "DEPARTAMENTO";
	}

	// 
	else {
		echo "NO ACTION";
	}

} catch (Exception $e) {
	
}
?>

