<?php
include '/controlador/UsuarioControlador.php';
include '/helps/helps.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (isset($_POST["usuario"]) && isset($_POST["passwd"])) {
        
        $txtUsuario = validar_campo($_POST['usuario']);
        $txtPassword = validar_campo($_POST['passwd']);
        
        $resultado = array(
                "estado" => "true"
        );
        
        if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
            
            $usuario = UsuarioControlador::getUser($txtUsuario, $txtPassword);
            $_SESSION["usuario"] = array(
                    "DNI" => $usuario->getDNI(),
                    "passwd" => $usuario->getPasswd()                                       
            );
            return print(json_encode($resultado));
            
        }
    }
}

$resultado = array(
        "estado" => "false"
);
return print(json_encode($resultado)); 

