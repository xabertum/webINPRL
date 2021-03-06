<?php
include 'controlador/parteControlador.php';
include 'helps/helps.php';

session_start();

header('Content-type: application/json');

$resultado = array();

$input_DNI = validar_campo($_SESSION['DNI']);
$input_fecha = validar_campo($_POST['fecha']);
$input_hora = validar_campo($_POST['hora']);
$input_causa = validar_campo($_POST['causa']);
$input_tipo = validar_campo($_POST['tipo']);
$input_parte_cuerpo = validar_campo($_POST['parte_cuerpo']);
$input_gravedad = validar_campo($_POST['gravedad']);
$input_baja = validar_campo($_POST['baja']);

$resultado = array("estado" => "true");

if (parteControlador::modificarParte($input_DNI, $input_fecha, $input_hora, $input_causa, $input_tipo,
    $input_parte_cuerpo, $input_gravedad, $input_baja)) {

    return print(json_encode($resultado));
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));
