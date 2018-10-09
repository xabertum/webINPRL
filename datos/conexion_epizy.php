<?php

class Conexion_epizy
{

    /**
     * Conecta con la base de datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $pdo = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_22777483_inprl', 'epiz_22777483', 'p2inprl');

            return $pdo;

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();

        }
    }
}
