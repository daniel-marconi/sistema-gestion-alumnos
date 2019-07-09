<?php 
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$notaId = $_POST['nota-id'];
	$alumnoId = $_POST['alumno-id'];
	$valorNota = $_POST['valor-nota'];


	$conectorBD->actualizarNota($notaId, $valorNota);


	$successMessage = "La nota se ha actualizado correctamente.";
	require_once("./util/success.php");	
 ?>

 <form action="./pre-view.php?view=nota/consultar-3" method="POST">
 	<input type="hidden" name="alumno-id" value="<?php echo $alumnoId ?>">
 	<input type="submit" value="Volver" class="btn btn-primary">
 </form>