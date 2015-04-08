<?php
// Start the session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
  // Create connection
  try {
    // 1. Connect to db:
    require_once "../../db/connect.php";

    // Create new record on ASPIRANTE table
    if ($db && isset($_POST['registrarAspirante'])) {
      $sqlInsert = 'INSERT INTO ASPIRANTE(
            primerNombre, 
            segundoNombre, 
            primerApellido,
            segundoApellido,
            correo,
            usuario,
            contrasena,
            nacimiento,
            documento,
            ESTADO_CIVIL_idEstadoCivil,
            GENERO_idGenero
            ) 
    VALUES( 
            :primerNombre, 
            :segundoNombre, 
            :primerApellido,
            :segundoApellido,
            :correo,
            :usuario,
            :contra,
            "-",
            "-",
            1,
            1)';

      // Prepare query
      $stmnt = $db->prepare($sqlInsert);
      // Insert values from ASPIRANTE form fields
      $valores = array(
            ":primerNombre" => $_POST["primerNombre"],
            ":segundoNombre" => $_POST["segundoNombre"],
            ":primerApellido" => $_POST["primerApellido"],
            ":segundoApellido" => $_POST["segundoApellido"],
            ":correo" => $_POST["correo"],
            ":usuario" => $_POST["usuario"],
            ":contra" => $_POST["contra"]
            ); 
      $results = $stmnt->execute($valores);

      // Create a session with the last inserted id
      $lastId = $db->lastInsertId();
      require_once '../../sesiones/crearvariablessesion.php';
      /*echo "Session variables are set.";
      echo "<br>";
      echo "Last inserted id: " . $_SESSION["sess_id"];
      echo "<br>";
      echo "Your username: " . $_SESSION["sess_username"];
      echo "<br>";
      echo "Your name: " . $_SESSION["sess_name"]; */
    }
    
    // Create new record on EMPRESA table
    elseif ($db && isset($_POST['registrarEmpresa'])) {
      // Crear query
      $sqlInsert = "INSERT INTO EMPRESA(
          nombreEmpresa, 
          correo, 
          usuario, 
          contrasena,
          documento,
          AREA_idArea
          ) 
          VALUES(
          :nombreEmpresa, 
          :correo, 
          :usuario, 
          :contrasena,
          '-',
          2400
          )";

      // Prepare query
      $stmnt = $db->prepare($sqlInsert);

       // Insert values from EMPRESA form fields
      $valores = array(
            ':nombreEmpresa' => $_POST['nombreEmpresa'],
            ':correo' => $_POST['correo'],
            ':usuario' => $_POST['usuario'],
            'contrasena' => $_POST['contra']
        );

      $results = $stmnt->execute($valores);

      // Create a session with the last inserted id
      $lastId = $db->lastInsertId();
      require_once '../../sesiones/crearvariablessesion.php';
    }
      
    else{
    echo "SESION NO INICIAIDA";
    }
  }
 catch (Exception $e){
    $error = $e->getMessage();
  }
?>

<?php
if ($db) {
    //echo "<p>Connection successful.</p>";
} elseif (isset($error)) {
    echo "<p>$error</p>";
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>REDIRECT</title>
  <meta charset="UTF-8">
  <?php 
  if ($_POST['registrarAspirante']) {
    echo '<meta http-equiv="refresh" content="0;url=../aspirante/inforegistro.php">';
  }
  elseif ($_POST['registrarEmpresa']) {
    echo '<meta http-equiv="refresh" content="0;url=../empresa/inforegistro.php">';
  }
  ?>
  

</head>
<body>

</body>
</html>