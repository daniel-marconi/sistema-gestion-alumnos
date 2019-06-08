<?php 

	if (empty($_GET['tipo']) || empty($_GET['texto']) || empty($_GET['destino']) || $_GET['tipo'] != 'error' && $_GET['tipo'] != 'exito' ) {
	  header("Location: ../index.php");
	}
	
	$tiposMensaje = array(
	    'error'  => 'alert-danger',
	    'exito' => 'alert-success'
    );

	$tipoMensaje = $tiposMensaje[$_GET['tipo']];
	$textoMensaje = $_GET['texto'];
	$vistaDestino = $_GET['destino'];

	require_once('../util/header.php');
	require_once('../util/nav.php');
?>

	<div class="container contenedor-mensaje">
		<div class="alert <?php echo $tipoMensaje ?>" role="alert">
			<?php echo $textoMensaje ?>
		</div>

		<a class="btn btn-primary btn-rounded btn-block mt-4" href="../interfaces/<?php echo $vistaDestino ?>">Continuar</a>
	</div>




<?php 
	require_once('../util/footer.php');
?>