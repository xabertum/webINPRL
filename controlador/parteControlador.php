<?php
include 'datos/parteDAO.php';


class ParteControlador
{
    public static function altaParte($fecha, $hora, $DNI, $causa, $tipo, $zona, $gravedad, $baja)
    {
        $obj_parte = new Parte();
        $obj_parte->setFecha_accidente($fecha);
        $obj_parte->setHora_accidente($hora);
        $obj_parte->setDNI_trabajador($DNI);
        $obj_parte->setCausa_accidente($causa);
        $obj_parte->setTipo_lesion($tipo);
        $obj_parte->setZona_lesion($zona);
        $obj_parte->setGravedad($gravedad);
        $obj_parte->setBaja($baja);

        return parteDAO::altaParte($obj_parte);
    }
}
