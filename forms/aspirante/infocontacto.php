<?php
// Start the session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
// Test
require_once '../../class/aspirante/CRUD/class.Mantenimiento.inc';
$oMantenimiento = new Mantenimiento();
//echo $oMantenimiento->__toString();
?>

<?php 
  // Create connection
  try {

    // 1. Connect to db
    require_once "../../db/connect.php";

    // 
    if ($db) {
      // 
      $sqlCount = 'SELECT COUNT(ASPIRANTE_idAspirante) 
            FROM CONTACTO 
            WHERE ASPIRANTE_idAspirante = :id';
      // 
      $stmnt = $db->prepare($sqlCount);

      // 
      $valorId = array(
          ':id' => $_SESSION['sess_id']
      );

      // 
      $stmnt->execute($valorId);

      $number_of_rows = $stmnt->fetchColumn();
      
      if ($number_of_rows != 0) {
        $sqlSelect = 'SELECT email, 
          paginaWeb,
          telefono,
          celular,
          fax
          FROM CONTACTO 
          WHERE ASPIRANTE_idAspirante = :id'; 

        // Preparar
        $stmnt = $db->prepare($sqlSelect);

        // 
        $valores = array(
          ':id' => $_SESSION['sess_id']
          );

        // 
        $result = $stmnt->execute($valores);

        foreach ($stmnt as $row) {
        $correo = $row['email'] != '' ? $row['email'] : '-';
        $paginaWeb = $row['paginaWeb'] != '' ? $row['paginaWeb'] : '-';
        $telefono = $row['telefono'] != '' ? $row['telefono'] : '-';
        $celular =  $row['celular'] != '' ? $row['celular'] : '-';
        $fax =  $row['fax'] != '' ? $row['fax'] : '-';
        } 
      }
      else {
        $correo = '-';
        $paginaWeb = '-';
        $telefono = '-';
        $celular = '-';
        $fax = '-';
      }

        //check for errors:
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


<?php 

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
  <script type="text/javascript" src="../../js/aspirante/validarInfoContacto.js"></script>


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
     <a href="../aspirante/inforegistro.php"><span class="grey">REGISTRO | </span></a>
     <a href="../aspirante/infopersonal.php"><span class="grey">PERSONAL </span></a>
     <a href="../aspirante/infocontacto.php">| CONTACTO  </a>
     </h2>
  </div>
  

     <form method="POST"  name="actualizarinfocontacto" action="actualizarinfocontacto.php" id="registrar">
            <p>
            <label for="correo">Email:</label>
            <span class="perfil"><?php echo $correo; ?></span>
            </p>
          
            <p>
            <label for="paginaWeb">Página Web:</label>
            <span class="perfil"><?php echo $paginaWeb; ?></span>
            </p>

            <p>
            <label for="telefono">Teléfono Casa:</label>
            <span class="perfil"><?php echo $telefono; ?></span>
            </p>
            
            <p>
            <label for="celular">Teléfono Celular:</label>
            <span class="perfil"><?php echo $celular; ?></span>
            </p>

            <p>
            <label for="fax">Teléfono Fax:</label>
            <span class="perfil"><?php echo $fax; ?></span>
            </p>
            
            <p>
            <input type="submit" value="Actualizar" name="actualizarinfocontacto">
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
