<?php
include 'datos/conexion.php';
include 'entidades/parte.php';

class AltaNuevoParte extends Conexion
{
    protected static $conexion;

    private static function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }

    public static function altaParte () {

    }

}
