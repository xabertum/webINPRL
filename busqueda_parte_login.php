<?php
include 'helps/helps.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['usuario']) || isset($_POST['fecha_accidente']) || isset($_POST['nombre']) ||
    isset($_POST['causa_lesion']) || isset($_POST['tipo_lesion']) || isset($_POST['parte_lesionada']) || 
    isset($_POST['gravedad']) || isset($_POST['baja']) || isset($_POST['comunidad_autonoma']) || 
    isset($_POST['fecha_nacimiento']) || isset($_POST['sexo'])) {

        var_dump($_POST);

    }





}