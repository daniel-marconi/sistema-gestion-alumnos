<?php

	$defaultView = 'nota/registrar';
	$view = $_GET['view'] ? $_GET['view'] : $defaultView;
	
?>

<form id="redirect-form" action="view.php" method="POST">
	<input type="hidden" name="view">
</form>

<script>
	 window.onload=function(){
	 	document.forms['redirect-form'].getElementsByTagName('input')[0].value = "<?php echo($view) ?>";
        document.forms['redirect-form'].submit();
    }
</script>