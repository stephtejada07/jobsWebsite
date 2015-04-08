<?php 
require_once '../../sesiones/crearsesion.php';
if (isset($_SESSION['sess_id'])) {
  echo "Sesion ID: " . $_SESSION['sess_id'];
  echo "<br>";
}
else {
  echo "SESION NO INICIADA";
  echo "<br>";
}
?>

<?php  
try {
  require_once '../../db/connect.php';

  $numero_filas = 0;
  // 
  if ($db && isset($_POST['buscarCategoria']) && $_POST['categoria'] != "") {
    $sqlCount = 'SELECT COUNT(titulo) 
      FROM EMPLEO 
      WHERE CATEGORIA_idCategoria = :idCategoria';
    $stmnt = $db->prepare($sqlCount);
    $valorId = array(
      ':idCategoria' => $_POST['categoria']
      );
    $stmnt->execute($valorId);

    $numero_filas = $stmnt->fetchColumn();
    //echo "numero de filas $numero_filas";

    if ($numero_filas == 0) {
        //echo '<meta http-equiv="refresh" content="0;url=../nav/noresultados.php">';
    }
    else {
      $sqlSelect = 'SELECT  
          e.titulo,
          e.descripcion,
          e.fechaInicio,
          e.fechaFin,
          e.presupuesto,
          t.tipoTrabajo,
          h.horasSemana,
          c.categoria,
          emp.nombreEmpresa,
          dir.ciudad,
          dep.departamento
          FROM EMPLEO as e
          INNER JOIN TIPO_TRABAJO as t
          ON e.TIPO_TRABAJO_idTipoTrabajo = t.idTipoTrabajo
          INNER JOIN HORAS_SEMANA as h
          ON e.HORAS_SEMANA_idHorasSemana = h.idHorasSemana
          INNER JOIN CATEGORIA as c
          ON e.CATEGORIA_idCategoria = c.idCategoria
          INNER JOIN EMPRESA as emp
          ON e.EMPRESA_idEmpresa = emp.idEmpresa
          INNER JOIN DIRECCION as dir
          ON emp.idEmpresa = dir.EMPRESA_idEmpresa
          INNER JOIN DEPARTAMENTO as dep
          ON dir.DEPARTAMENTO_idDdepartamento = dep.idDdepartamento
        WHERE e.CATEGORIA_idCategoria = :idCategoria';
      $stmnt = $db->prepare($sqlSelect);
      $valorId = array(
        ':idCategoria' => $_POST['categoria']
        );
      $stmnt->execute($valorId);
    }
  }

  //
  elseif ($db && isset($_POST['buscarHora']) && $_POST['hora'] != "") {
    $sqlCount = 'SELECT COUNT(titulo) 
      FROM EMPLEO 
      WHERE HORAS_SEMANA_idHorasSemana = :idHora';
    $stmnt = $db->prepare($sqlCount);
    $valorId = array(
      ':idHora' => $_POST['hora']
      );
    $stmnt->execute($valorId);

    $numero_filas = $stmnt->fetchColumn();
    //echo "numero de filas $numero_filas";

    if ($numero_filas == 0) {
        //echo '<meta http-equiv="refresh" content="0;url=../nav/noresultados.php">';
    }
    else {
      $sqlSelect = 'SELECT  
          e.titulo,
          e.descripcion,
          e.fechaInicio,
          e.fechaFin,
          e.presupuesto,
          t.tipoTrabajo,
          h.horasSemana,
          c.categoria,
          emp.nombreEmpresa,
          dir.ciudad,
          dep.departamento
          FROM EMPLEO as e
          INNER JOIN TIPO_TRABAJO as t
          ON e.TIPO_TRABAJO_idTipoTrabajo = t.idTipoTrabajo
          INNER JOIN HORAS_SEMANA as h
          ON e.HORAS_SEMANA_idHorasSemana = h.idHorasSemana
          INNER JOIN CATEGORIA as c
          ON e.CATEGORIA_idCategoria = c.idCategoria
          INNER JOIN EMPRESA as emp
          ON e.EMPRESA_idEmpresa = emp.idEmpresa
          INNER JOIN DIRECCION as dir
          ON emp.idEmpresa = dir.EMPRESA_idEmpresa
          INNER JOIN DEPARTAMENTO as dep
          ON dir.DEPARTAMENTO_idDdepartamento = dep.idDdepartamento
        WHERE e.HORAS_SEMANA_idHorasSemana = :idHora';
      $stmnt = $db->prepare($sqlSelect);
      $valorId = array(
        ':idHora' => $_POST['hora']
        );
      $stmnt->execute($valorId);
    }
  }

  // Si no se selecciona ninguna opción:
  elseif ($_POST['area'] == "" || $_POST['departamento'] == "") {
    echo '<meta http-equiv="refresh" content="0;url=../nav/buscarempleos.php">';
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
?>

<?php 
require_once '../../class/class.Empresa.inc';
$oEmpresa = new Empresa();

?>

<?php 
  //create connection
  try {

    // 1. Connect to db:
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
  <!--IMPORT CSS FOR FORM STYLE-->
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
      <form method="POST" action="../nav/buscarempleos.php">
      <input type="submit" value="regresar" name="">
      </form>

<?php
 }
 else {
      echo "<h2>EMPLEOS ENCONTRADOS:</h2>";
      foreach ($stmnt as $row) {
          $titulo = $row['titulo'];
          $descripcion = $row['descripcion'];
          $fechaInicio = $row['fechaInicio'];
          $fechaFin = $row['fechaFin'];
          $presupuesto = $row['presupuesto'];
          $tipoTrabajo = $row['tipoTrabajo'];
          $horasSemana = $row['horasSemana'];
          $categoria = $row['categoria'];
          $empresa = $row['nombreEmpresa'];
          $ciudad = $row['ciudad'];
          $departamento = $row['departamento'];
          
          echo '<p>';
          //echo '<div class="empleo">';
          echo '<a href="../nav/detallesempresa.php">';
          echo "<h2>";
          echo '<label class="titulo">' . $titulo ."</label><br>";
          echo "</h2>";
          echo '</a>';
          echo '<label>Descripción: </label><span>' . $descripcion ."</span><br>";
          echo '<label>Fecha Inicio: </label><span>' . $fechaInicio ."</span><br>";
          echo '<label>Fecha Fin: </label><span>' . $fechaFin ."</span><br>";
          echo '<label>Presupuesto: </label><span>' . $presupuesto ."</span><br>";
          echo '<label>Tipo de Trabajo: </label><span>' . $tipoTrabajo ."</span><br>";
          echo '<label>Horas por Semana: </label><span>' . $horasSemana ."</span><br>";
          echo '<label>Categoría: </label><span>' . $categoria ."</span></label><br>";
          echo '<label>Empresa: </label><span>' . $empresa ."</span></label><br>";
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
