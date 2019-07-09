<?php
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$cursoId = $_POST['curso-id'];

	$alumnos = $conectorBD->alumnosPorCurso($cursoId);
	$materias = $conectorBD->todasLasMaterias();

?>

<div class="interfaz" id="consultar-boletin">
	<h4>Consultar boletín</h4>
	<hr>

	<form action="./pre-view.php?view=boletin/consultar-3" method="POST">

		<div class="form-row">
		    <div class="form-group ">
		    	<label for="alumno">Elija alumno a quien consultar las notas</label>
		    	<select class="form-control" id="alumno" name="alumno-id">
		    		<option disabled>Seleccione un alumno</option>
		    		<?php
				    	foreach ($alumnos as $alumno) {
							echo "<option value='". $alumno['id'] ."'>". $alumno['nombre'] ."</option>";
						}
				    ?>
			    </select>
		    </div>
		</div>

		<div class="form-group mt-2">
			<button type="reset" class="btn btn-danger">Reiniciar formulario</button>
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</div>
	</form>

</div>
