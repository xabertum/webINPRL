<?php
include 'conexion_epizy.php';
include 'entidades/Parte.php';

class parteDAO extends Conexion_epizy
{
    protected static $conexion;

    private static function getConexion()
    {
        self::$conexion = Conexion_epizy::conectar();
    }

    public static function altaParte($parte)
    {
        $query = "INSERT INTO Parte VALUES (:cod_parte, :DNI, :Fecha_accidente,
                :Hora_accidente, :Causa_accidente, :Tipo_lesion, :Partes_cuerpo_lesionado, :Gravedad, :Baja)";
        
        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $_cod_parte = null;
        $_DNI = $parte->getDNI_trabajador();
        $_fecha = $parte->getFecha_accidente();
        $_hora = $parte->getHora_accidente();
        $_causa = $parte->getCausa_accidente();
        $_tipo = $parte->getTipo_lesion();
        $_zona = $parte->getZona_lesion();
        $_gravedad = $parte->getGravedad();
        $_baja = $parte->getBaja();

        $resultado->bindParam(":cod_parte", $_cod_parte);
        $resultado->bindParam(":DNI", $_DNI);
        $resultado->bindParam(":Fecha_accidente", $_fecha);
        $resultado->bindParam(":Hora_accidente", $_hora);
        $resultado->bindParam(":Causa_accidente", $_causa);
        $resultado->bindParam(":Tipo_lesion", $_tipo);
        $resultado->bindParam(":Partes_cuerpo_lesionado", $_zona);
        $resultado->bindParam(":Gravedad", $_gravedad);
        $resultado->bindParam(":Baja", $_baja);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }

    }

}
