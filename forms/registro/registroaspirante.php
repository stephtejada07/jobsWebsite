<?php
// Destroy any existing session before creation a new one
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
  //create connection
  try {

    // 1. Connect to DB:
    require_once "../../db/connect.php";
  }
 catch (Exception $e){
    $error = $e->getMessage();
  }
?>

<?php 
// Test: class Mantenimiento
require_once '../../class/aspirante/CRUD/class.Mantenimiento.inc';
$oMantenimiento = new Mantenimiento();
//echo $oMantenimiento->__toString();
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


<form method="post" action="registroaspirante.php">
  <input type="submit" value="aspirante" name="aspirante">
  <input type="submit" value="empresa" name="empresa">
</form>
  

<?php 
  // If user chooses ASPIRANTE, load the ASPIRANTE form
  if (isset($_POST['aspirante'])) {
?>

<div class="row form">
  <div class="info">
     <h2>REGÍSTRATE</h2>
     <span class="infoo">Registro de Aspirante</span>
     </div>

     
    <form method="POST" name="registrarAspirante" action="redirect.php" id="registrar" >
            
            <p>
            <label for="nombre">Nombres:</label>
            </p>
            <p>
            <input type="text" name="primerNombre" placeholder='Primer nombre' autofocus></input>
            <span class="requerido">*</span>
            </p>
            <p>
            <input type="text" name="segundoNombre" placeholder='Segundo nombre'></input>
            </p>

            <p>
            <label for="apellido">Apellidos:</label>
            </p>
            <p>
            <input type="text" name="primerApellido" placeholder  ='Primer apellido'></input>
            <span class="requerido">*</span>
            </p>
            <p>
            <input type="text" name="segundoApellido" placeholder='Segundo apellido'></input>
            </p>

            <p>
            <label for="correo">Correo Electrónico:</label>
            </p>
            <p>
            <input type="email" name="correo" placeholder='correo@ejemplo.com'></input>
            <span class="requerido">*</span>
            </p>

            <p>
            <label for="usuario">Usuario:</label>
            </p>
            <p>
            <input type="text" name="usuario" placeholder='Usuario'></input>
            <span class="requerido">*</span>
            </p>

            <p>
            <label for="contra">Contraseña:</label>
            </p>
            <p>
            <input type="password" name="contra" id="password" placeholder="Contraseña"></input>
            <span class="requerido">*</span>

            <span id="result"></span>
            </p>

            <p>
            <input type="submit" value="Registrar" name="registrarAspirante">
            </p>
        </form>

 </div><!--row-->
</div><!--container-->

<?php 
  } 
  // If user chooses EMPRESA, load the EMPRESA form
  elseif (isset($_POST['empresa'])) { 
?>

<div class="row form">
  <div class="info">
     <h2>REGISTRATE</h2>
     <span class="infoo">Registro de Empresa</span>
     </div>
    <form method="post" name="registrarEmpresa" action="redirect.php" id="registrar" >
            
            <p>
            <label for="nombreEmpresa">Nombre de la Empresa:</label>
            </p>
            <p>
            <input type="text" name="nombreEmpresa" placeholder='Nombre de la Empresa' autofocus></input>
            <span class="requerido">*</span>
            </p>

            <p>
            <label for="correo">Correo Electrónico:</label>
            </p>
            <p>
            <input type="email" name="correo" placeholder='correo@tuempresa.com'></input>
            <span class="requerido">*</span>
            </p>

            <p>
            <label for="usuario">Usuario:</label>
            </p>
            <p>
            <input type="text" name="usuario" placeholder='Usuario'></input>
            <span class="requerido">*</span>
            </p>

            <p>
            <label for="contra">Contraseña:</label>
            </p>
            <p>
            <input type="password" name="contra" id="password" placeholder="Contraseña"></input>
            <span class="requerido">*</span>
            <span id="result"></span>
            </p>

            <p>
            <input type="submit" value="Registrar" name="registrarEmpresa">
            </p>
        </form>

 </div><!--row-->
</div><!--container-->

<?php 
  }
?>
 
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
