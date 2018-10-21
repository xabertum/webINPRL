<?php
class Conexion
{
    /**
     * Conecta con la base de datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $pdo = new PDO('mysql:host=localhost;dbname=db_inprl', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;

        } catch (PDOException $e) {
            die(($e->getMessage()));

        }
    }
}
