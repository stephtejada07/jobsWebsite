<?php 

class Estudios {
		
		public $tituloB = array('Bachiller General', 'Bachiller Técnico');

		public $tituloS = array('Licenciado', 'Ingeniero', 'Profesorado', 'Técnico');

		public $idioma = array('Aleman (Deutsch) - DE', 'Coreano (한국어) - KO', 'Español (Español) - ES', 'Francés (Français) - FR', 'Inglés (English) - EN', 'Italiano (Italiano) - IT', 'Japonés (日本語) - JA', 'Portugués (Português) - PT', 'Ruso (Русский) - RU');


		public $carreras = array('Arquitectura', 'Ciencias de la Computación', 'Civil', 'Comunicación Social', 'Contaduría', 'Diseño', 'Economía', 'Electrónica', 'Filosofía', 'Mecánica', 'Mercado', 'Química', 'Teología');
				
		public function tituloBasico() {
			for ($i=0; $i < count($this->tituloB); $i++) { 
                	echo '<option value="' . $this->tituloB[$i] . '">'. $this->tituloB[$i] . '</option>';
                }
		}

		public function tituloSuperior() {
			for ($i=0; $i < count($this->tituloS); $i++) { 
                	echo '<option value="' . $this->tituloS[$i] . '">'. $this->tituloS[$i] . '</option>';
                }
		}

		public function idiomas() {
			for ($i=0; $i < count($this->idioma); $i++) { 
                	echo '<option value="' . $this->idioma[$i] . '">'. $this->idioma[$i] . '</option>';
                }
		}

		public function carreras() {
			for ($i=0; $i < count($this->carreras); $i++) { 
                	echo '<option value="' . $this->carreras[$i] . '">'. $this->carreras[$i] . '</option>';
                }
		}
		
	}

 ?>

