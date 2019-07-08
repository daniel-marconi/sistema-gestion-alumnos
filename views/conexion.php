<?php
	$conexion=mysqli_connect("localhost","root")or die("No se a podido establecer la conexion");
	$sdb=mysqli_select_db($conexion,"boletin")or die("La base de datos no existe");
?>