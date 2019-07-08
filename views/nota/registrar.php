

<div class="interfaz" id="registrar-nota">
	<h4>Registrar nota</h4>
	<hr>

	<form>
		<h5 class="mt-2">Buscar curso</h5>

			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="curso">Curso</label>
					<select class="form-control" id="curso">
						<option disabled>Seleccione un curso</option>
					    <option value="1">1° A</option>
					    <option value="2">1° B</option>
					</select>
				</div>
			</div>


			<hr>
			
		
			<div class="form-row">
			    <div class="form-group col-md-12">
			    	<label for="alumno">Elija alumno a quien asignarle la nota</label>
			    	<select class="form-control" id="alumno" disabled>
			    		<option disabled selected>Seleccione un alumno</option>
			    		<option>Castillo David</option>
				    	<option>Chamorro Débora</option>
				    	<option>González Esteban</option>	
				    	<option>Marconi Daniel</option>		    	
				    </select>
			    </div>
			</div>

			<div class="form-row">
			    <div class="form-group col-md-12">
			    	<label for="materia">Elija materia </label>
			    	<select class="form-control" id="materia" disabled>
			    		<option disabled selected>Seleccione una materia</option>
			    		<option>Matemática</option>
				    	<option>Literatura</option>
				    	<option>Inglés</option>	
				    	<option>Física</option>		    	
				    </select>
			    </div>
			</div>

			<div class="form-row">
			    <div class="form-group col-md-12">
			    	<label for="materia">Elija trimestre</label>
			    	<select class="form-control" id="trimestre" disabled>
		    			<option disabled selected>Seleccione un trimestre</option>
		    			<option>Primer trimestre</option>
			    		<option>Segundo trimestre</option>
			    		<option>Tercer trimestre</option>
				    </select>
			    </div>
			</div>

			<div class="form-row">
			    <div class="form-group col-md-12">
			    	<label for="nota">Asigne una nota al alumno</label>
			    	<select class="form-control" id="nota" disabled>
			    		<option disabled selected>Ingrese la nota</option>
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

	<script src="./js/notas.js"></script>
</div>