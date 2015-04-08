<?php 
require_once '../../sesiones/crearsesion.php';
if (isset($_SESSION['sess_id'])) {
  //echo "Sesion ID: " . $_SESSION['sess_id'];
  //echo "<br>";
}
else {
  //echo "SESION NO INICIADA";
  //echo "<br>";
}

?>

<?php  
try {
  require_once '../../db/connect.php';

  $numero_filas = 0;
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
        //echo '<meta http-equiv="refresh" content="0;url=../nav/noresultados.php">';
    }
    else {
      $sqlSelect = 'SELECT  
        e.nombreEmpresa, 
        e.correo,
        a.area,
        dir.ciudad,
        dep.departamento
        FROM EMPRESA as e
        INNER JOIN AREA as a
        ON e.AREA_idArea = a.idArea
        INNER JOIN DIRECCION as dir
        ON e.idEmpresa = dir.EMPRESA_idEmpresa
        INNER JOIN DEPARTAMENTO as dep
        ON dir.DEPARTAMENTO_idDdepartamento = dep.idDdepartamento
        WHERE e.AREA_idArea = :idArea';
      $stmnt = $db->prepare($sqlSelect);
      $valorId = array(
        ':idArea' => $_POST['area']
        );
      $stmnt->execute($valorId);
    }
  }

  //
  elseif ($db && isset($_POST['buscarDepartamento']) && $_POST['departamento'] != "") {
    //echo "DEPARTAMENTO";
    $sqlCount = 'SELECT COUNT(EMPRESA_idEmpresa) 
          FROM DIRECCION 
          WHERE DEPARTAMENTO_idDdepartamento = :idDepartamento';
    $stmnt = $db->prepare($sqlCount);
    $valorId = array(
          ':idDepartamento' => $_POST['departamento']
          );
    $stmnt->execute($valorId);

    $numero_filas = $stmnt->fetchColumn();
    
    if ($numero_filas == 0) {
      echo '<meta http-equiv="refresh" content="0;url=../nav/noresultados.php">';
    }
    else {
      $sqlSelect = 'SELECT  e.nombreEmpresa, 
        e.correo,
        a.area,
        dir.ciudad,
        dep.departamento
        FROM EMPRESA as e
        INNER JOIN AREA as a
        ON e.AREA_idArea = a.idArea
        INNER JOIN DIRECCION as dir
        ON e.idEmpresa = dir.EMPRESA_idEmpresa
        INNER JOIN DEPARTAMETO as dep
        ON dir.DEPARTAMENTO_idDdepartamento = dep.idDdepartamento
        WHERE dep.idDdepartamento = :idDepartamento';
      $stmnt = $db->prepare($sqlSelect);
      $valorId = array(
        ':idDepartamento' => $_POST['departamento']
        );
      $stmnt->execute($valorId);
    }

  }

  // Si no se selecciona ninguna opción:
  elseif ($_POST['area'] == "" || $_POST['departamento'] == "") {
    echo '<meta http-equiv="refresh" content="0;url=../nav/buscarempresas.php">';
  }

  // 
  else {
    echo "NO ACTION";
  }

} catch (Exception $e) {
  
}
?>

<?php
//
require_once '../../sesiones/destruirsesion.php';

// Start the session
//require_once '../../sesiones/crearSesion.php';
/*if (isset($_SESSION['sess_id'])) {
  $idTest = $_SESSION['sess_id'];
}
else {
  $idTest = 'ID no ha sido definido <br>';
}
echo "Last inserted id: " . $idTest; */
//require_once '../../sesiones/destruirSesion.php'; 
?>

<?php 
require_once '../../class/class.Empresa.inc';
$oEmpresa = new Empresa();

?>

<?php 
  //create connection
  try {

    // 1. Conectar a la base de datos:
    require_once "../../db/connect.php";
  }
 catch (Exception $e){
    $error = $e->getMessage();
  }
?>

<?php if ($db) {
    //echo "<p>Connection successful.</p>";
} elseif (isset($error)) {
    echo "<p>$error</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--IMPORTAR CSS FOR FORM STYLE-->
  <link rel="stylesheet" type="text/css" href="../../css/formStyle.css">

  <!-- Load jQuery and the validate plugin -->
  <script type="text/javascript" src="../../jQueryValidation/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/jquery.validate.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/additional-methods.js"></script>
       
  <!-- jQuery Form Validation code -->
  <script type="text/javascript" src="../../js/aspirante/validarInfoGeneral.js"></script>
  <script type="text/javascript" src="../../js/empresa/validarinforegistro.js"></script>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../marquee.css">
<!--<script type="text/javascript" src="../jquery-1.11.1.js"></script>-->
<script type="text/javascript" src="../../imgpreload.js"></script>
<script type="text/javascript" src="../../marquee.js"></script>
</head>
<body>
<div class="container">
  <header>
  <div class="logo">
    <h2><img src="../../images/logo2.png" width="70"></h2>
    <h3>Bolsa de Trabajo</h3> 
  </div><!--logo-->
  
  <div class="social">
    <p>Unete a nuestras Redes</p>
    <ul>
      <li><a href="">
      <i class="fa fa-facebook-square"></i>
      </a></li>
      <li><a href="">
      <i class="fa fa-twitter-square"></i>
      </a></li>
      <li><a href="">
      <i class="fa fa-google-plus-square"></i>
      </a></li>
      <li><a href="">
      <i class="fa fa-youtube-square"></i>
      </a></li>
    </ul>
  </div><!--social-->

  <nav>
    <ul class="main-nav">
      <li><a href="../../index.php">
        <i class="fa fa-home"></i> Inicio
      </a></li>
      <li><a href="../registro/registroaspirante.php" >
        <i class="fa fa-book"></i> Registro
      </a></li>
      <li><a href="../nav/buscarempresas.php">
        <i class="fa fa-line-chart"></i> 
        Empresas
      </a></li>
      <li><a href="../nav/buscarempleos.php" >
        <i class="fa fa-users"></i> Empleos
      </a></li>
      <li><a href="../../contacto.php" >
        <i class="fa fa-envelope-o"></i>       Contacto
      </a></li>
      <li><a href="../../login.php" >
        <i class="fa fa-male"></i>       Acceder
      </a></li>
    </ul>
    <form>
    <!--
      <span class="search">
      <input type="text" placeholder="search">  
      <a href="">
      <i class="fa fa-search"></i>
      </a>
      </span>
    -->
    </form>
  </nav>
 </header>

 <div class="slider">
    <!--
    <a class="slider-prev" href="">
    <i class="fa fa-chevron-left"></i>
    </a>
    <a class="slider-next" href="">
    <i class="fa fa-chevron-right"></i>
    </a>
    -->
    
    <div class="slide marquee_container autoplay">
    <div class="marquee_photos slide-image"></div>
    <div class="marquee_nav"></div>

    <!--
    <img class="slide-image" src="images/slider-bg5.jpg"
    width="960" height="230">
    -->

    </div><!--slide--> 
 </div><!--slider-->



 <div class="marquee_panels">
        <!-- Panel -->
    <div class="marquee_panel">
      <img class="marquee_panel_photo" src="../../images/slider-bg5.jpg" width="100">
    </div>
        <!-- Panel -->
    <div class="marquee_panel">
      <img class="marquee_panel_photo" src="../../images/slider-bg2.jpg" width="100">
    </div>
        <!-- Panel -->
    <div class="marquee_panel">
      <img class="marquee_panel_photo" src="../../images/slider-bg3.jpg" width="100">
    </div>
  </div>


<div class="row form">
  <div class="info">

    <?php //if ($numero_filas != 0) {
      //echo "<h2>LISTA DE EMPLEOS</h2><br>";
    //} 
    ?>

<?php

 if ($numero_filas == 0) {
?>
      <h2>NO HEMOS ENCONTRADO NINGUN RESULTADO</h2>
      <form method="POST" action="../nav/buscarempresas.php">
      <input type="submit" value="regresar" name="">
      </form>

<?php
 }
 else {
      echo "<h2>EMPLEOS ENCONTRADOS:</h2>";
      foreach ($stmnt as $row) {
          $nombreEmpresa = $row['nombreEmpresa'];
          $correo = $row['correo'];
          $area = $row['area'];
          $ciudad = $row['ciudad'];
          $departamento = $row['departamento'];
          
          echo '<p>';
          //echo '<div class="empleo">';
          echo '<a href="../nav/listaempresas.php">';
          echo "<h2>";
          echo '<label class="nombreEmpresa">' . $nombreEmpresa ."</label><br>";
          echo "</h2>";
          echo '</a>';
          echo '<label>Correo Electrónico: </label><span>' . $correo ."</span><br>";
          echo '<label>Area: </label><span>' . $area ."</span></label><br>";
          echo '<label>Ciudad: </label><span>' . $ciudad ."</span></label><br>";
          echo '<label>Departamento: </label><span>' . $departamento ."</span></label><br>";
          //echo '</div>';
          //echo '</a>';
          echo '</p>';
      }
}
?>

  		
 </div><!--row-->
</div><!--container-->

 
<footer class="clear clearfix">
<div class="footer-row">
  <div class="column-one-thirds">
    <p class="center">
    <i class="fa fa-map-marker"></i>
     Avenida Olimpica #234, San Salvador, El Salvador                                                                        
    


  </div><!--column-one-third-->
  
</div><!--footer-row-->
<div class="copyright clear"> &copy;copyright 2014,Bolsa de Trabajo. Todos los derechos Reservados.
</div>
</footer>




  
 

</body>
</html>
