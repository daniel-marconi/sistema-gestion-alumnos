<?php 
	require_once('./acceso-a-datos/database.php');
	$conectorBD = new ConectorBD;

	$alumnoId = $_POST['alumno-id'];

	$alumno = $conectorBD->consultarAlumno($alumnoId);
	$materias = $conectorBD->todasLasMaterias();
 ?>

<div class="interfaz" id="consultar-nota">
	<h4>Consultar nota</h4>
	<hr>

	
	<form id="consultar-notas" method="POST">
		<h5 class="mt-4">Datos personales</h5>
		<p><?php echo $alumno['nombre'] ?></p>

		
		<h5 class="mt-4">Notas del alumno</h5>
		<table class="table table-striped">
			<tr>
				<th>Materia</th>
				<th>Nota 1° trimestre</th>
				<th>Nota 2° trimestre</th>
				<th>Nota 3° trimestre</th>
			</tr>


			<?php 
				foreach ($materias as $materia) {
					$idMateria = $materia['id'];
					$nombreMateria = $materia['nombre'];

					$notaTrimestre1 = $conectorBD->consultarNota($alumnoId, $idMateria, 1)->fetch_assoc();
					$notaTrimestre2 = $conectorBD->consultarNota($alumnoId, $idMateria, 2)->fetch_assoc();
					$notaTrimestre3 = $conectorBD->consultarNota($alumnoId, $idMateria, 3)->fetch_assoc();

					$valorNotaTrimestre1 = $notaTrimestre1['valor'];
					$idNotaTrimestre1 = $notaTrimestre1['id'];

					$valorNotaTrimestre2 = $notaTrimestre2['valor'];
					$idNotaTrimestre2 = $notaTrimestre2['id'];

					$valorNotaTrimestre3 = $notaTrimestre3['valor'];
					$idNotaTrimestre3 = $notaTrimestre3['id'];

					$mostrarBotonesNota1 = false;
					$mostrarBotonesNota2 = false;
					$mostrarBotonesNota3 = false;


					(strlen($valorNotaTrimestre1) == 0) ? $notaTrimestre1 = '-' : $mostrarBotonesNota1 = true;
					(strlen($valorNotaTrimestre2) == 0) ? $notaTrimestre2 = '-' : $mostrarBotonesNota2 = true;
					(strlen($valorNotaTrimestre3) == 0) ? $notaTrimestre3 = '-' : $mostrarBotonesNota3 = true;

					echo "<tr>";

					echo "<td>" . $nombreMateria . "</td>";

					echo "<td>";
					echo $valorNotaTrimestre1;
					if($mostrarBotonesNota1) echo '<button data-nota-id="' . $idNotaTrimestre1 . '" type="button" class="btn btn-primary btn-xs btn-custom js-modificar-nota"><span class="glyphicon glyphicon-pencil"></span></button>';
					if($mostrarBotonesNota1) echo '<button data-nota-id="' . $idNotaTrimestre1 . '" type="button" class="btn btn-danger btn-xs btn-custom js-eliminar-nota"><span class="glyphicon glyphicon-trash"></span></button>';
					echo "</td>";

					echo "<td>";
					echo $valorNotaTrimestre2;
					if($mostrarBotonesNota2) echo '<button data-nota-id="' . $idNotaTrimestre2 . '" type="button" class="btn btn-primary btn-xs btn-custom js-modificar-nota"><span class="glyphicon glyphicon-pencil"></span></button>';
					if($mostrarBotonesNota2) echo '<button data-nota-id="' . $idNotaTrimestre2 . '" type="button" class="btn btn-danger btn-xs btn-custom js-eliminar-nota"><span class="glyphicon glyphicon-trash"></span></button>';
					echo "</td>";

					echo "<td>";
					echo $valorNotaTrimestre3;
					if($mostrarBotonesNota3) echo '<button data-nota-id="' . $idNotaTrimestre3 . '" type="button" class="btn btn-primary btn-xs btn-custom js-modificar-nota"><span class="glyphicon glyphicon-pencil"></span></button>';
					if($mostrarBotonesNota3) echo '<button data-nota-id="' . $idNotaTrimestre3 . '" type="button" class="btn btn-danger btn-xs btn-custom js-eliminar-nota"><span class="glyphicon glyphicon-trash"></span></button>';
					echo "</td>";

					echo "</tr>";
				}
			 ?>
			
		</table>

		<input type="hidden" name="nota-id" id="nota-id">

		
	</form>
	<script src="./js/notas.js"></script>
</div>
