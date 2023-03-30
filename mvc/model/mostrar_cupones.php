<?php  

class Mostrar_modelo{

    private $db;
    private $cupones;//cupopnes == Productos

    public function __construct(){

        require_once("../model/Conectar.php");
        $this->db=Conectar::conexion();
        $this->cupones=[];
    }

    public function get_cupones(){
        $consulta = $this->db->query('SELECT * FROM ofertas');

    
        
        while ($fila = $consulta->fetch_assoc()) {
            $this->cupones[] = $fila;
        }
    
        return $this->cupones;
    }

   
}


?>