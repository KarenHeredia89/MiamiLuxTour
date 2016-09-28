// Codigo de Validacion de Formulario

function validar(idForma)
{
	var error = false;
	var camposRequeridos = '#'+idForma + ' [data-required="true"]';
	
 	$(camposRequeridos).each(function(index, element) {
		if($(this).val() == '')
		{
			var selectorCampo = '#' + idForma + ' [name="' + $(this).attr('name') + '"]';
			console.log($(this).attr('name') + ' vacÃ­o');
			$(selectorCampo).attr('placeholder', $(this).attr('name') + ' requerido').addClass('campo-requerido');
			error = true;
		}
    }); // Cierra $(camposRequeridos).each
	
	var correo = '#'+idForma + ' [data-mail="true"]';
	
	$(correo).each(function(index, element) {
        var selectorCorreo = '#' + idForma + ' [name="' + $(this).attr('name') + '"]';
		
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		
		if($(this).val() !== '')
		{
			if(!pattern.test($(this).val()))
			{
				$(selectorCorreo).attr('placeholder','Correo invÃ¡lido').addClass('campo-requerido');
				$(selectorCorreo).val('');
				console.log($(this).attr('name') + ' incorrecto');
				error = true;
			} // if(!pattern.test($(this).val()))
		} // Cierra if($(this).val() !== '')
    }); // Cierra $(correo).each
	
	return error;
}

//CONTACTO
$('#enviar').click(function(e) {
    if(validar('form'))
	{ e.preventDefault(); }
	// else { return; }
	else {
		e.preventDefault();
		var nombre	= $('#form [name="nombre"]').val();
		var correo = $('#form [name="correo"]').val();
		var mensaje = $('#form [name="mensaje"]').val();
		
		$.post( "http://localhost/allegro/enviar-contacto",
				{ nombre: nombre, correo: correo, mensaje: mensaje, enviarContacto: 'true' },
				function( data ) {
					$('#form').html(data);
				},
				"html"
		);
	}
	
});
