<?php 
	require_once('../util/header.php');
	require_once('../util/nav.php');
?>

<div class="container">

	<div class="interfaz" id="cargar-nota">
		<h4>Registrar nota</h4>
		<hr>

		<form method="POST" action="../form-actions/registrar-nota.php">
			<h5 class="mt-2">Buscar curso</h5>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="año">Año</label>
					   <select class="form-control" id="año" name="año">
					    	<option disabled>Elija un año</option>
						    <option value="1°">1°</option>
						    <option value="2°">2°</option>
						    <option value="3°">3°</option>
						    <option value="4°">4°</option>
						    <option value="5°">5°</option>
						    <option value="6°">6°</option>				    	
						</select>
					</div>

				    <div class="form-group col-md-6">
				    	<label for="division">División</label>
				    	<select class="form-control" id="division" name="division">
				    		<option disabled>Elija una división</option>
					    	<option value="A">A</option>
					    	<option value="B">B</option>
					    	<option value="C">C</option>		    	
					    </select>
				    </div>
				</div>
					    
				<h5 class="mt-2">Asignar nota</h5>
			
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="alumno">Elija alumno a quien asignarle la nota</label>
				    	<select class="form-control" id="alumno" name="alumno">
				    		<option disabled>Alumno</option>
				    		<option value="1">Castillo David</option>
					    	<option value="2">Chamorro Débora</option>
					    	<option value="3">González Esteban</option>	
					    	<option value="4">Marconi Daniel</option>		    	
					    </select>
				    </div>

				    <div class="form-group col-md-6">
				    	<label for="materia">Elija materia </label>
				    	<select class="form-control" id="materia" name="materia">
				    		<option disabled>Materia</option>
				    		<option value="1">Matemática</option>
					    	<option value="2">Literatura</option>
					    	<option value="3">Inglés</option>	
					    	<option value="4">Física</option>		    	
					    </select>
				    </div>
				</div>

				<div class="form-row">

					<div class="form-group col-md-6">
				    	<label for="trimestre">Trimestre</label>
				    	<select class="form-control" id="trimestre" name="trimestre">
				    		<option disabled>Trimestre</option>
				    		<option value="1">1er trimestre</option>
					    	<option value="2">2do trimestre</option>
					    	<option value="3">3er trimestre</option>
					    </select>
				    </div>


				    <div class="form-group col-md-6">
				    	<label for="nota">Asigne una nota al alumno</label>
				    	<select class="form-control" id="nota" name="nota">
				    		<option disabled>Nota</option>
				    		<option value="1">1</option>
				    		<option value="2">2</option>
				    		<option value="3">3</option>
				    		<option value="4">4</option>
				    		<option value="5">5</option>
				    		<option value="6">6</option>
				    		<option value="7">7</option>
				    		<option value="8">8</option>
				    		<option value="9">9</option>
				    		<option value="10">10</option>  
				    	</select>  	
				    </div>
				</div>

				<div class="form-group mt-2">
					<button type="reset" class="btn btn-danger">Reiniciar formulario</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
					<button class="btn btn-secondary">Cancelar</button>
				</div>
		</form>
	</div>
</div>


<?php 
	require_once('../util/footer.php');
?>
