var consultarNotasForm = document.forms['consultar-notas'];

$('.js-modificar-nota').click(function(event) {
	var notaId = event.currentTarget.dataset.notaId;
	consultarNotasForm.action = './pre-view.php?view=nota/modificar';
	document.getElementById('nota-id').value=notaId;
	consultarNotasForm.submit();
});

$('.js-eliminar-nota').click(function(event) {
	var notaId = event.currentTarget.dataset.notaId;
	consultarNotasForm.action = './pre-view.php?view=nota/eliminar';
	document.getElementById('nota-id').value=notaId;
	consultarNotasForm.submit();
});