<?php
include 'controlador/parteControlador.php';
include 'helps/helps.php';

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['dni']) &&
        isset($_POST['causa']) && isset($_POST['lesion']) && isset($_POST['parte_cuerpo']) &&
        isset($_POST['gravedad']) && isset($_POST['baja'])) {

        $input_fecha = validar_campo($_POST['fecha']);
        $input_hora = validar_campo($_POST['hora']);
        $input_dni = validar_campo($_POST['dni']);
        $input_causa = validar_campo($_POST['causa']);
        $input_lesion = validar_campo($_POST['lesion']);
        $input_parte_cuerpo = validar_campo($_POST['parte_cuerpo']);
        $input_gravedad = validar_campo($_POST['gravedad']);
        $input_baja = validar_campo($_POST['baja']);

        $resultado = array(
            "estado" => "true",
        );

        if (parteControlador::altaParte($input_fecha, $input_hora, $input_dni, $input_causa,
            $input_lesion, $input_parte_cuerpo, $input_gravedad, $input_baja)) {

            return print(json_encode($resultado));
        }
         
    }
}

$resultado = array(
    "estado" => "false",
);
return print(json_encode($resultado));
