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
			
			<li><a href="https://build.phonegap.com/apps/974612/download/winphone">
			<i class="fa fa-windows"></i>
			</a></li>
			<li><a href="">
			<i class="fa fa-apple"></i>
			</a></li>
			<li><a href="https://build.phonegap.com/apps/974612/download/android">
			<i class="fa fa-android"></i>
			</a></li>
		</ul>
 	</div><!--social-->

	<nav>
		<ul class="main-nav">
			<li><a href="" >
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

		
		<div class="slide marquee_container autoplay">
		<div class="marquee_photos slide-image"></div>
		<div class="marquee_nav"></div>

		
	
		

		</div><!--slide--> 
			<img class="slide-image" src="images/it5.jpg"
		width="960" height="230">
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




	

 <h3 class="clear meet-the-team">Encuentra un empleo</h3>
 <div class="row">

	<form method="POST" action="forms/empleo/redirect.php">
	<div class="column-one-fourth">
	<a href="forms/empleo/redirect.php">
	<div class="image-container">
	<img src="images/it2.jpg" 
	width="220" height="160">
	<input type="submit" name="hola" value="admin">
	<div class="image-caption">
	<strong>Administracion</strong><br>
	de Empresas
	</div>
	</div><!--image-container-->
	</a>
	</div><!--colum-one-fourth-->
	</form>

	<!--<div class="column-one-fourth">
	<a href="error.php">
	<div class="image-container">
	<img src="images/it2.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Administracion</strong><br>
	de Empresas
	</div> -->
	</div><!--image-container-->
	</a>
	</div><!--colum-one-fourth-->


	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it1.jpg">
	<div class="image-caption">
	<strong>Cientifico</strong><br>
	Investigacion
	</div>
	</div><!--image-container-->

	</div><!--colum-two-fourth-->


	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it1.jpeg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Direccion</strong><br>
	Gerencia
	</div>
	</div><!--image-container-->

	</div><!--colum-one-fourth-->

	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it5.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Diseno</strong><br>
	Medios
	</div>
	</div><!--image-container-->

	</div><!--colum-one-fourth-->

 </div><!--row-->


 <div class="row wor">

	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it4.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Economia</strong><br>
	Contabilidad 
	</div>
	
	</div><!--image-container-->
	
	</div><!--colum-one-fourth-->


	<div class="column-one-fourth">
	<div class="image-container">
	
	<img src="images/it3.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Informatica</strong><br>
	Telecomunicaciones		
	</div>
	</div><!--image-container-->
	
	</div><!--colum-two-fourth-->


	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it9.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Ingenieria</strong><br>
	Tecnico
	</div>
	</div><!--image-container-->

	</div><!--colum-one-fourth-->

		<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it8.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Legal</strong><br>
	Asesoria
	</div>
	</div><!--colum-one-fourth-->

 </div><!--row-->
 <div class="row wor">

	<div class="column-one-fourth">
	<div class="image-container">
	
	<img src="images/it12.png" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Marketing</strong><br>
	Ventas
	</div>
	</div><!--image-container-->
	
	</div><!--colum-one-fourth-->


	<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it6.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Medicina</strong><br>
	Salud	
	</div>
	</div><!--image-container-->
	
	</div><!--colum-two-fourth-->


		<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/logo3.jpg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Recursos</strong><br>
	Humanos
	
	</div>
	</div><!--image-container-->

	</div><!--colum-one-fourth-->

		<div class="column-one-fourth">
	<div class="image-container">
	<img src="images/it12.jpeg" 
	width="220" height="160">
	<div class="image-caption">
	<strong>Otros</strong><br>	
	</div>
	</div><!--colum-one-fourth-->

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