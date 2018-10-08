<?php
/**
 * Funcion que sirve para validar y limpiar un campo
 * 
 * @param  $campo
 * @return string
 */
function validar_campo ($campo)
{
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    
    return $campo;
}