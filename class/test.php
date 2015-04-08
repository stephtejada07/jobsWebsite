<?php 
	require 'class.Empleo.inc';
	$oEmpleo = new Empleo();
	$oEmpleo->getConexion();

?>

 <select name="horasPorSemana" id="">
      <option value="">Seleccione una opcion</option>
      <?php 
	echo $oEmpleo->getHorasPorSemana();
      ?>
</select>

<label>TIPO TRABAJO</label>
 <select name="tipoTrabajo" id="">
      <option value="">Seleccione una opcion</option>
      <?php 
	echo $oEmpleo->getTipo();
      ?>
</select>
