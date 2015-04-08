<?php 
	/**
	* 
	*/
	class Empleo 
	{
		public function getConexion() {
			//require '../db/connect.php';

		}

		public function getHorasPorSemana() {
			require '../../db/connect.php';
			if ($db) {
				$selectHoras = 'SELECT 
					idHorasSemana, 
				      horasSemana 
        				FROM HORAS_SEMANA;';
  				$stmnt = $db->prepare($selectHoras);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idHorasSemana'] . '">' . $row['horasSemana'] . '</option>';
  				}
  			}
		}

		public function getTipoTrabajo() {
			require '../../db/connect.php';
			if ($db) {
				$sql = 'SELECT 
					idTipoTrabajo, 
					tipoTrabajo 
					FROM TIPO_TRABAJO';

  				$stmnt = $db->prepare($sql);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idTipoTrabajo'] . '">' . $row['tipoTrabajo'] . '</option>';
  				}
  			}
		}
		public function getCategorias() {
			require '../../db/connect.php';
			if ($db) {
				$sql = 'SELECT 
					idCategoria, 
					categoria 
					FROM CATEGORIA';

  				$stmnt = $db->prepare($sql);
  				$stmnt->execute();
  				
  				foreach ($stmnt as $row) {
    				echo '<option value="' . $row['idCategoria'] . '">' . $row['categoria'] . '</option>';
  				}
  			}
		}

		public function getIdHorasPorSemana($horasSemana) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idHorasSemana
				      FROM HORAS_SEMANA
				      WHERE horasSemana = :horasSemana';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':horasSemana' => $horasSemana
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $idHorasSemana = $row['idHorasSemana'];
  				}
  			}
		}

		public function getIdTipoTrabajo($tipoTrabajo) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
					idTipoTrabajo 
				      FROM TIPO_TRABAJO
				      WHERE tipoTrabajo = :tipoTrabajo';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':tipoTrabajo' => $tipoTrabajo
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $idTipoTrabajo = $row['idTipoTrabajo'];
  				}
  			}
		}

		public function getIdCategorita($categoria) {
			require '../../db/connect.php';
			if ($db) {
				$query = 'SELECT 
						idCategoria
						FROM CATEGORIA
						WHERE categoria =:categoria';
  				$stmnt = $db->prepare($query);
  				$valorId = array(
  					':categoria' => $categoria
  					);
  				$stmnt->execute($valorId);
  				
  				foreach ($stmnt as $row) {
    					echo $idCategoria = $row['idCategoria'];
  				}
  			}
		}

		public function listaEmpleos() {
			require '../../db/connect.php';

			if ($db) {
				$sqlSelect = 'SELECT 
                			e.titulo, 
                			e.descripcion,
                			e.fechaInicio, 
                			e.fechaFin,
                			e.presupuesto,
                			h.horasSemana,
                			t.tipoTrabajo,
                			c.categoria
                			FROM EMPLEO as e
                			INNER JOIN HORAS_SEMANA as h
                			ON e.HORAS_SEMANA_idHorasSemana = h.idHorasSemana
                			INNER JOIN TIPO_TRABAJO as t
                			ON e.TIPO_TRABAJO_idTipoTrabajo = t.idTipoTrabajo
                			INNER JOIN CATEGORIA as c
                			ON e.CATEGORIA_idCategoria = c.idCategoria
                			WHERE EMPRESA_idEmpresa = :idEmpresa';
				$stmnt = $db->prepare($sqlSelect);
				$valorId = array(
					':idEmpresa' => $_SESSION['sess_id']
				);
				$stmnt->execute($valorId);

				foreach ($stmnt as $row) {
					$titulo = $row['titulo'];
					$descripcion = $row['descripcion'];
					$fechaInicio = $row['fechaInicio'];
					$fechaFin = $row['fechaFin'];
					$presupuesto = $row['presupuesto'];
					$horasSemana = $row['horasSemana'];
					$tipoTrabajo = $row['tipoTrabajo'];
					$categoria = $row['categoria'];
					
					echo '<p>';
					echo '<div class="empleo">';
					echo '<a href="../empleo/empleo.php">';
					echo '<label class="titulo">' . $titulo ."</label><br>";
					echo '</a>';
					echo '<label>Descripcion: ' . $descripcion ."</label><br>";
					echo '<label>Fecha Inicio: ' . $fechaInicio ."</label><br>";
					echo '<label>Fecha Fin: ' . $fechaFin ."</label><br>";
					echo '<label>Presupuesto: ' . $presupuesto ."</label><br>";
					echo '<label>Horas por Semana: ' . $horasSemana ."</label><br>";
					echo '<label>Tipo de trabajo: ' . $tipoTrabajo ."</label><br>";

					echo '<label>Categoria: ' . $categoria ."</label><br>";				
                  		echo '</div>';
                  		//echo '</a>';
                  		echo '</p>';
				}
			}
		}
		
		public $horasPorSemana = array('Medio tiempo',  'Segun sea necesario', 'Tiempo completo',);

		public $tipoTrabajo = array('Por hora', 'Precio fijo');

		public function getCategorias1() {
			for ($i=0; $i < count($this->categoria); $i++) { 
                	echo '<option value="' . $this->categoria[$i] . '">'. $this->categoria[$i] . '</option>';
                }
		}

		public function getHorasPorSemana1() {
			for ($i=0; $i < count($this->horasPorSemana); $i++) { 
                	echo '<option value="' . $this->horasPorSemana[$i] . '">'. $this->horasPorSemana[$i] . '</option>';
                }
		}

		public function getTipoTrabajo1() {
			for ($i=0; $i < count($this->tipoTrabajo); $i++) { 
                	echo '<option value="' . $this->tipoTrabajo[$i] . '">'. $this->tipoTrabajo[$i] . '</option>';
                }
		}
		
	}

?>

