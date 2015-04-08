<?php 
// Start session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
try {
  // Connect to db
  require_once '../../db/connect.php';
  
  // Verify db connection
  if ($db) {
    $sqlCount = 'SELECT COUNT(idContacto)
    FROM PERSONA_CONTACTO 
    WHERE EMPRESA_idEmpresa = :idEmpresa';
    $stmnt = $db->prepare($sqlCount);
    $valorId = array(
      ':idEmpresa' => $_SESSION['sess_id']
      );
    $stmnt->execute($valorId);

    $numero_filas = $stmnt->fetchColumn();
    //echo "numero filas: $numero_filas";

    if ($numero_filas == 1) {
      $sqlSelect = 'SELECT 
          nombreContacto, 
          apellidoContacto 
          FROM PERSONA_CONTACTO
          WHERE EMPRESA_idEmpresa = :id';
      $stmnt = $db->prepare($sqlSelect);
      $valorId = array(
        ':id' => $_SESSION['sess_id']
        );
      $stmnt->execute($valorId);

      foreach ($stmnt as $row) {
        $nombreContacto = $row['nombreContacto'];
        $apellidoContacto = $row['apellidoContacto'];
      }
    }
    elseif ($numero_filas == 0) {
      $nombreContacto = '-';
      $apellidoContacto = '-';
    }


  }
} catch (Exception $e) {
            
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
  <!-- LOAD FROM INTERNET:
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.js"></script>
  -->
       
  <!-- jQuery Form Validation code -->
  <script type="text/javascript" src="../../js/empresa/validarinfocontacto.js"></script>


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




  

 <div class="row form">
  <div class="info">
      <h2>
     <a href="../empresa/inforegistro.php"><span class="grey"> REGISTRO </span></a>
     <a href="../empresa/infoempresa.php"><span class="grey">| EMPRESA </span></a>
     <a href="../empresa/infocontacto.php">| CONTACTO |</a>
     <a href="../empresa/infodireccion.php"><span class="grey"> DIRECCIÓN |</span></a>
     <a href="../empleo/listaempleos.php"><span class="grey">EMPLEOS |</span></a>
     </h2>
     <span class="infoo">Informacion de Contacto. </span>
     </div>

     <form method="POST"  name="infoContacto" action="actualizarinfocontacto.php" id="registrar">

            <p>
            <label for="nombreContacto">Nombre:</label>
            <span class="perfil"><?php echo $nombreContacto; ?></span>
            </p>
            <p>
            <label for="apellidoContacto">Apellido:</label>
            <span class="perfil"><?php echo $apellidoContacto; ?></span>
            </p>

            <p>
            <label for="correo">Email:</label>
            <span class="perfil"><?php echo $apellidoContacto; ?></span>
            </p>
            
            <p>
            <label for="paginaWeb">Página Web:</label>
            <span class="perfil"><?php echo $apellidoContacto; ?></span>
            </p>
            
            <p>
            <label for="telefono">Teléfono Fijo:</label>
            <span class="perfil"><?php echo $apellidoContacto; ?></span>
            </p>
            
            <p>
            <label for="fax">Teléfono Fax:</label>
            <span class="perfil"><?php echo $apellidoContacto; ?></span>
            </p>
            
            <p>
            <input type="submit" value="Actualizar" name="infoContacto">
            </p>       

        </form>    

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
