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

	$(document).on("click", "#editar", function () {
		var User = $(this).data('user');
		console.log(User);
		$("#username").val( User['name'] );
		$("#email").val( User['email'] );

		if(User['is_admin'] == 1){
			console.log("admin == " + 1);
			$("#admin1").prop("checked", true);
		}
		else{
			$("#admin0").prop("checked", true);
		}

		// As pointed out in comments, 
		// it is unnecessary to have to manually call the modal.
		// $('#addBookDialog').modal('show');
   });