<?php

class AltaNuevoParte {
    
    //Atributos privados
    private $fecha_accidente;
    private $hora_accidente;
    private $DNI_trabajador;
    private $causa_accidente;
    private $tipo_lesion;
    private $zona_lesion;
    private $gravedad;
    private $baja;

    // GETTERS & SETTERS

    /**
     * Get the value of fecha_accidente
     */ 
    public function getFecha_accidente()
    {
        return $this->fecha_accidente;
    }

    /**
     * Get the value of hora_accidente
     */ 
    public function getHora_accidente()
    {
        return $this->hora_accidente;
    }

    /**
     * Get the value of DNI_trabajador
     */ 
    public function getDNI_trabajador()
    {
        return $this->DNI_trabajador;
    }

    /**
     * Get the value of causa_accidente
     */ 
    public function getCausa_accidente()
    {
        return $this->causa_accidente;
    }

    /**
     * Get the value of tipo_lesion
     */ 
    public function getTipo_lesion()
    {
        return $this->tipo_lesion;
    }

    /**
     * Get the value of zona_lesion
     */ 
    public function getZona_lesion()
    {
        return $this->zona_lesion;
    }

    /**
     * Get the value of gravedad
     */ 
    public function getGravedad()
    {
        return $this->gravedad;
    }

    /**
     * Get the value of baja
     */ 
    public function getBaja()
    {
        return $this->baja;
    }
}