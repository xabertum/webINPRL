<?php
include 'helps/helps.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

var_dump($_POST);


}