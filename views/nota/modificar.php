<?php 

	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$notaId = $_POST['nota-id'];

	$nota = $conectorBD->consultarNotaPorId($notaId);
	$alumno = $conectorBD->consultarAlumno($nota['alumno_id']);
	$materias = $conectorBD->todasLasMaterias();
	$materia = $conectorBD->consultarMateriaPorId($nota['materia_id']);
	
 ?>



 <div class="interfaz" id="modificar-nota">
	<h4>Modificar nota</h4>
	<hr>
	Alumno: <?php echo $alumno['nombre'] ?>
	<br>
	Materia: <?php echo $materia['nombre'] ?>
	<br>
	Trimestre: <?php echo $nota['trimestre'] ?>

	<form action="./pre-view.php?view=nota/modificar-2" method="POST">

		<input type="hidden" name="nota-id" value="<?php echo $nota['id'] ?>">
		<input type="hidden" name="alumno-id" value="<?php echo $nota['alumno_id'] ?>">

		<div class="form-row">
		    <div class="form-group col-md-12">
		    	<label for="nota">Asigne una nota al alumno</label>
		    	<select class="form-control" id="nota" name="valor-nota">
		    		<option disabled>Ingrese la nota</option>
		    		<?php 
		    			for($i = 1; $i <= 10; $i++){
			    			echo "<option ";
			    			if($nota['valor'] == $i) echo "selected";
			    			echo ">$i</option>";
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