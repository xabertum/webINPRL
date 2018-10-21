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
						message: "Parte de accidente encontrado correctamente"
					});

					$.ajax({
						url: 'mostrar_parte.php',
						data: 'data',
						dataType: 'json',
						success: function (data) {
							parte_return = data;
							$.each(parte_return, function (i, parte) {
								$('#capaformulario').append("<br><br><form id='modificar_parte' method='POST' action=''>" +
									"<label for='DNI'>DNI/NIE del Accidentado</label>" + "<br>" +
									"<input style='background-color: lightyellow;' id ='DNI' type='text' name='DNI' value=" + "'" + parte.DNI + "'" + "readonly>" + "<br>" +
									"<label for='fecha'>Fecha del Accidente</label>" + "<br>" +
									"<input id='fecha' name='fecha' type='text' value=" + "'" + parte.Fecha_accidente + "'" + ">" + "<br>" +
									"<label for='hora'>Hora del Accidente</label>" + "<br>" +
									"<input id='hora' name='hora' type='text' value=" + "'" + parte.Hora_accidente + "'" + ">" + "<br>" +
									"<label for='causa'>Causa del Accidente</label>" + "<br>" +
									"<input id='causa' name='causa' type='text' value=" + "'" + parte.Causa_accidente + "'" + ">" + "<br>" +
									"<label for='tipo'>Tipo de Lesión</label>" + "<br>" +
									"<input id='tipo' name='tipo' type='text' value=" + "'" + parte.Tipo_lesion + "'" + ">" + "<br>" +
									"<label for='partes_cuerpo'>Parte del cuerpo lesionada</label>" + "<br>" +
									"<input id='partes_cuerpo' name='parte_cuerpo' type='text' value=" + "'" + parte.Partes_cuerpo_lesionado + "'" + ">" + "<br>" +
									"<label for='gravedad'>Gravedad del accidente</label>" + "<br>" +
									"<input id='gravedad' name='gravedad' type='text' value=" + "'" + parte.Gravedad + "'" + ">" + "<br>" +
									"<label for='baja'>¿Ha causdado baja?</label>" + "<br>" +
									"<input id='baja' name='baja' type='text' value=" + "'" + parte.Baja + "'" + ">" + "<br><br>" +
									"<button style='margin-right: 5px' type='submit' class='submitform btn btn-info' value='Modificar' formaction='modificar_parte.php'>" +"Modificar"+ "</button>" + 
									"<button type='submit' class='submitform btn btn-info' value='Eliminar' formaction='eliminar_parte.php'>" +"Eliminar"+ "</button>" + 
									"</form>");
							});
						},
						error: function (data) {
							alert(data);
						}

					});

				} else {

					$("body").overhang({
						type: "error",
						message: "Parte no encontrado, vuelve a intentarlo..."
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


	$(document).on("click", ".submitform", function () {

		$.ajax({
			type: 'POST',
			url: $(this).attr("formaction"),
			data: $("#modificar_parte").serialize(),
			success: function (response) {
				
				if (response.estado == "true") {
					$("body").overhang({
						type: "success",
						message: "Parte modificado/eliminado correctamente",
						closeConfirm: true,
						callback: function () {
							window.location.href = "modificar_parte.html";
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
					message: "Algo ha ido mal, vuelve a intentarlo"
				});
			}
		});

		return false;
		
	});

});