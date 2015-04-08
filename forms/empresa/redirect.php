<?php
// Start the session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
// Connect to db
try {
	require_once '../../db/connect.php';

	if ($db && isset($_POST['actualizarInfoRegistro'])) {
		$sqlUpdate = 'UPDATE EMPRESA SET 
			nombreEmpresa = :nombreEmpresa,
			correo = :correo,
			usuario = :usuario,
			contrasena = :contrasena
			WHERE idEmpresa = :id';

		$stmnt = $db->prepare($sqlUpdate);

		$valor = array(
			':nombreEmpresa' => $_POST['nombreEmpresa'],
			':correo' => $_POST['correo'],
			':usuario' => $_POST['usuario'],
			':contrasena' => $_POST['contra'],
			':id' => $_SESSION['sess_id']
			);

		$stmnt->execute($valor);
	}
	elseif ($db && isset($_POST['actualizarInfoEmpresa'])) {
		$sqlUpdate = 'UPDATE EMPRESA SET 
			documento = :documento, 
			AREA_idArea = :area
			WHERE idEmpresa = :id';
		$stmnt = $db->prepare($sqlUpdate);
		$valores = array(
			':documento' => $_POST['documento'],
			':area' => $_POST['area'],
			':id' => $_SESSION['sess_id']
			);
		$stmnt->execute($valores);

	}
	elseif ($db && isset($_POST['actualizarInfoContacto'])) {
		// PERSONA_CONTACTO
		$sqlCount = 'SELECT COUNT(idContacto) FROM PERSONA_CONTACTO 
			WHERE EMPRESA_idEmpresa = :id';
		$stmnt = $db->prepare($sqlCount);
		$valorId = array(
			':id' => $_SESSION['sess_id']
			);
		$stmnt->execute($valorId);

		$numero_filas = $stmnt->fetchColumn();
		echo "numero_filas: $numero_filas";

		if ($numero_filas == 0) {
			$sqlInsert = 'INSERT INTO PERSONA_CONTACTO(
				nombreContacto, 
				apellidoContacto, 
				EMPRESA_idEmpresa)
				VALUES (
				:nombreContacto, 
				:apellidoContacto, 
				:idEmpresa)';

			$stmnt = $db->prepare($sqlInsert);
			$valores = array(
				':nombreContacto' => $_POST['nombreContacto'],
				':apellidoContacto' => $_POST['apellidoContacto'],
				':idEmpresa' => $_SESSION['sess_id']
				);
			$stmnt->execute($valores);
		}

		elseif ($numero_filas == 1) {
			$sqlUpdate = 'UPDATE PERSONA_CONTACTO SET 
				nombreContacto = :nombreContacto,
				apellidoContacto = :apellidoContacto
				WHERE EMPRESA_idEmpresa = :idEmpresa';
			$stmnt = $db->prepare($sqlUpdate);
			$valores = array(
				':nombreContacto' => $_POST['nombreContacto'],
				':apellidoContacto' => $_POST['apellidoContacto'],
				':idEmpresa' => $_SESSION['sess_id']
				);
			$stmnt->execute($valores);
		}

		$sqlSelect = 'SELECT idContacto 
			FROM PERSONA_CONTACTO 
			WHERE EMPRESA_idEmpresa = :id';


	}
	elseif ($db && isset($_POST['actualizarInfoDireccion'])) {
		$sqlCount = 'SELECT COUNT(EMPRESA_idEmpresa)
          		FROM DIRECCION
         	   	WHERE EMPRESA_idEmpresa = :id';

     	 	$stmnt = $db->prepare($sqlCount);

     	 	$valorId = array(
     	     		':id' => $_SESSION['sess_id']
     	   		);

     	 	$stmnt->execute($valorId);

     	 	$numero_filas = $stmnt->fetchColumn();

     	 	// echo "<br> numero de filas direccion: " . $numero_filas;

     	 	if ($numero_filas == 0) {
    	   	 
    	   		$sqlInsert = 'INSERT INTO DIRECCION(
    	      		direccion1,
    	        		direccion2,
    	        		ciudad,
    	        		EMPRESA_idEmpresa,
    	        		DEPARTAMENTO_idDdepartamento
    	        		)	
     	       		VALUES(
    	        		:direccion1,
     	       		:direccion2,
     	       		:ciudad,
     	       		:idAspirante,
    	        		:idDepartamento
  	          		)';
  	      
  	      	$stmnt = $db->prepare($sqlInsert);
	
   	      	//
   	      	$valores = array(
    	       		':direccion1' => $_POST['direccion1'],
   	       		':direccion2' => $_POST['direccion2'],
    	       		':ciudad' => $_POST['ciudad'],
   	       		':idAspirante' => $_SESSION['sess_id'],
   	       		':idDepartamento' => $_POST['departamento']
    	      	);

          	// 
          	$stmnt->execute($valores);
      	}
      	elseif ($numero_filas == 1) {
          	$sqlUpdate = 'UPDATE DIRECCION SET
            	direccion1 = :direccion1,
            	direccion2 = :direccion2,
              ciudad = :ciudad,
              DEPARTAMENTO_idDdepartamento = :idDepartamento
              WHERE EMPRESA_idEmpresa = :idAspirante';

	       

      	       $stmnt = $db->prepare($sqlUpdate);
      
	       $valores = array(
      		':direccion1' => $_POST['direccion1'],
            	':direccion2' => $_POST['direccion2'],
            	':ciudad' => $_POST['ciudad'],
            	':idDepartamento' => $_POST['departamento'],
            	':idAspirante' => $_SESSION['sess_id']
          	      );
          	// 
          	$results = $stmnt->execute($valores);
		}
	}
	else {
		//echo "NADA";
	}
} 
catch (Exception $e) {
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REDIRECT</title>
	<meta charset="UTF-8">

	<?php 
	if (isset($_POST['actualizarInfoRegistro'])) {
		echo '<meta http-equiv="refresh" content="0;url=inforegistro.php">';
	}
	elseif (isset($_POST['actualizarInfoEmpresa'])) {
		echo '<meta http-equiv="refresh" content="0;url=infoempresa.php">';
	}
	elseif (isset($_POST['actualizarInfoContacto'])) {
		//echo '<meta http-equiv="refresh" content="3;url=infocontacto.php">';
	}
	elseif (isset($_POST['actualizarInfoDireccion'])) {
		echo '<meta http-equiv="refresh" content="0;url=infodireccion.php">';
	}
	else {
		echo "ERROR";
	}
	 ?>
</head>
<body>

</body>
</html>

