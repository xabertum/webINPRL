<?php
include 'datos/parteDAO.php';

class ParteControlador
{
    public static function altaNuevoParte($DNI, $fecha, $hora, $causa, $tipo, $zona, $gravedad, $baja)
    {
        $obj_parte = new Parte();
        $obj_parte->setDNI_trabajador($DNI);
        $obj_parte->setFecha_accidente($fecha);
        $obj_parte->setHora_accidente($hora);
        $obj_parte->setCausa_accidente($causa);
        $obj_parte->setTipo_lesion($tipo);
        $obj_parte->setZona_lesion($zona);
        $obj_parte->setGravedad($gravedad);
        $obj_parte->setBaja($baja);

        return parteDAO::altaParte($obj_parte);
    }

    public static function buscarParte($DNI)
    {
        $obj_parte = new Parte();
        $obj_parte->setDNI_trabajador($DNI);

        return parteDAO::buscarParte($obj_parte);
    }

}
