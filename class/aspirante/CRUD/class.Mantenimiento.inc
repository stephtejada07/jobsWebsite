<?php 

/**
* 
*/
class Mantenimiento {

	// Properties:
	private $sqlInsert;
	private $sqlSelect;
	private $sqlUpdate;
	private $sqlDelete;
	private $valores;
	private $array;

	public function setInsert() {
		$this->sqlInsert = 'INSERT INTO ASPIRANTE(
            primerNombre, 
            segundoNombre, 
            primerApellido,
            segundoApellido,
            correo,
            usuario,
            contrasena,
            nacimiento,
            documento,
            ESTADO_CIVIL_idEstadoCivil,
            GENERO_idGenero
            ) 
    VALUES( 
            :primerNombre, 
            :segundoNombre, 
            :primerApellido,
            :segundoApellido,
            :correo,
            :usuario,
            :contra,
            "-",
            "-",
            1,
            1)';
   	}

   	public function getInsert() {
   		return $this->sqlInsert;
   	}

   	public function setSelect() {
   		$this->sqlSelect = 'SELECT
        	primerNombre,
        	segundoNombre,
        	primerApellido,
        	segundoApellido,
        	correo,
        	usuario,
        	contrasena
        	FROM ASPIRANTE 
        	WHERE idAspirante = :id';
   	}

   	public function getSelect() {
   		return $this->sqlSelect;
   	}

   	public function setUpdate() {
   		$this->sqlUpdate = 'UPDATE ASPIRANTE SET 
   			primerNombre = :primerNombre, 
            	segundoNombre = :segundoNombre, 
            	primerApellido = :primerApellido,
            	segundoApellido = :segundoApellido,
            	correo = :correo,
            	usuario = :usuario,
            	contrasena = :contra
            	WHERE 
            	idAspirante = :id';
   	}

   	public function getUpdate() {
   		return $this->sqlUpdate;
   	}

   	public function setDelete() {
   		$this->sqlDelete;
   	}

   	public function getDelete() {
   		return $this->sqlDelete;
   	}

   	public function setValores($primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $correo, $usuario, $contra) {
   		$this->valores = array(
   			":primerNombre"=>$primerNombre,
   			":segundoNombre"=>$segundoNombre,
   			":primerApellido" => $primerApellido,
   			":segundoApellido" => $segundoApellido,
   			":correo" => $correo,
   			":usuario" => $usuario,
   			":contra" => $contra
   			//":id" => $id != '' ? $id : 'hola'
   			);
   	}

   	public function getValores() {
   		return $this->valores;
   	}

   	public function setArray($primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $correo, $usuario, $contra, $id) {
   		if ($id == '') {
   			$this->array = "
   			':primerNombre'=>$primerNombre,
   			':segundoNombre'=>$segundoNombre,
   			':primerApellido' => $primerApellido,
   			':segundoApellido' => $segundoApellido,
   			':correo' => $correo,
   			':usuario' => $usuario,
   			':contra' => $contra";
   		} else {
   			$this->array = "
   			':primerNombre'=>$primerNombre,
   			':segundoNombre'=>$segundoNombre,
   			':primerApellido' => $primerApellido,
   			':segundoApellido' => $segundoApellido,
   			':correo' => $correo,
   			':usuario' => $usuario,
   			':contra' => $contra,
   			':id' => $id";
   		}
   		
   	}

   	public function getArray() {
   		return $this->array;
   	}

   	public function __toString() {
		return "hello, i'm in the class";
	}
}

?>