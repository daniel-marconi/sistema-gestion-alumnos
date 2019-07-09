<?php
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$alumnoId = $_POST['alumno-id'];
	$materiaId = $_POST['materia-id'];
	$trimestre = $_POST['trimestre'];
	$valorNota = $_POST['valor-nota'];

	$affectedRows = $conectorBD->registrarNota($alumnoId, $materiaId, $trimestre, $valorNota);

	if($affectedRows){
		$successMessage = "La nota se ha cargado correctamente.";
		require_once("./util/success.php");
	} else {
		$errorMessage = "El sistema tiene una nota previamente registrada para el alumno indicado en la materia y el trimestre ingresados.";
		require_once("./util/error.php");
	}
?>