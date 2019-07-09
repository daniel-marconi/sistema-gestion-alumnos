<?php 
	$defaultSuccessMessage = "La operación se ha realizado con éxito.";
	$successMessage = isset($successMessage) ? $successMessage : $defaultSuccessMessage;
 ?>

<div class="alert alert-success" role="alert">
	<h4 class="alert-heading">Operación exitosa</h4>
	<?php echo $successMessage ?>
</div>