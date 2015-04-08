<!DOCTYPE html>
<html>
<head>
    <title>Regístrate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
      <!--IMPORTAR CSS FOR FORM STYLE-->
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
       <script type="text/javascript" src="../../js/aspirante/validarInfoDireccion.js"></script>
       
</head>
<body>
	<!--FORMULARIO PARA REGISTRAR LA DIRECCIÓN DE UN ASPIRANTE-->
            <div class="info">
            <h1>PASO 4</h1>
            Información de Domicilio.
            </div>


	<form method="POST" action="" name="infoDireccion" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="registrar">

            <p>
            <!--<label for="nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombres Apellidos">
            </p>-->

            <p>
            <label for="linea1">Línea 1:</label>
            <input type="text" name="linea1" placeholder="Residencial/Colonia/Complejo/Zona">
            </p>

            <p>
            <label for="linea2">Línea2:</label>
            <input type="text" name="linea2" placeholder="Senda/Pasaje/Calle/Avenida, Número de Casa/Apartamento">
            </p>

            <p>
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" placeholder="Ciudad/Metrópoli/Población/Localidad/Pueblo">
            </p>

            <p>
            <label for="departamento">Subdivisión:</label>
            <input type="text" name="departamento" placeholder="Departamento/Estado/Provincia">
            </p>

            <p>
            <label for="pais">País:</label>
            <select name="pais">
                <option value="">Selecciona una opción</option>
            <?php 
                // import class Paises.
                require '../../class/class.Paises.inc';
                $oPaises = new Paises();
                $oPaises->imprimirLista();
            ?>
            </select>
            </p>

            <p>
            <label for="codigoPostal">Código Postal:</label>
            <input type="text" name="codigoPostal" placeholder="Código Postal">
            </p>
    
            <p>
            <input type="submit" value="Enviar" name="infoDireccion">
            </p> 

       </form>    

</body>