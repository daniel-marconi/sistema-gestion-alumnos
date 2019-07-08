<?php
	include 'conexion.php';
	if(isset($_POST['enviar'])){
		$id_alumno=$_POST['alumno'];	
	}
?>

<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Page Title</title>
		<!--<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	</head>
	
	<body>
		<div class="container">
			<div class="row" >
				<div class="col-1"></div>
					<div class="col" style="margin:30px 30px;">
						<div class="row"> 
							<div class="col-6"><h5>Escuela: Instituto Argentino</h5></div>
							<div class="col-6"> 
								<h5>Alumno:
									<?php 	
										$resultado=mysqli_query($conexion,"SELECT * FROM alumno where id_alumno='$id_alumno'");
										while($arreglo=mysqli_fetch_array($resultado)){
											echo"<td>$arreglo[apyn]</td>";
										}
									?>
								</h5>	
							</div>	
						</div>
						
						<div class="row"> 
							<div class="col-6"> 
								<h5>Curso:
									<?php 	
										$resultado0=mysqli_query($conexion,"SELECT * FROM alumno INNER JOIN curso ON alumno.id_alumno='$id_alumno' and alumno.id_curso=curso.id_curso");
										while($arreglo0=mysqli_fetch_array($resultado0)){
											echo"<td>$arreglo0[curso]</td>";
										}
									?>
								</h5>	
							</div>	
							<div class="col-6"><h5>Año: 2019</h5></div>
						</div>
						
					<?php 
					echo"<table class='table table-bordered'>";
						echo "<thead>";
							echo"<tr>";
								echo"<th scope='col' class='materias'>Materias</th>";
								echo"<th scope='col' class='materias'>Matematica</th>";
								echo"<th scope='col' class='materias'>Fisico-Quimica</th>";
								echo"<th scope='col' class='materias'>Geografia</th>";
								echo"<th scope='col' class='materias'>Historia</th>";
								echo"<th scope='col' class='materias'>Lengua</th>";
							echo"</tr>";
						  echo"</thead>";
						  
						  echo"<tbody>";
							echo"<tr>";
								echo"<th scope='row'>1er Trimestre</th>";
									$resultado1=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=1 and materia='Matematica'");
									while($arreglo1=mysqli_fetch_array($resultado1)){
										$m1="$arreglo1[nota]";
										echo"<td>$arreglo1[nota]</td>";
									}
									$resultado2=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=1 and materia='Fisico-Quimica'");
									while($arreglo2=mysqli_fetch_array($resultado2)){
										$f1="$arreglo2[nota]";
										echo"<td>$arreglo2[nota]</td>";
									}
									$resultado3=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=1 and materia='Geografia'");
									while($arreglo3=mysqli_fetch_array($resultado3)){
										$g1="$arreglo3[nota]";
										echo"<td>$arreglo3[nota]</td>";
									}
									$resultado4=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=1 and materia='Historia'");
									while($arreglo4=mysqli_fetch_array($resultado4)){
										$h1="$arreglo4[nota]";
										echo"<td>$arreglo4[nota]</td>";
									}
									$resultado5=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=1 and materia='Lengua'");
									while($arreglo5=mysqli_fetch_array($resultado5)){
										$l1="$arreglo5[nota]";
										echo"<td>$arreglo5[nota]</td>";
									}
							echo"</tr>";
							
							echo"<tr>";
								echo"<th scope='row'>2er Trimestre</th>";
									$resultado6=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=2 and materia='Matematica'");
									while($arreglo6=mysqli_fetch_array($resultado6)){
										$m2="$arreglo6[nota]";
										echo"<td>$arreglo6[nota]</td>";
									}
									$resultado7=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=2 and materia='Fisico-Quimica'");
									while($arreglo7=mysqli_fetch_array($resultado7)){
										$f2="$arreglo7[nota]";
										echo"<td>$arreglo7[nota]</td>";
									}
									$resultado8=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=2 and materia='Geografia'");
									while($arreglo8=mysqli_fetch_array($resultado8)){
										$g2="$arreglo8[nota]";
										echo"<td>$arreglo8[nota]</td>";
									}
									$resultado9=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=2 and materia='Historia'");
									while($arreglo9=mysqli_fetch_array($resultado9)){
										$h2="$arreglo9[nota]";
										echo"<td>$arreglo9[nota]</td>";
									}
									$resultado10=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=2 and materia='Lengua'");
									while($arreglo10=mysqli_fetch_array($resultado10)){
										$l2="$arreglo10[nota]";
										echo"<td>$arreglo10[nota]</td>";
									}
							echo"</tr>";
						
							echo"<tr>";
								echo"<th scope='row'>3er Trimestre</th>";
									$resultado11=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=3 and materia='Matematica'");
									while($arreglo11=mysqli_fetch_array($resultado11)){
										$m3="$arreglo11[nota]";
										echo"<td>$arreglo11[nota]</td>";
									}
									$resultado12=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=3 and materia='Fisico-Quimica'");
									while($arreglo12=mysqli_fetch_array($resultado12)){
										$f3="$arreglo12[nota]";
										echo"<td>$arreglo12[nota]</td>";
									}
									$resultado13=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=3 and materia='Geografia'");
									while($arreglo13=mysqli_fetch_array($resultado13)){
										$g3="$arreglo13[nota]";
										echo"<td>$arreglo13[nota]</td>";
									}
									$resultado14=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=3 and materia='Historia'");
									while($arreglo14=mysqli_fetch_array($resultado14)){
										$h3="$arreglo14[nota]";
										echo"<td>$arreglo14[nota]</td>";
									}
									$resultado15=mysqli_query($conexion,"SELECT * FROM nota where id_alumno='$id_alumno' and trimestre=3 and materia='Lengua'");
									while($arreglo15=mysqli_fetch_array($resultado15)){
										$l3="$arreglo15[nota]";
										echo"<td>$arreglo15[nota]</td>";
									}
							echo"</tr>";
							
							echo"<tr>";
								echo"<th scope='row'>Promedio</th>";
									$p=round(($m1 + $m2 + $m3)/3,1);
									echo"<td>$p</td>";
							
									$p=round(($f1 + $f2 + $f3)/3,1);
									echo"<td>$p</td>";
							
									$p=round(($g1 + $g2 + $g3)/3,1);
									echo"<td>$p</td>";
						
									$p=round(($h1 + $h2 + $h3)/3,1);
									echo"<td>$p</td>";
							
									$p=round(($l1 + $l2 + $l3)/3,1);
									echo"<td>$p</td>";
							echo"</tr>";
								
						  echo"</tbody>";
					echo"</table>";
					?>
					
					<a class="btn btn-primary btn-lg btn-lg" href="home.php" role="button" style="margin-top:10px;">Home</a>
								
					</div>
				<div class="col-1"></div>
			</div>
		</div>
		
		<script  src = "https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>