<?php 
	$defaultErrorMessage = "Ocurrió un error con la página buscada. Intente nuevamente y si el problema persiste póngase en contacto con el administrador del sistema.";
	$errorMessage = isset($errorMessage) ? $errorMessage : $defaultErrorMessage;
 ?>

<div class="alert alert-warning" role="alert">
	<h4 class="alert-heading">Ha ocurrido un error</h4>
	<?php echo $errorMessage ?>
</div>