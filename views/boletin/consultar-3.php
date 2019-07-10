<?php 
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$alumnoId = $_POST['alumno-id'];

	$alumno = $conectorBD->consultarAlumno($alumnoId);
	$materias = $conectorBD->todasLasMaterias();
	$curso = $conectorBD->consultarCurso($alumno['curso_id']);
	$inasistencias = $conectorBD->consultarInasistencias($alumnoId);

	$nombreArray = explode(", ", $alumno['nombre']);
 ?>

<div class="interfaz" id="cargar-alumno">
	<h4>Boletín</h4>
	<hr>

	<form>
		<h5 class="mt-4">Datos Institución</h5>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="año">Nombre</label>
				<input type="text" class="form-control" id="nombreInstitucion" placeholder="EEB N°112" readonly>
			</div>
			<div class="form-group col-md-4">
				<label for="año">Año lectivo</label>
				<input type="text" class="form-control" id="año" placeholder="2019" readonly>
			</div>
			<div class="form-group col-md-4">
				<label for="curso">Curso</label>
				<input type="text" class="form-control" id="curso" placeholder="<?php echo $curso['nombre'] ?>" readonly>
			</div>
		</div>

		<h5 class="mt-4">Datos personales</h5>

		<div class="form-row">
		    <div class="form-group col-md-6">
		    	<label for="tipo-documento">Tipo de documento</label>
		    	<input type="text" min="1" class="form-control" id="tipo-documento" placeholder="<?php echo $alumno['tipo_documento'] ?>" readonly>
		    </div>
		    <div class="form-group col-md-6">
		    	<label for="numero-documento">Número de documento</label>
		    	<input type="number" min="1" class="form-control" id="numero-documento" placeholder="<?php echo $alumno['numero_documento'] ?>" readonly>
		  	</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="apellidos">Apellidos</label>
				<input type="text" class="form-control" id="apellidos" placeholder="<?php echo $nombreArray[0] ?>" readonly>
			</div>		
			<div class="form-group col-md-6">
				<label for="nombres">Nombres</label>
				<input type="text" class="form-control" id="nombres" placeholder="<?php echo $nombreArray[1] ?>" readonly>
			</div>
		</div>
		
		<div class="form-row">
		    <div class="form-group col-md-6">
		    	<label for="provincia">Provincia</label>
		    	<input type="text" class="form-control" id="provincia" placeholder="Pcia. Buenos Aires" readonly>
		    </div>
		    <div class="form-group col-md-6">
		    	<label for="localidad">Localidad</label>
		    	<input type="text" class="form-control" id="localidad" placeholder="San Justo" readonly>
		  	</div>
		</div>

		<form id="consultar-notas" method="POST">
		
		<h5 class="mt-4">Notas del alumno</h5>
		<table class="table table-striped">
			<tr>
				<th>Asignatura</th>
				<th>Nota 1° trimestre</th>
				<th>Nota 2° trimestre</th>
				<th>Nota 3° trimestre</th>
				<th>Promedio anual</th>
				<th>Diciembre</th>
				<th>Febrero</th>
			</tr>


			<?php 
				foreach ($materias as $materia) {
					$idMateria = $materia['id'];
					$nombreMateria = $materia['nombre'];

					$notaTrimestre1 = $conectorBD->consultarNota($alumnoId, $idMateria, 1)->fetch_assoc();
					$notaTrimestre2 = $conectorBD->consultarNota($alumnoId, $idMateria, 2)->fetch_assoc();
					$notaTrimestre3 = $conectorBD->consultarNota($alumnoId, $idMateria, 3)->fetch_assoc();

					$valorNotaTrimestre1 = $notaTrimestre1['valor'];
					$valorNotaTrimestre2 = $notaTrimestre2['valor'];
					$valorNotaTrimestre3 = $notaTrimestre3['valor'];

					if(strlen($valorNotaTrimestre1) == 0) $notaTrimestre1 = ' ';
					if(strlen($valorNotaTrimestre2) == 0) $notaTrimestre2 = ' ';
					if(strlen($valorNotaTrimestre3) == 0) $notaTrimestre3 = ' ';

					if($notaTrimestre1 != ' ' && $notaTrimestre2 != ' ' && $notaTrimestre3 != ' '){
						$promedio = round(($valorNotaTrimestre1 + $valorNotaTrimestre2 + $valorNotaTrimestre3) / 3, 2);
					} else {
						$promedio = ' ';
					}

					echo "<tr>";

					echo "<td>" . $nombreMateria . "</td>";
					echo "<td>$valorNotaTrimestre1</td>";
					echo "<td>$valorNotaTrimestre2</td>";
					echo "<td>$valorNotaTrimestre3</td>";
					echo "<td>$promedio</td>";
					echo "<td></td>";
					echo "<td></td>";

					echo "</tr>";
				}
			 ?>

			 <?php 
			 	$inasistenciasPrimerTrimestre = $inasistencias['primer_trimestre'];
			 	$inasistenciasSegundoTrimestre = $inasistencias['segundo_trimestre'];
			 	$inasistenciasTercerTrimestre = $inasistencias['tercer_trimestre'];

			 	if($inasistenciasPrimerTrimestre && $inasistenciasSegundoTrimestre && $inasistenciasTercerTrimestre){
			 		$inasistenciasTotales = $inasistenciasPrimerTrimestre + $inasistenciasSegundoTrimestre + $inasistenciasTercerTrimestre;
			 	} else {
			 		$inasistenciasTotales = ' ';
			 	}

			  ?>

			 <tr class="table-primary">
				<th scope="row">Inasistencias</th>
				<td><?php echo $inasistenciasPrimerTrimestre ?></td>
				<td><?php echo $inasistenciasSegundoTrimestre ?></td>
				<td><?php echo $inasistenciasTercerTrimestre ?></td>
				<th scope="row">Total Inasistencias</th>
				<td><?php echo $inasistenciasTotales ?></td>
				<td></td>
			 </tr>
			
		</table>

		
		<div class="form-group">
				<label for="nombres">Observaciones</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> 1° Trimestre:</textarea>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> 2° Trimestre:</textarea>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> 3° Trimestre:</textarea>
			</div>


		
		<div class="form-row">
		    <div class="form-group col-md-6">
		    	<label for="firma-docente">Firma docente</label>
		    	<input type="text" class="form-control" id="firma-responsable">
		    </div>
		    <div class="form-group col-md-6">
		    	<label for="firma-responsable">Firma de padre/madre o tutor</label>
		    	<input type="text" class="form-control" id="firma-responsable">
		  	</div>
		</div>

		<div class="form-group mt-4">
			<button type="submit" class="btn btn-danger">Imprimir</button>
			<button type="submit" class="btn btn-primary">Volver</button>
		</div>
	</form>
</div>