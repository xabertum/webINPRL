<?php 

class Conexion {
    
    /**
     * Conecta con la base de datos
     * 
     * @return PDO
     */
    public static function conectar() {
        
        try {
           
            $pdo = new PDO ('mysql:host=localhost;dbname=db_inprl', 'root', '');
    
            return $pdo;
            
        } catch (PDOException $e) {
           die(($e->getMessage()));
           
        }       
        
    }
    
    
}
















