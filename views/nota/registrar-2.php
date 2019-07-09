<?php
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$cursoId = $_POST['curso-id'];

	$alumnos = $conectorBD->alumnosPorCurso($cursoId);
	$materias = $conectorBD->todasLasMaterias();

?>

<div class="interfaz" id="registrar-nota">
	<h4>Registrar nota</h4>
	<hr>

	<form action="./pre-view.php?view=nota/registrar-3" method="POST">

		<div class="form-row">
		    <div class="form-group col-md-12">
		    	<label for="alumno">Elija alumno a quien asignarle la nota</label>
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

		<div class="form-row">
		    <div class="form-group col-md-12">
		    	<label for="materia">Elija materia </label>
		    	<select class="form-control" id="materia" name="materia-id">
		    		<option disabled>Seleccione una materia</option>
		    		<?php
				    	foreach ($materias as $materia) {
							echo "<option value='". $materia['id'] ."'>". $materia['nombre'] ."</option>";
						}
				    ?>
			    </select>
		    </div>
		</div>

		<div class="form-row">
		    <div class="form-group col-md-12">
		    	<label for="materia">Elija trimestre</label>
		    	<select class="form-control" id="trimestre" name="trimestre">
					<option disabled>Seleccione un trimestre</option>
					<option value="1">Primer trimestre</option>
		    		<option value="2">Segundo trimestre</option>
		    		<option value="3">Tercer trimestre</option>
			    </select>
		    </div>
		</div>

		<div class="form-row">
		    <div class="form-group col-md-12">
		    	<label for="nota">Asigne una nota al alumno</label>
		    	<select class="form-control" id="nota" name="valor-nota">
		    		<option disabled>Ingrese la nota</option>
		    		<option>1</option>
		    		<option>2</option>
		    		<option>3</option>
		    		<option>4</option>
		    		<option>5</option>
		    		<option>6</option>
		    		<option>7</option>
		    		<option>8</option>
		    		<option>9</option>
		    		<option>10</option>  
		    	</select>  	
		    </div>
		</div>
		

		<div class="form-group mt-2">
			<button type="reset" class="btn btn-danger">Reiniciar formulario</button>
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</div>
	</form>

</div>


<hr>
			
		
