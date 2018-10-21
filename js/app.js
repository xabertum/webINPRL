$(document).ready(function () {

	$("#formulario_nuevo_parte").bind("submit", function () {

		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function (response) {

				if (response.estado == "true") {
					$("body").overhang({
						type: "success",
						message: "Parte dado de alta correctamente",
						closeConfirm: true,
						callback: function () {
							window.location.href = "nuevo_parte.html";
						}
					});
				} else {

					$("body").overhang({
						type: "error",
						message: "Algo ha ido mal, vuelve a intentarlo"
					});
				}
			},
			error: function () {
				$("body").overhang({
					type: "error",
					message: "Hay campos vacios, revisa el formulario"
				});
			}
		});

		return false;

	});

	$("#buscar_parte").bind("submit", function () {

		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function (response) {

				if (response.estado == "true") {
					$("body").overhang({
						type: "success",
						message: "Parte de accidente encontrado correctamente",
						closeConfirm: true						
					});
					
					$.ajax({
						url: 'mostrar_parte.php',
						data: 'data',
						dataType: 'json',
						success: function(data) {
							parte_return = data;
							$.each(parte_return, function(i, parte) {
								$('#capaformulario').append("<p>" + parte + "</p>");
							});
						}, 
						error: function(data) {
							alert(data);
						}

					});	
			
				} else {

					$("body").overhang({
						type: "error",
						message: "Algo ha ido mal, vuelve a intentarlo"
					});
				}
			},
			error: function () {
				$("body").overhang({
					type: "error",
					message: "Hay campos vacios, revisa el formulario"
				});
			}
		});

		return false;

	});

});