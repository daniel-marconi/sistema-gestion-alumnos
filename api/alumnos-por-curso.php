<?php

	$cursoId = $_GET['curso_id'];
	
	$array = array(
	    "ejemplo"  => array(1,2,3),
	    "ejemplo2" => "asd2",
	    "cursoId" => $cursoId
	    );

	header('Content-type: application/json');
	echo json_encode($array);

?>
