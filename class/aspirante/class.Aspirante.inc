 <?php 
	
	/**
	* 
	*/
	class Aspirante 
	{

		private $id;
		private $primerNombre;
		private $segundoNombre;
		private $primerApellido;
		private $segundoApellido;
		private $correo;
		private $usuario;
		private $contra;
		private $nacimiento;
		private $documento;
		private $genero;
		private $estadoCivil;
		private $idioma;
		private $nivelIdioma;

		
		public function setPrimerNombre($primerNombre) {
			$this->primerNombre = $primerNombre;
		}

		public function getPrimerNombre() {
			return $this->primerNombre;
		}

		public function setSegundoNombre($segundoNombre){
			$this->segundoNombre = $segundoNombre;
		}

		public function getSegundoNombre() {
			return $this->segundoNombre;
		}

		public function getNombreCompleto(){
			return $this->getPrimerNombre() . ' ' . $this->getSegundoNombre();
		}

		public function setPrimerApellido($primerApellido) {
			$this->primerApellido = $primerApellido;
		}

		public function getPrimerApellido() {
			return $this->primerApellido;
		}

		public function setSegundoApellido($segundoApellido) {
			$this->segundoApellido = $segundoApellido;
		}

		public function getSegundoApellido() {
			return $this->segundoApellido;
		}

		public function getApellidoCompleto() {
			return $this->getPrimerApellido() . ' ' . $this->getSegundoApellido();
		}

		public function setCorreo($correo)
		{
			$this->correo = $correo;
		}

		public function getCorreo() {
			return $this->correo;
		}

		public function setUsuario($usuario)
		{
			$this->usuario = $usuario;
		}

		public function getUsuario() {
			return $this->usuario;
		}

		public function setContra($contra)
		{
			$this->contra = $contra;
		}

		public function getContra() {
			return $this->contra;
		}

		public function setNacimiento($nacimiento)
		{
			$this->nacimiento = $nacimiento;
		}

		public function getNacimiento() {
			return $this->nacimiento;
		}

		public function setDocumento($documento)
		{
			$this->documento = $documento;
		}

		public function getDocumento() {
			return $this->documento;
		}

		public function setGenero($genero)
		{
			$this->genero = $genero;
		}

		public function getGenero() {
			return $this->genero;
		}

		public function setEstadoCivil($estadoCivil) {
			$this->estadoCivil = $estadoCivil;
		}
		public function getEstadoCivil() {
			return $this->estadoCivil;
		}

		public function setIdioma($idioma) {
			$this->idioma = $idioma;
		}
		public function getIdioma() {
			return $this->idioma;
		}

		public function setNivelIdioma($nivelIdioma) {
			$this->nivelIdioma = $nivelIdioma;
		}
		public function getNivelIdioma() {
			return $this->nivelIdioma;
		}

		



		function __toString() {
			return 'Hola desde la clase aspirante';
		}


	}


?>