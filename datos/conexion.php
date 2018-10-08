<?php 

class Conexion {
    
    /**
     * Conecta con la base de datos
     * 
     * @return PDO
     */
    public static function conectar() {
        
        try {
           
            $pdo = new PDO ('mysql:host=localhost;dbname=phplogin', 'root', '');
    
            return $pdo;
            
        } catch (PDOException $e) {
           die(($e->getMessage()));
           
        }       
        
    }
    
    
}
















