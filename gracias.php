<?php
// Start the session
require_once 'sesiones/destruirsesion.php';
?>


<?php 
if (isset($_SESSION)) {
	echo "SESION ID:" . $_SESSION['sess_id'];
} 
else {
	echo "SESION NO INICIADA";
}
?>

<?php 

require_once 'db/connect.php';
if ($db) {
	echo "CONEXION SUCCESSFUL";
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


	
	

 <div class="row formm">
  <div class="info">
     <h1>MUCHAS GRACIAS POR TU COMENTATRIO</h1>
     </div>
    <form method="post" action="index.php">
  		<input type="submit" value="Regresar" name="aspirante">
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