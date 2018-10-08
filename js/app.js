$(document).ready(function () {

	$("#formulario").bind("submit", function () {

		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function (response) {

				if (response.estado == "true") {
					$("body").overhang({
						type: "success",
						message: "Login correcto! Redirigiendo...",
						closeConfirm: true,
						callback: function () {
							window.location.href = "nuevo_parte.html";
						}
					});
				} else {

					$("body").overhang({
						type: "error",
						message: "Jajaja"
					});
				}
			},
			error: function () {
				$("body").overhang({
					type: "error",
					message: "Revisa el formulario"
				});
			}
		});

		return false;

	});
});