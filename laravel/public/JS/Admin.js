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

$(document).ready(function() {
	$("#formulario").validate({
		rules: {
			username : {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlenght: 8
			},
			password_confirmation: {
				required: true,
				equalTo: "#password"
			}
		},
			messages : {
				username: {
					required: "Por favor inserte un nombre de usuario."
				},
				email: {
					required: "Por favor inserte un correo electronico.",
					email: "Por favor inserte un correo valido."
				},
				password: {
					required: "Por favor inserte una contraseña."
				},
				password_confirmation: {
					required: "Por favor inserte una contraseña.",
					equalTo: "Las contraseñas tienen que coincidir."
				}
			},
				errorPlacement: function(label, element) {
				label.addClass('errorMsq');
                element.parent().append(label).css("color","red")
				$(element).css("border-color","red");
			}
		});
	});