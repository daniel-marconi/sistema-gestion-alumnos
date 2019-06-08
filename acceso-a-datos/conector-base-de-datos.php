<?php
	class ConectorBD{
		private $host = "localhost";
		private $dbname = "gestion-alumnos";
		private $user = "root";
		private $pass = "";

		private $registrarNotaSql = "INSERT INTO notas (alumno_id, materia_id, trimestre, nota) VALUES (?,?,?,?)";

		private $existeNotaAlumnoMateriaTrimestreSql = "SELECT * FROM notas WHERE alumno_id = :alumnoId AND materia_id = :materiaId AND trimestre = :trimestre";

		private $conexion;


		private function conectar(){
			$this->conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
		}

		private function desconectar(){
			$this->conexion = null;
		}

		//Verifica que no exista la nota que se quiere registrar y la registra
		function registrarNota($alumno_id, $materia_id, $trimestre, $nota){
			if( $this->existeNotaPorAlumnoMateriaTrimestre($alumno_id, $materia_id, $trimestre) ){
				header("Location: ../util/mensaje.php?tipo=error&texto=Ya existe la nota que se quiso cargar&destino=registrar-nota.php"); 
			} else {
				$this->conectar();

				$stmt = $this->conexion->prepare($this->registrarNotaSql);
				$stmt->execute([$alumno_id, $materia_id, $trimestre, $nota]);

				$this->desconectar();

				header("Location: ../util/mensaje.php?tipo=exito&texto=Nota registrada correctamente&destino=registrar-nota.php"); 
			}
		}

		//Devuelve true si existe una nota para una determinada materia, de un alumno en un cuatrimestre especifico, de lo contrario devuelve false
		function existeNotaPorAlumnoMateriaTrimestre($alumno_id, $materia_id, $trimestre){
			$this->conectar();

			$stmt = $this->conexion->prepare($this->existeNotaAlumnoMateriaTrimestreSql);

			$stmt->execute([':alumnoId' => $alumno_id, ':materiaId' => $materia_id, ':trimestre' => $trimestre]);

			$existeNota = $stmt->fetch(PDO::FETCH_ASSOC);

			$this->desconectar();

			return $existeNota;
		}
	}
?>