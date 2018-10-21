<?php
include 'conexion.php';
include 'entidades/Parte.php';

class parteDAO extends Conexion
{
    protected static $conexion;

    private static function getConexion()
    {
        self::$conexion = Conexion::conectar();
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

    public static function buscarParte($parte)
    {
        $query = "SELECT * FROM Parte WHERE DNI = :DNI";

        self::getConexion();
        $resultado = self::$conexion->prepare($query);
        $_DNI = $parte->getDNI_trabajador();

        $resultado->bindParam(":DNI", $_DNI);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas['DNI'] == $parte->getDNI_trabajador()) {
                return true;
            }
        }

        return false;
    }

    public static function mostrarParte($parte)
    {
        $query = "SELECT * FROM Parte WHERE DNI = :DNI";

        self::getConexion();
        $resultado = self::$conexion->prepare($query);
        $_DNI = $parte->getDNI_trabajador();

        $resultado->bindParam(":DNI", $_DNI);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetchAll();

            return $filas;

        }

    }

    public static function modificarParte($parte)
    {
        $query = "UPDATE Parte SET cod_parte = :cod_parte, DNI = :DNI, Fecha_accidente = :Fecha_accidente,
                Hora_accidente = :Hora_accidente, Causa_accidente = :Causa_accidente, Tipo_lesion = :Tipo_lesion,
                Partes_cuerpo_lesionado = :Partes_cuerpo_lesionado, Gravedad = :Gravedad, Baja = :Baja WHERE DNI = :DNI";

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

    public static function eliminarParte($parte) {



    }


}
