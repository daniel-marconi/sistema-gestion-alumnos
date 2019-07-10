<?php 
	$cantidadDeAlumnos = 8;
	$cantidadDeMaterias = 8;
	$cantidadDeTrimestres = 3;
	$notaMinima = 4;
	$notaMaxima = 10;

	require_once('../acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	for($alumno = 1; $alumno <= $cantidadDeAlumnos; $alumno++){
		for($materia = 1; $materia <= $cantidadDeMaterias; $materia++){
			for($trimestre = 1; $trimestre <= $cantidadDeTrimestres; $trimestre++){
				$notaRandom = mt_rand($notaMinima, $notaMaxima);

				$conectorBD->registrarNota($alumno, $materia, $trimestre, $notaRandom);

			}
		}
	}



	$faltasMinimas = 3;
	$faltasMaximas = 6;

	for($alumno = 1; $alumno <= $cantidadDeAlumnos; $alumno++){
		
		$faltasTrimestre1 = mt_rand($faltasMinimas, $faltasMaximas);
		$faltasTrimestre2 = mt_rand($faltasMinimas, $faltasMaximas);
		$faltasTrimestre3 = mt_rand($faltasMinimas, $faltasMaximas);

		$conectorBD->registrarInasistencias($alumno, $faltasTrimestre1, $faltasTrimestre2, $faltasTrimestre3);

	}




	echo "Se cargaron todas las notas y faltas";

 ?>