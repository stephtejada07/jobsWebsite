<?php 

/**
* 
*/
class Direccion //extends AnotherClass
{
	private $direccion1;
	private $direccion2;
	private $ciudad;
	private $departamento;
	private $pais;
	private $codigoPostal;

	public function setDireccion1($direccion1) {
		$this->direccion1 = $direccion1;
	}

	public function getDireccion1() {
		return $this->direccion1;
	}

	public function setDireccion2($direccion2) {
		$this->direccion2 = $direccion2;
	}

	public function getDireccion2() {
		return $this->direccion2;
	}

	public function setCiudad($ciudad) {
		$this->ciudad = $ciudad;
	}

	public function getCiudad() {
		return $this->ciudad;
	}

	public function setDepartamento($departamento) {
		$this->departamento = $departamento;
	}

	public function getDepartamento() {
		return $this->departamento;
	}

	public function setPais($pais) {
		$this->pais = $pais;
	}

	public function getPais() {
		return $this->pais;
	}

	public function setCodigoPostal($codigoPostal) {
		$this->codigoPostal = $codigoPostal;
	}

	public function getCodigoPostal() {
		return $this->codigoPostal;
	}

	
	
}

?>