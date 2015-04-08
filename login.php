<?php
// Start the session
require_once 'sesiones/destruirsesion.php';
?>


<?php 
if (isset($_SESSION)) {
	//echo "SESION ID:" . $_SESSION['sess_id'];
} 
else {
	//echo "SESION NO INICIADA";
}
?>

<?php 

require_once 'db/connect.php';
if ($db) {
	//echo "CONNEXION SUCCESSFUL";
}
else {
	echo "ERROR";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bolsa de Trabajo</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="marquee.css">
<script type="text/javascript" src="jquery-1.11.1.js"></script>
<script type="text/javascript" src="imgpreload.js"></script>
<script type="text/javascript" src="marquee.js"></script>
</head>
<body>
<div class="container">
	<header>
 	<div class="logo">
		<h2><img src="images/logo2.png" width="70"></h2>
		<h3>Bolsa de Trabajo</h3> 
 	</div><!--logo-->
	
 	<div class="social">
		<p> Nuestras Aplicaciones</p>
		<ul>
			
			<li><a href="">
			<i class="fa fa-windows"></i>
			</a></li>
			<li><a href="">
			<i class="fa fa-apple"></i>
			</a></li>
			<li><a href="">
			<i class="fa fa-android"></i>
			</a></li>
		</ul>
 	</div><!--social-->

	<nav>
		<ul class="main-nav">
			<li><a href="index.php" >
				<i class="fa fa-home"></i> Inicio
			</a></li>
			<li><a href="../miempleoo/forms/registro/registroaspirante.php" >
				<i class="fa fa-user"></i> Registro
			</a></li>
			<li><a href="../miempleoo/forms/nav/buscarempresas.php" >
				<i class="fa fa-line-chart"></i> 
				Empresas
			</a></li>
			<li><a href="../miempleoo/forms/nav/buscarempleos.php" >
				<i class="fa fa-users"></i> Empleos
			</a></li>
			<li><a href="contacto.php" >
        		<i class="fa fa-envelope-o"></i>       Contacto
      		</a></li>
			<li><a href="login.php" >
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
			<img class="marquee_panel_photo" src="images/slider-bg5.jpg" width="100">
		</div>
				<!-- Panel -->
		<div class="marquee_panel">
			<img class="marquee_panel_photo" src="images/slider-bg2.jpg" width="100">
		</div>
				<!-- Panel -->
		<div class="marquee_panel">
			<img class="marquee_panel_photo" src="images/slider-bg3.jpg" width="100">
		</div>
	</div>


	<form method="post" action="login.php">
  		<input type="submit" value="aspirante" name="aspirante">
  		<input type="submit" value="empresa" name="empresa">
	</form>
	
<?php
if (isset($_POST['aspirante'])) {
?>
 <div class="row formm">
  <div class="info">
     <h1>ASPIRANTE</h1>
     </div>
    <form method="POST" name="loginAspirante" action="redirect.php" id="registrar">
            <p>
            <label for="usuario">USUARIO:</label>
            </p>
            <p>
            <input type="text" name="usuario" placeholder="Usuario" autofocus>
            </p>

            <p>
            <label for="contrasena">CLAVE:</label>
            </p>
            <p>
            <input type="password" name="contrasena" placeholder="Contrasena">
            </p>
            <p>
            <input type="submit" value="Acceder" name="loginAspirante">
            </p> 
       </form>    
 </div><!--row-->
</div><!--container-->
<?php
}
elseif (isset($_POST['empresa'])) {
?>
  <div class="row formm">
  <div class="info">
     <h1>EMPRESA</h1>
     
     </div>
    <form method="POST" name="loginEmpresa" action="redirect.php" id="registrar">
            <p>
            <label for="usuario">USUARIO:</label>
            </p>
            <p>
            <input type="text" name="usuario" placeholder="Usuario" autofocus>
            </p>

            <p>
            <label for="contrasena">CLAVE:</label>
            </p>
            <p>
            <input type="password" name="contrasena" placeholder="Contrasena">
            </p>
            <p>
            <input type="submit" value="Acceder" name="loginEmpresa">
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