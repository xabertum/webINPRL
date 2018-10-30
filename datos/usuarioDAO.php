<?php
include 'conexion.php';
include '/opt/lampp/htdocs/uocphp/webINPRL/entidades/parte.php';

class parteDAO extends Conexion
{
    protected static $conexion;

    private static function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }
    
    /**
     *
     * Metodo que sirve para validar el login
     *
     * @param object $usuario
     * @return boolean
     */
    public static function login ($usuario) {

        $query = "SELECT DNI, passwd FROM Trabajador WHERE DNI = :DNI AND passwd = :passwd";

        self::getConexion();
        $resultado = self::$conexion->prepare($query);

        $_DNI = $usuario->getDNI();
        $_passwd = $usuario->getPasswd();

        $resultado->bindParam(":DNI", $_DNI);
        $resultado->bindParam("passwd", $_passwd);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {

            $filas = $resultado->fetch();
            if ($filas['DNI'] == $usuario->getDNI() &&
                $filas['passwd'] == $usuario->getPasswd()) {

                return true;
            }
        }

        return false;


    }



}
