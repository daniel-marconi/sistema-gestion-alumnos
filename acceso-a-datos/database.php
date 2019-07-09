<?php
	class ConectorBD{
		private $host = "localhost";
		private $dbname = "educapp";
		private $user = "root";
		private $pass = "";

		private $todosLosCursosSQL = "SELECT * FROM cursos";
		private $todasLasMateriasSQL = "SELECT * FROM materias";
		private $consultarMateriaPorIdSQL = "SELECT * FROM materias WHERE id=:materiaId";
		private $alumnosPorCursoSQL = "SELECT * FROM alumnos WHERE curso_id=:cursoId";
		private $consultarAlumnoSQL = "SELECT * FROM alumnos WHERE id = :alumnoId LIMIT 1";
		private $registrarNotaSQL= "INSERT INTO notas (alumno_id, materia_id, trimestre, valor) VALUES (:alumnoId, :materiaId, :trimestre, :valor)";
		private $consultarNotaSQL= "SELECT * FROM notas WHERE alumno_id=:alumnoId AND materia_id=:materiaId AND trimestre=:trimestre";
		private $notasPorAlumnoSQL = "SELECT * FROM notas WHERE alumno_id = :alumnoId ORDER BY materia_id, trimestre";
		private $consultarNotaPorIdSQL = "SELECT * FROM notas WHERE id = :notaId";
		private $actualizarNotaSQL = "UPDATE notas SET valor=:valorNota WHERE id=:notaId";

		private function nuevaConexion(){
			$nuevaConexion = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			$nuevaConexion->set_charset("utf8");
			return $nuevaConexion;
		}

		function todosLosCursos(){
			$conn = $this->nuevaConexion();
			$stmt = $conn->prepare($this->todosLosCursosSQL);
			$stmt->execute();
			$cursos = $stmt->get_result();
			return $cursos;
		}

		function todasLasMaterias(){
			$conn = $this->nuevaConexion();
			$stmt = $conn->prepare($this->todasLasMateriasSQL);
			$stmt->execute();
			$materias = $stmt->get_result();
			return $materias;
		}

		function alumnosPorCurso($cursoId){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":cursoId", $cursoId, $this->alumnosPorCursoSQL);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$alumnosPorCurso = $stmt->get_result();
			return $alumnosPorCurso;
		}

		function consultarAlumno($alumnoId){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":alumnoId", $alumnoId, $this->consultarAlumnoSQL);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$alumno = $stmt->get_result();
			return $alumno->fetch_assoc();
		}

		function registrarNota($alumnoId, $materiaId, $trimestre, $valor){
			$affectedRows = 0;
			if(!$this->consultarNota($alumnoId, $materiaId, $trimestre)->num_rows){
				$conn = $this->nuevaConexion();
				$sql = str_replace(":alumnoId", $alumnoId, $this->registrarNotaSQL);
				$sql = str_replace(":materiaId", $materiaId, $sql);
				$sql = str_replace(":trimestre", $trimestre, $sql);
				$sql = str_replace(":valor", $valor, $sql);
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				$affectedRows = $stmt->affected_rows;
			}

			return $affectedRows;
		}

		function consultarNota($alumnoId, $materiaId, $trimestre){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":alumnoId", $alumnoId, $this->consultarNotaSQL);
			$sql = str_replace(":materiaId", $materiaId, $sql);
			$sql = str_replace(":trimestre", $trimestre, $sql);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$nota = $stmt->get_result();
			return $nota;
		}

		function consultarNotaPorId($notaId){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":notaId", $notaId, $this->consultarNotaPorIdSQL);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$nota = $stmt->get_result();
			return $nota->fetch_assoc();
		}

		function notasPorAlumno($alumnoId){
			
			$conn = $this->nuevaConexion();
			$sql = str_replace(":alumnoId", $alumnoId, $this->notasPorAlumnoSQL);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$notas = $stmt->get_result();
			return $notas;
		}


		function actualizarNota($notaId, $valorNota){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":valorNota", $valorNota, $this->actualizarNotaSQL);
			$sql = str_replace(":notaId", $notaId, $sql);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
		}
		

		function consultarMateriaPorId($materiaId){
			$conn = $this->nuevaConexion();
			$sql = str_replace(":materiaId", $materiaId, $this->consultarMateriaPorIdSQL);
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$materia = $stmt->get_result();
			return $materia->fetch_assoc();
		}
		
	}
?>