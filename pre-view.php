<?php
	error_reporting(0);
	
	$defaultView = 'nota/registrar';

	$view = $_GET['view'] ? $_GET['view'] : $defaultView;
	$cursoId = $_POST['curso-id'] ? $_POST['curso-id'] : '';
	$alumnoId = $_POST['alumno-id'] ? $_POST['alumno-id'] : '';
	$materiaId = $_POST['materia-id'] ? $_POST['materia-id'] : '';
	$trimestre = $_POST['trimestre'] ? $_POST['trimestre'] : '';
	$valorNota = $_POST['valor-nota'] ? $_POST['valor-nota'] : '';
	$notaId = $_POST['nota-id'] ? $_POST['nota-id'] : '';
	
?>

<form id="redirect-form" action="view.php" method="POST">
	<input type="hidden" name="view">
	<input type="hidden" name="curso-id">
	<input type="hidden" name="alumno-id">
	<input type="hidden" name="materia-id">
	<input type="hidden" name="trimestre">
	<input type="hidden" name="valor-nota">
	<input type="hidden" name="nota-id">
</form>

<script>
	 window.onload=function(){
	 	document.forms['redirect-form'].getElementsByTagName('input')[0].value = "<?php echo($view) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[1].value = "<?php echo($cursoId) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[2].value = "<?php echo($alumnoId) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[3].value = "<?php echo($materiaId) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[4].value = "<?php echo($trimestre) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[5].value = "<?php echo($valorNota) ?>";
	 	document.forms['redirect-form'].getElementsByTagName('input')[6].value = "<?php echo($notaId) ?>";
        document.forms['redirect-form'].submit();
    }
</script>