<?php 

require "class.EstadoCivil.inc";
$oEstadoCivil = new EstadoCivil();

?>

<form method="POST">
<select name="estadoCivil">
	<?php 
	$oEstadoCivil->estadoCivil();
	?>
</select>
<?php 
	$oEstadoCivil->genero();
?>
<input type="submit">
</form>


<?php 
echo $oEstadoCivil->getEstadoCivil();
echo "<br>";
echo $oEstadoCivil->getGenero();

?>