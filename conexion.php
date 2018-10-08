<?php 

class Conexion {
    
    /**
     * Conecta con la base de datos
     * 
     * @return PDO
     */
    public static function conectar() {
        
        try {
           
            $pdo = new PDO ('mysql:host=sql111.epizy.com;dbname=epiz_22131331_producto4', 'epiz_22131331', 'producto4');
    
            return $pdo;
            
        } catch (PDOException $e) {
           die(($e->getMessage()));
           
        }       
        
    }
    
    
}
















