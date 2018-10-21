<?php
include 'controlador/parteControlador.php';
session_start();

header('Content-type: application/json');

$_DNI = $_SESSION['DNI'];

$resultado = array("estado" => "true");

if (parteControlador::eliminarParte($_DNI)) {
    return print(json_encode($resultado)); 
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));