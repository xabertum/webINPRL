<?php
include 'controlador/parteControlador.php';
session_start();

header('Content-type: application/json');

$_DNI = $_SESSION['DNI'];

print json_encode(parteControlador::mostrarParte($_DNI));