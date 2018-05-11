<?php
class Conexion{

private static $conexion;
private static $status='No conectado';

public static function abrir_conexion(){
    if (!isset(self::$conexion)) {
    try{

        include_once 'config.inc.php';
        self::$conexion= new PDO('mysql:dbname='.NOMBRE_BD.';'.'host='.NOMBRE_SERVIDOR,NOMBRE_USUARIO,PASSWORD);
        self::$conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$conexion->exec("SET CHARACTER SET utf8");
        self::$status= 'Conectado';

    }
    catch(PDOException $ex){
        print "ERROR".$ex->getMessage().'</br>';
        self::$status= 'Error de conexion';
        die(); 
    }
    
    }
}
public static function estadoConexion(){
    return self::$status;
}
public static function cerrar_conexion(){
    if(isset(self::$conexion)){
        self::$conexion=null;
        self::$status= 'Conexion Cerrada';
    }
}
public static function obtener_conexion(){
    return self::$conexion;
}


}



?>