<?php 
require_once '../../sesiones/crearsesion.php';
//echo "sesion:" . $_SESSION['sess_id'];
?>

<?php 
try {
	require '../../db/connect.php';

      $numero_filas = 0;

	if ($db) {
            $sqlCount = 'SELECT COUNT(idEmpleo) 
                                    FROM EMPLEO 
                                    WHERE EMPRESA_idEmpresa = :idEmpresa';
            $stmnt = $db->prepare($sqlCount);
            $valorId = array(
              ':idEmpresa' => $_SESSION['sess_id']
              );
            $stmnt->execute($valorId);

            $numero_filas = $stmnt->fetchColumn();
            //echo "numero de filas: $numero_filas";

            if ($numero_filas == 0) {
              echo "No hay empleos";
            }
            elseif ($numero_filas != 1) {
              $sqlSelect = 'SELECT 
                      e.titulo, 
                      e.descripcion,
                      e.fechaInicio, 
                      e.fechaFin,
                      e.presupuesto,
                      h.horasSemana,
                      t.tipoTrabajo,
                      c.categoria
                      FROM EMPLEO as e
                      INNER JOIN HORAS_SEMANA as h
                      ON e.HORAS_SEMANA_idHorasSemana = h.idHorasSemana
                      INNER JOIN TIPO_TRABAJO as t
                      ON e.TIPO_TRABAJO_idTipoTrabajo = t.idTipoTrabajo
                      INNER JOIN CATEGORIA as c
                      ON e.CATEGORIA_idCategoria = c.idCategoria
                      WHERE EMPRESA_idEmpresa = :idEmpresa';
              $stmnt = $db->prepare($sqlSelect);
              $valorId = array(
                  ':idEmpresa' => $_SESSION['sess_id']
                  );
              $stmnt->execute($valorId);
            }
	}
}
catch (Exception $e) {
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Empleo</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--IMPORT CSS FOR FORM STYLE-->
  <link rel="stylesheet" type="text/css" href="../../css/formStyle.css">

  <!-- Load jQuery and the validate plugin -->
  <script type="text/javascript" src="../../jQueryValidation/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/jquery.validate.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/additional-methods.js"></script>
  <!-- LOAD FROM INTERNET:
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.js"></script>
  -->
       
  <!-- jQuery Form Validation code -->
  <script type="text/javascript" src="../../js/empleo/validarregistroempleo.js"></script>


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
      <li><a href="../../salir.php" >
        <i class="fa fa-male"></i>       Salir
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




  

 <div class="row formm">
  <div class="info">
     <h2>
     <a href="../empresa/inforegistro.php"><span class="grey">| PERFIL </span></a>
     <a href="../empleo/listaempleos.php">| EMPLEOS |</span></a>
     <a href="../empleo/publicarempleo.php"><span class="grey"> PUBLICAR EMPLEO |</span></a>
     </h2>
  </div>

  <?php 
  if ($numero_filas == 0) {
  ?>

    <h2>NO SE HA PUBLICADO EMPLEOS</h2>

  <?php
  }
  else {
  ?>
    <h2>LISTA DE EMPLEOS</h2>

  <?php 
foreach ($stmnt as $row) {
          $titulo = $row['titulo'];
          $descripcion = $row['descripcion'];
          $fechaInicio = $row['fechaInicio'];
          $fechaFin = $row['fechaFin'];
          $presupuesto = $row['presupuesto'];
          $horasSemana = $row['horasSemana'];
          $tipoTrabajo = $row['tipoTrabajo'];
          $categoria = $row['categoria'];
          
          echo '<p>';
          //echo '<div class="empleo">';
          echo '<a href="../empleo/listaempleos.php">';
          echo '<label class="titulo">' . $titulo ."</label><br>";
          echo '</a>';
          echo '<label>Descripcion: </label><span>' . $descripcion ."</span><br>";
          echo '<label>Fecha Inicio: </label><span>' . $fechaInicio ."</span></label><br>";
          echo '<label>Fecha Fin: </label><span>' . $fechaFin ."</span></label><br>";
          echo '<label>Presupuesto: </label><span>$' . $presupuesto ."</span></label><br>";
          echo '<label>Horas por Semana: </label><span>' . $horasSemana ."</span></label><br>";
          echo '<label>Tipo de trabajo: </label><span>' . $tipoTrabajo ."</span></label><br>";

          echo '<label>Categoria: </label><span>' . $categoria ."</span></label><br>";       
          //echo '</div>';
          //echo '</a>';
          echo '</p>';
        }
 ?>


  <?php
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
