let curso = document.getElementById('curso');

const alumnosPorCurso = (cursoId) => {
	$.get( "api/alumnos-por-curso.php",
		{
			curso_id: cursoId
		},
		function( data ) {
		  console.log(data);
		}
	);
}

curso.onchange = () => {
	let cursoId = curso.value;
	console.log(cursoId);
	let alumnos = alumnosPorCurso(cursoId);
}