<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Page Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	</head>
	
	<body>
		<div class="container">
			<div class="row" >
				<div class="col"></div>
					<div class="col-8" style="margin:30px 30px;">
					
						<form class="form-horizontal" action="consultaralumno.php" method="post" id="contacto" enctype="multipart/form-data" >
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="">Seleccione Curso:</label>
									<select class="custom-select" name="curso">
									<?php
										include 'conexion.php';
										
										$resultado=mysqli_query($conexion,"SELECT * FROM curso");
										while($arreglo=mysqli_fetch_array($resultado)){
											echo"<option value=$arreglo[id_curso]>$arreglo[curso]</option>";
										}
									?>                        
 									</select>
								</div>
							</div>
								
							<div class="form-group">
								<button type="submit" name="enviar" class="btn btn-primary btn-lg">Confirmar</button>
								<a class="btn btn-primary btn-lg btn-lg" href="home.php" role="button">Home</a>
							</div>
						</form>
				
					</div>
				<div class="col"></div>
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
