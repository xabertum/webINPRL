<?php
include 'conexion.php';

class AltaNuevoParte
{
    protected static $conexion;




    private static function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }

    protected static function AltaParte() {

        $query = "INSERT INTO Parte VALUES ()";

    }

}
