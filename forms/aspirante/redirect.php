<?php
// Start the session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
// Prueba: clase Mantenimiento
require_once '../../class/aspirante/CRUD/class.Mantenimiento.inc';
$oMantenimiento = new Mantenimiento();
//echo $oMantenimiento->__toString();
?>

<?php 
  //create connection
  try {
    // 1. Conectar a la base de datos:
    require_once "../../db/connect.php";

    if ($db && isset($_POST['actualizarinforegistro'])) {
      $oMantenimiento->setUpdate();
      $sqlUpdate = 'UPDATE ASPIRANTE SET 
        primerNombre = :primerNombre, 
              segundoNombre = :segundoNombre, 
              primerApellido = :primerApellido,
              segundoApellido = :segundoApellido,
              correo = :correo,
              usuario = :usuario,
              contrasena = :contra
              WHERE 
              idAspirante = :id';

      //echo "El id de tu sesion:" . $_SESSION["sess_id"] ;

      $stmnt = $db->prepare($sqlUpdate);
      // Llamar valores para insertar
      $valores = array(
            ":primerNombre" => $_POST["primerNombre"],
            ":segundoNombre" => $_POST["segundoNombre"],
            ":primerApellido" => $_POST["primerApellido"],
            ":segundoApellido" => $_POST["segundoApellido"],
            ":correo" => $_POST["correo"],
            ":usuario" => $_POST["usuario"],
            ":contra" => $_POST["contra"],
            ":id" => $_SESSION["sess_id"]
            ); 
      $results = $stmnt->execute($valores);

      //check for errors:
      $errorInfo = $stmnt->errorInfo();
      if(isset($errorInfo[2])){
        $error = $errorInfo[2];
      }
    }

    elseif ($db && isset($_POST['actualizarinfopersonal'])) {
      $sqlUpdate = 'UPDATE ASPIRANTE SET
        nacimiento = :nacimiento,
        documento = :documento,
        ESTADO_CIVIL_idEstadoCivil = :estadoCivil,
        GENERO_idGenero = :genero
        WHERE idAspirante = :id';

      //echo "El id de tu sesion:" . $_SESSION["sess_id"] ;

      $stmnt = $db->prepare($sqlUpdate);
      $valores = array(
        ":nacimiento" => $_POST['nacimiento'],
        ":documento" => $_POST['documento'],
        ":estadoCivil" => $_POST['estadoCivil'] != '' ? $_POST['estadoCivil'] : 1,
        ":genero" => $_POST['genero'],
        ":id" => $_SESSION['sess_id']
        );
      // Llamar valores para insertar
      $results = $stmnt->execute($valores);

      //check for errors:
      $errorInfo = $stmnt->errorInfo();
      if(isset($errorInfo[2])){
        $error = $errorInfo[2];
      }
    }

    elseif ($db && isset($_POST['actualizarinfocontacto'])) {

      $sqlCount = 'SELECT COUNT(ASPIRANTE_idAspirante) 
            FROM CONTACTO 
            WHERE ASPIRANTE_idAspirante = :id';
      // Preparar
      $stmnt = $db->prepare($sqlCount);

      // Llenar array con los valores necesarios:
      $valorId = array(
        ':id' => $_SESSION['sess_id']
      );

      // Enviar valorId contenidos en array:
      $stmnt->execute($valorId);

      $numero_filas = $stmnt->fetchColumn();

      echo "<br> numero de filas: " . $numero_filas;
      
      if ($numero_filas == 0) {
        $sqlInsert = 'INSERT INTO CONTACTO(
            email,
            paginaWeb,
            telefono,
            celular,
            fax,
            ASPIRANTE_idAspirante)
            VALUES (:email, 
            :paginaWeb, 
            :telefono, 
            :celular, 
            :fax,
            :id)';
        
         $stmnt = $db->prepare($sqlInsert);

        // Llenar array con los valores necesarios:
        $valores = array(
          ':email' => $_POST['correo'],
          ':paginaWeb' => $_POST['paginaWeb'],
          ':telefono' => $_POST['telefono'],
          ':celular' => $_POST['celular'],
          ':fax' => $_POST['fax'],
          ':id' => $_SESSION['sess_id']
        );

      // Enviar valorId contenidos en array:
      $stmnt->execute($valores);
      }
      elseif ($numero_filas == 1) {
        $sqlUpdate = 'UPDATE CONTACTO SET
        email = :email,
        paginaWeb = :paginaWeb,
        telefono = :telefono,
        celular = :celular,
        fax = :fax
        WHERE ASPIRANTE_idAspirante = :id';

      // //echo "El id de tu sesion:" . $_SESSION["sess_id"] ;

      $stmnt = $db->prepare($sqlUpdate);
      $valores = array(
        ":email" => $_POST['correo'],
        ":paginaWeb" => $_POST['paginaWeb'],
        ":telefono" => $_POST['telefono'],
        ":celular" => $_POST['celular'],
        ":fax" => $_POST['fax'],
        ":id" => $_SESSION['sess_id']
        );
      // Llamar valores para insertar
      $results = $stmnt->execute($valores);
      // echo "actuazizalnsdjsadklfd";

      }

      //check for errors:
      $errorInfo = $stmnt->errorInfo();
      if(isset($errorInfo[2])){
        $error = $errorInfo[2];
      }
    }

    elseif ($db && isset($_POST['actualizarinfodireccion'])) {
      $sqlCount = 'SELECT COUNT(ASPIRANTE_idAspirante)
            FROM DIRECCION
            WHERE ASPIRANTE_idAspirante = :id';

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
            ASPIRANTE_idAspirante,
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

          // Llenar array con los valores necesarios:
          $valores = array(
            ':direccion1' => $_POST['direccion1'],
            ':direccion2' => $_POST['direccion2'],
            ':ciudad' => $_POST['ciudad'],
            ':idAspirante' => $_SESSION['sess_id'],
            ':idDepartamento' => $_POST['departamento']
            );

          // Enviar valorId contenidos en array:
          $stmnt->execute($valores);
      }
      elseif ($numero_filas == 1) {
          $sqlUpdate = 'UPDATE DIRECCION SET
              direccion1 = :direccion1,
              direccion2 = :direccion2,
              ciudad = :ciudad,
              DEPARTAMENTO_idDdepartamento = :idDepartamento
              WHERE ASPIRANTE_idAspirante = :idAspirante';

          // echo "El id de tu sesion:" . $_SESSION["sess_id"] ;

          $stmnt = $db->prepare($sqlUpdate);
      
          $valores = array(
            ':direccion1' => $_POST['direccion1'],
            ':direccion2' => $_POST['direccion2'],
            ':ciudad' => $_POST['ciudad'],
            ':idDepartamento' => $_POST['departamento'],
            ':idAspirante' => $_SESSION['sess_id']
          );
          // Llamar valores para insertar
          $results = $stmnt->execute($valores);
      }
      }

    else{
    // echo "SESION NO INICIADA";
    }
  }
 catch (Exception $e){
    $error = $e->getMessage();
  }
?>

<?php
if ($db) {
    // echo "<p>Connection successful.</p>";
} elseif (isset($error)) {
    // echo "<p>$error</p>";
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>REDIRECT</title>
  <meta charset="UTF-8">
  <?php 
  if (isset($_POST['actualizarinforegistro'])) {
    echo '<meta http-equiv="refresh" content="0;url=inforegistro.php">';
  }
  elseif (isset($_POST['actualizarinfopersonal'])) {
    echo '<meta http-equiv="refresh" content="0;url=infopersonal.php">';
  }
  elseif (isset($_POST['actualizarinfocontacto'])) {
    echo '<meta http-equiv="refresh" content="0;url=infocontacto.php">';
  }
  elseif (isset($_POST['actualizarinfodireccion'])) {
    echo '<meta http-equiv="refresh" content="0;url=infodireccion.php">';
  }
   ?>

   
</head>
<body>

</body>
</html>