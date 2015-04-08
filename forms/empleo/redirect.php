<?php 
// Create session
require_once '../../sesiones/crearsesion.php';
?>

<?php 
try {
	// Connect to db
	require_once '../../db/connect.php';

	if ($db && isset($_POST['publicarEmpleo'])) {
		$sqlInsert = 'INSERT INTO EMPLEO(
			titulo, 
			descripcion, 
			fechaInicio, 
			fechaFin,
			presupuesto,
          		HORAS_SEMANA_idHorasSemana,
          		TIPO_TRABAJO_idTipoTrabajo,
            	CATEGORIA_idCategoria,
			EMPRESA_idEmpresa)
			VALUES(
			:titulo, 
			:descripcion, 
			:fechaInicio,
			:fechaFin,
			:presupuesto,
            	:idHorasSemana,
            	:idTipoTrabajo,
            	:idCategoria,
			:id);)';
		$stmnt = $db->prepare($sqlInsert);
		$valores = array(
			':titulo' => $_POST['titulo'],
			':descripcion' => $_POST['descripcion'],
			':fechaInicio' => $_POST['fechaInicio'],
			':fechaFin' => $_POST['fechaFin'],
			'presupuesto' => $_POST['presupuesto'],
			':idHorasSemana' => $_POST['horasPorSemana'],
			':idTipoTrabajo' => $_POST['tipoTrabajo'],
			':idCategoria' => $_POST['categoria'],
			':id' => $_SESSION['sess_id']
			);
		$stmnt->execute($valores);
	}
	elseif ($db && isset($_POST['actualizarEmpleo'])) {
		//echo "actualizando";
	}
} catch (Exception $e) {
	
}
?>

<?php 
if (isset($_POST['publicarEmpleo'])) {
	echo '<meta http-equiv="refresh" content="0;url=listaempleos.php">';
}
elseif ($_POST['actualizarEmpleo']) {
 	//echo "actualizando";
 }
 else {

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Redirect
	</title>
</head>
<body>

</body>
</html>