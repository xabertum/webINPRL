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
						callback: function () {
							window.location.href = "admin.php";
						}
					});
				} else {

					$("body").overhang({
						type: "error",
						message: "Usuario o Password incorrecto"
					});

				}

			},
			error: function () {
				$("body").overhang({
					type: "error",
					message: "Usuario o Password incorrecto"
				});
			}
		});

		return false;

	});
});