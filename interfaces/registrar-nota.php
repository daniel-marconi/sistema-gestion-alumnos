<?php 
	require_once('../util/header.php');
	require_once('../util/nav.php');
?>

<div class="container">

	<div class="interfaz" id="cargar-nota">
		<h4>Registrar nota</h4>
		<hr>

		<form>
			<h5 class="mt-2">Buscar curso</h5>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="año">Año</label>
						   <select class="form-control" id="año">
						    	<option>Elija un año</option>
							    <option>1°</option>
							    <option>2°</option>
							    <option>3°</option>
							    <option>4°</option>
							    <option>5°</option>
							    <option>6°</option>				    	
							</select>
					</div>
				</div>

					<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label for="division">División</label>
					    	<select class="form-control" id="division">
					    		<option>Elija una división</option>
						    	<option>A</option>
						    	<option>B</option>
						    	<option>C</option>		    	
						    </select>
					    </div>
					</div>
					    <button>Buscar</button>
				</div>
			
				<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label for="alumno">Elija alumno a quien asignarle la nota</label>
					    	<select class="form-control" id="alumno">
					    		<option>Alumno</option>
					    		<option>Castillo David</option>
						    	<option>Chamorro Débora</option>
						    	<option>González Esteban</option>	
						    	<option>Marconi Daniel</option>		    	
						    </select>
					    </div>
					</div>

					<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label for="materia">Elija materia </label>
					    	<select class="form-control" id="materia">
					    		<option>Materia</option>
					    		<option>Matemática</option>
						    	<option>Literatura</option>
						    	<option>Inglés</option>	
						    	<option>Física</option>		    	
						    </select>
					    </div>
					</div>

				<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label for="nota">Asigne una nota al alumno</label>
					    	<select class="form-control" id="nota">
					    		<option>Nota</option>
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
					<button type="submit" class="btn btn-danger">Reiniciar formulario</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
					<button type="submit" class="btn btn-secondary">Cancelar</button>
				</div>
		</form>
	</div>
</div>


<?php 
	require_once('../util/footer.php');
?>
