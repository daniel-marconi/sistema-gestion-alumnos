<?php
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$cursos = $conectorBD->todosLosCursos();

?>

<div class="interfaz" id="registrar-nota">
	<h4>Registrar nota</h4>
	<hr>

	<form action="./pre-view.php?view=nota/registrar-2" method="POST">
		<h5 class="mt-2">Buscar curso</h5>

		<div class="form-row">
			<div class="form-group ">
				<label for="curso">Curso</label>
				<select class="form-control" id="curso" name="curso-id">
					<option disabled>Seleccione un curso</option>
				    <?php
				    	foreach ($cursos as $curso) {
							echo "<option value='". $curso['id'] ."'>". $curso['nombre'] ."</option>";
						}
				    ?>
				</select>
			</div>
		</div>

		<div class="form-group mt-2">
			<button type="reset" class="btn btn-danger">Reiniciar formulario</button>
			<button type="submit" class="btn btn-primary">Siguiente</button>
		</div>
	</form>

</div>