<?php 

class Conectar{

   public static function conexion(){
    try {
        $conexion=new mysqli('localhost', 'root', '', 'login');
        return $conexion;

    } catch (Exception $e) {
        die("ERROR".$e->getMessage());
        echo "LINEA DEL ERROR".$e->getLine();
    }
   }
   
}

?>