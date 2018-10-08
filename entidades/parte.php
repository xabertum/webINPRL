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

    // GETTERS
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

    // SETTERS 

    /**
     * Set the value of fecha_accidente
     *
     * @return  self
     */ 
    public function setFecha_accidente($fecha_accidente)
    {
        $this->fecha_accidente = $fecha_accidente;

        return $this;
    }
    

    /**
     * Set the value of hora_accidente
     *
     * @return  self
     */ 
    public function setHora_accidente($hora_accidente)
    {
        $this->hora_accidente = $hora_accidente;

        return $this;
    }

    /**
     * Set the value of DNI_trabajador
     *
     * @return  self
     */ 
    public function setDNI_trabajador($DNI_trabajador)
    {
        $this->DNI_trabajador = $DNI_trabajador;

        return $this;
    }

    /**
     * Set the value of causa_accidente
     *
     * @return  self
     */ 
    public function setCausa_accidente($causa_accidente)
    {
        $this->causa_accidente = $causa_accidente;

        return $this;
    }

    /**
     * Set the value of tipo_lesion
     *
     * @return  self
     */ 
    public function setTipo_lesion($tipo_lesion)
    {
        $this->tipo_lesion = $tipo_lesion;

        return $this;
    }

    /**
     * Set the value of zona_lesion
     *
     * @return  self
     */ 
    public function setZona_lesion($zona_lesion)
    {
        $this->zona_lesion = $zona_lesion;

        return $this;
    }

    /**
     * Set the value of gravedad
     *
     * @return  self
     */ 
    public function setGravedad($gravedad)
    {
        $this->gravedad = $gravedad;

        return $this;
    }

    /**
     * Set the value of baja
     *
     * @return  self
     */ 
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }
}