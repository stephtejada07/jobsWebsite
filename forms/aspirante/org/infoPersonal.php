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
    <script type="text/javascript" src="../../js/aspirante/validarInfoPersonal.js"></script>
      
</head>
<body>
<div class="info">
        <h1>PASO 2</h1>
        Información Personal.
        </div>

        <form method="post" name="infoPersonal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="registrar">

            <p>
            <label for="nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="nacimiento"  required></input>
            </p>
           
           <p>
            <label for="documento">Número de Documento:</label>
            <input type="text" name="documento"  required></input>
            </p>

            <p>
            <label for="pais">País de Origen:</label>
            <select name="pais" required>
                <option value="">Selecciona una opción</option>
            <?php 
                // importar clase Paises.
                require '../../class/class.Paises.inc';
                $oPaises = new Paises();
                $oPaises->imprimirLista();
            ?>
            </select>
            </p>
            
            <p>
            <label for="estadoCivil">Estado Civil:</label>
            <select name="estadoCivil">
            <option value="">Selecciona una opción</option>
            <?php 
                // import class EstadoCivil.
                require '../../class/class.EstadoCivil.inc';
                $oEstadoCivil = new EstadoCivil();
                $oEstadoCivil->imprimirLista();
            ?>
            </select>
            </p>

            <p>
            <fieldset>
            <legend>Género:</legend>
            <input type="radio" name="genero" value="mujer">Mujer</input>

            <input type="radio" name="genero" value="hombre">Hombre</input>
            </fieldset>
            </p>

            <p>
            <input type="submit" value="Continuar" name="infoPersonal">
            </p>

        </form>

</body>