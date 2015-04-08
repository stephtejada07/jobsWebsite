<?php 
//require_once 'sesiones/crearsesion.php';
?>

<?php 

try {
	// 1. Connect to the DB:
    	require_once "db/connect.php";

    	// Save comment to the COMENTARIO table
    	if ($db && isset($_POST['enviarComentario'])) {
    		//
    		$sqlInsert = 'INSERT INTO COMENTARIO(
    			nombre, 
    			email, 
    			comentario) 
			VALUES(
			:nombre, 
			:email,
			:comentario)';
		
		//
		$stmnt = $db->prepare($sqlInsert);

		//
		$valores = array(
			":nombre" => $_POST['nombre'],
			":email" => $_POST['email'],
			":comentario" => $_POST['comentario']
			);

		//
		$result = $stmnt->execute($valores);
    	}

      // Retrieve info from the ASPIRANTE table
    	elseif ($db && isset($_POST['loginAspirante'])) {
    		$sqlCount = 'SELECT COUNT(idAspirante) 
            FROM ASPIRANTE 
            WHERE usuario = :usuario 
            AND contrasena=:contrasena';
      
      // Prepare statement
      $stmnt = $db->prepare($sqlCount);

      // Create array with username ans password
      $valorId = array(
        ':usuario' => $_POST['usuario'],
        ':contrasena' => $_POST['contrasena']
      );

      //Send values in array valorId
      $stmnt->execute($valorId);

      $numero_filas = $stmnt->fetchColumn();

      //echo "<br> numero de filas: " . $numero_filas;

      if ($numero_filas==1) {
      	$sqlSelect = 'SELECT idAspirante 
      		FROM ASPIRANTE 
      		WHERE usuario = :usuario 
      		AND contrasena=:contrasena';

      	// Prepare statement
        $stmnt = $db->prepare($sqlSelect);

        // Create array with username ans password:
        $valores = array(
       	':usuario' => $_POST['usuario'],
        	':contrasena' => $_POST['contrasena']
        );

        //Send values in array valorId
        $stmnt->execute($valores);

        foreach ($stmnt as $row) {
          $idAspirante = $row['idAspirante'] != '' ? $row['idAspirante'] : '-';
        }

        $lastId = $idAspirante;

        require_once ('sesiones/crearvariablessesion.php');

        //echo 'Tu id desde la base:' . $_SESSION['sess_id'];
        //echo "<h2>MAOW</h2>";
        echo  '<meta http-equiv="refresh" content="0;url=forms/aspirante/inforegistro.php">';

      }
      elseif ($numero_filas == 0) {
        echo '<meta http-equiv="refresh" content="0;url=noresultados.php">';
      }

    }

    // Retrieve info from the EMPRESA table
    elseif (isset($_POST['loginEmpresa'])) {
      $sqlCount = 'SELECT COUNT(idEmpresa) 
          FROM EMPRESA
          WHERE usuario = :usuario
          AND contrasena = :contrasena';
      $stmnt = $db->prepare($sqlCount);
      $valores = array(
        ':usuario' => $_POST['usuario'],
        ':contrasena' => $_POST['contrasena']
        );
      $stmnt->execute($valores);
      $numero_filas = $stmnt->fetchColumn();
      //echo "numero de filas: $numero_filas";

      if ($numero_filas == 1) {
        $sqlSelect = 'SELECT idEmpresa 
            FROM EMPRESA 
            WHERE usuario = :usuario
            AND contrasena = :contrasena';
        $stmnt = $db->prepare($sqlSelect);
        $valores = array(
          ':usuario' => $_POST['usuario'],
          ':contrasena' => $_POST['contrasena']
        );
        $stmnt->execute($valores);

        foreach ($stmnt as $row) {
            $idEmpresa = $row['idEmpresa'] != '' ? $row['idEmpresa'] : '-';
        }

        $lastId = $idEmpresa;

        require_once ('sesiones/crearvariablessesion.php');

        //echo 'Tu id desde la base:' . $_SESSION['sess_id'];
        echo  '<meta http-equiv="refresh" content="0;url=forms/empresa/inforegistro.php">';
      }
      elseif ($numero_filas == 0) {
        echo '<meta http-equiv="refresh" content="0;url=noresultados.php">';
      }

    }

	
} 
catch (Exception $e){
    	$error = $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Redirect</title>
	<meta charset="UTF-8">
	<?php 
	if (isset($_POST['enviarComentario'])) {
		echo  '<meta http-equiv="refresh" content="0;url=gracias.php">';
	}
	elseif (isset($_POST['loginAspirante'])) {
          //echo  '<meta http-equiv="refresh" content="3;url=forms/aspirante/inforegistro.php">';
      }
      elseif (isset($_POST['loginEmpresa'])) {
          //echo  '<meta http-equiv="refresh" content="0;url=forms/empresa/inforegistro.php">';
      }
      else {
        
      }
      ?>
</head>
<body>

</body>
</html>