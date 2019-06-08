<?php 
	require_once('../acceso-a-datos/conector-base-de-datos.php');

	$alumno = $_POST['alumno'];
	$materia = $_POST['materia'];
	$trimestre = $_POST['trimestre'];
	$nota = $_POST['nota'];

	$conectorBD = new conectorBD;

	//falta validar si la nota existe

	$conectorBD->registrarNota($alumno, $materia, $trimestre, $nota);

	header("Location: ../interfaces/consultar-nota.php"); 
?>