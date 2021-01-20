(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});

})(jQuery);

//* Errores en Agregar Usuarios
$(document).ready(function() {
	$("#app").validate({
		rules: {
			Izena : {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 8
			},
			password_confirmation: {
				required: true,
				minlength: 8
			}
			
		},
			messages : {
				Izena: {
					required: "El nombre de Usuario es obligatorio.",
				},
				Mail: {
					required: "El correo es obligatorio.",
					email: "El correo tiene que tener el formato adecuado"
				},
				password: {
					required: "La contraseña es obligatoria.",
					minlength: "La contraseña tiene que tener minimo 8 caracteres"
				},
				password_confirmation: {
					required: "La confirmacion de la contraseña es obligatoria.",
					minlength: "La contraseña tiene que tener minimo 8 caracteres"
				}
			},
				errorPlacement: function(label, element) {
				label.addClass('errorMsq');
				element.parent().append(label)
			},
		});
	});
