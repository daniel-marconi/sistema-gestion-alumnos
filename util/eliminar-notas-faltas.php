<?php 
	require_once('../acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$conectorBD->eliminarTodasLasNotas();

	$conectorBD->eliminarTodasLasInasistencias();

	echo "Todas las notas e inasistencias eliminadas";
?>