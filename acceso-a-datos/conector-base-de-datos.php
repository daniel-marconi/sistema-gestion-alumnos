<?php
	class ConectorBD{
		private $host = "localhost";
		private $dbname = "gestion-alumnos";
		private $user = "root";
		private $pass = "";

		private $registrarNotaSql = "INSERT INTO notas (alumno_id, materia_id, trimestre, nota) VALUES (?,?,?,?)";

		private $conexion;


		private function conectar(){
			$this->conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
		}

		private function desconectar(){
			$this->conexion = null;
		}

		function registrarNota($alumno_id, $materia_id, $trimestre, $nota){
			$this->conectar();

			$this->conexion->prepare($this->registrarNotaSql)->execute([$alumno_id, $materia_id, $trimestre, $nota]);

			$this->desconectar();
		}
	}
?>