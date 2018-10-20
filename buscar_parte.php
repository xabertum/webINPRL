<?php
include 'controlador/parteControlador.php';
include 'helps/helps.php';

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codigo_accidente'])) {

        $input_DNI = validar_campo($_POST['codigo_accidente']);

        var_dump($_POST);
        $resultado = array("estado" => "true");

        if (parteControlador::buscarParte($input_DNI)) {
            return print(json_encode($resultado));
        }

    }
}

$resultado = array ("estado" => "false");
var_dump($_POST);
return print(json_encode($resultado));