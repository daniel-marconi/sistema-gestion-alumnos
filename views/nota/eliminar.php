<?php 

	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$notaId = $_POST['nota-id'];

	$nota = $conectorBD->consultarNotaPorId($notaId);
	$alumno = $conectorBD->consultarAlumno($nota['alumno_id']);
	$materias = $conectorBD->todasLasMaterias();
	$materia = $conectorBD->consultarMateriaPorId($nota['materia_id']);
	
 ?>



<div class="interfaz" id="eliminar-nota">
	<form action="./pre-view.php?view=nota/eliminar-2" method="POST">
		<h4>Eliminar nota</h4>
		<hr>

		<div class="alert alert-danger" role="alert">
			<h4 class="alert-heading">Atención</h4>
			¿Está seguro que desea eliminar la nota del alumno <strong><?php echo $alumno['nombre'] ?></strong> de la materia <strong><?php echo $materia['nombre'] ?></strong> correspondiente al <strong>trimestre <?php echo $nota['trimestre'] ?></strong>?
		</div>

		<input type="hidden" name="nota-id" value="<?php echo $notaId ?>">
		<input type="hidden" name="alumno-id" value="<?php echo $nota['alumno_id'] ?>">

		<div class="form-group mt-2">
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</div>
	</form>

</div>