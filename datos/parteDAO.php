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

    public static function altaParte($parte)
    {
        $query = "INSERT INTO Partes (DNI, Fecha_accidente, Hora_accidente, Causa_accidente,
                Tipo_lesion, Partes_cuerpo_lesionado, Gravedad, Baja) VALUES (:DNI, :fecha,
                :hora, :causa, :tipo, :zona, :gravedad, :baja)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $_DNI = $parte->getDNI_trabajador();
        $_fecha = $parte->getFecha_accidente();
        $_hora = $parte->getHora_accidente();
        $_causa = $parte->getCausa_accidente();
        $_tipo = $parte->getTipo_lesion();
        $_zona = $parte->getZona_lesion();
        $_gravedad = $parte->getGravedad();
        $_baja = $parte->getBaja();

        $resultado->bindParam(":DNI", $_DNI);
        $resultado->bindParam(":fecha", $_fecha);
        $resultado->bindParam(":hora", $_hora);
        $resultado->bindParam(":causa", $_causa);
        $resultado->bindParam(":tipo", $_tipo);
        $resultado->bindParam(":zona", $_zona);
        $resultado->bindParam(":gravedad", $_gravedad);
        $resultado->bindParam(":baja", $_baja);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }

    }

}
