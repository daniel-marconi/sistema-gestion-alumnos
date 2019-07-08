<?php

	$defaultView = 'nota/registrar';
	
?>

<form id="redirect-form" action="view.php" method="POST">
	<input type="hidden" name="view" value=<?php $_GET['view'] ? $_GET['view'] : $defaultView ?> >
</form>

<script>
	 window.onload=function(){
        document.forms['redirect-form'].submit();
    }
</script>