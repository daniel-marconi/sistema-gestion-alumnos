<?php 
	require_once('../acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$conectorBD->eliminarTodasLasNotas();

	echo "Todas las notas eliminadas";
?>