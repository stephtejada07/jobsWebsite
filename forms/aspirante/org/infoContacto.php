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
    <script type="text/javascript" src="../../js/aspirante/validarInfoContacto.js"></script>
       
</head>
<body>
    <!--FORMULARIO PARA REGISTRAR LA DIRECCIÓN DE UN ASPIRANTE-->
            <div class="info">
            <h1>PASO 3</h1>
            Información de Contacto.
            </div>


    <form method="POST" action="" name="infoContacto" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="registrar">
            <p>
            <label for="correo">Email:</label>
            <input type="email" name="correo" placeholder="tunombre@ejemplo.com">
            </p>

            <p>
            <label for="paginaWeb">Página Web:</label>
            <input type="url" name="paginaWeb" placeholder="http://www.tupagina.com">
            </p>

            <p>
            <label for="telefono">Teléfono Casa:</label>
            <input type="text" name="telefono" placeholder="55555555">
            </p>

            <p>
            <label for="celular">Teléfono Celular:</label>
            <input type="text" name="celular" placeholder="55555555">
            </p>

            <p>
            <label for="fax">Teléfono Fax:</label>
            <input type="text" name="fax" placeholder="55555555">
            </p>

            <p>
            <input type="submit" value="Continuar" name="infoContacto">
            </p>       

        </form>    

</body>