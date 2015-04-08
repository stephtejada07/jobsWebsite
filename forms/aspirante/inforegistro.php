<?php
// Start the session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
echo "SESION ID:" . $_SESSION['sess_id']; 
?>

<?php 
// Prueba: clase Mantenimiento
require_once '../../class/aspirante/CRUD/class.Mantenimiento.inc';
$oMantenimiento = new Mantenimiento();
//echo $oMantenimiento->__toString();
?>

<?php
  /*
  echo "Last inserted id: " . $_SESSION["sess_id"];
  echo "<br>";
  echo "Your username: " . $_SESSION["sess_username"];
  echo "<br>";
  echo "Your name: " . $_SESSION["sess_name"]; */
  ?>

<?php 
  //create connection
  try {

    // 1. Connect to db
    require_once "../../db/connect.php";

    // 2. Verify conecction:
    if ($db) {
      //  
      $oMantenimiento->setSelect();
      $sqlSelect = 'SELECT
                primerNombre,
                segundoNombre,
                primerApellido,
                segundoApellido,
                correo,
                usuario,
                contrasena
                FROM ASPIRANTE 
                WHERE idAspirante = :id';

        // 
        $stmnt = $db->prepare($sqlSelect);

        // 
        $valores = array(
          ':id' => $_SESSION['sess_id']
          );

        // 
        $stmnt->execute($valores);

        // Check for errors:
        $errorInfo = $stmnt->errorInfo();
        if(isset($errorInfo[2])){
          $error = $errorInfo[2];
        }
    }
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

<?php foreach ($stmnt as $row) {
  $primerNombre = $row['primerNombre'];
  $segundoNombre = $row['segundoNombre'];
  $primerApellido = $row['primerApellido'];
  $segundoApellido = $row['segundoApellido'];
  $correo = $row['correo'];
  $usuario = $row['usuario'];
  $contrasena = $row['contrasena'];
} ?>



<!DOCTYPE html>
<html>
<head>
<title><?php echo $_SESSION["sess_username"]; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--IMPORT CSS FOR FORM STYLE-->
  <link rel="stylesheet" type="text/css" href="../../css/formStyle.css">

  <!-- Load jQuery and the validate plugin -->
  <script type="text/javascript" src="../../jQueryValidation/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/jquery.validate.js"></script>
  <script type="text/javascript" src="../../jQueryValidation/validation/additional-methods.js"></script>
         
  <!-- jQuery Form Validation code -->
  <script type="text/javascript" src="../../js/aspirante/validarInfoGeneral.js"></script>


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
      <li><a href="../aspirante/inforegistro.php" >
        <i class="fa fa-book"></i> Perfil
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
     <a href="../aspirante/inforegistro.php"> REGISTRO |</a>
     <a href="../aspirante/infopersonal.php"><span class="grey"> PERSONAL | </span></a>
     <a href="../aspirante/infocontacto.php"><span class="grey">CONTACTO  </span></a>
    </h2>
    
     <h2>Bienvenido/a <?php //echo $_SESSION['sess_name']; ?></h2>
     <span class="infoo">Información de Registro</span>
     </div>
    <form method="post" name="actualizarinforegistro" action="actualizarinforegistro.php" id="registrar" >
            
            <p>
            <label for="primerNombre">Primer Nombre:</label>
            <span class="perfil"><?php echo $primerNombre; ?></span>
            </p>
            
            <p>
            <label for="segundoNombre">Segundo Nombre:</label>
            <span class="perfil"><?php echo $segundoNombre; ?></span>
            </p>
            
            <p>
            <label for="primerApellido">Primer Apellido:</label>
            <span class="perfil"><?php echo $primerApellido; ?></span>
            </p>
            
            <p>
            <label for="segundoApellido">Segundo Apellido:</label>
            <span class="perfil"><?php echo $segundoApellido; ?></span>
            </p>

            <p>
            <label for="correo">Correo:</label>
            <span class="perfil"><?php echo $correo; ?></span>
            </p>

            <p>
            <label for="usuario">Usuario:</label>
            <span class="perfil"><?php echo $usuario; ?></span>
            </p>

            <p>
            <label for="contrasena">Contraseña:</label>
            <span class="perfil">*******</span>
            </p>

            <p>
            <input type="submit" value="Actualizar" name="actualizarinforegistro">
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
