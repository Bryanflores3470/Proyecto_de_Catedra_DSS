<?php  

class Comprar_modelo{

    private $db;
    private $cupones;//cupopnes == Productos
    private $producto_seleccionado;

    public function __construct(){

        require_once("../model/Conectar.php");
        $this->db=Conectar::conexion();
        $this->cupones=[];
    }

    public function get_cupones(){
        $consulta1 = $this->db->query('SELECT * FROM ofertas' );


        while ($fila = $consulta1->fetch_assoc()) {
            $this->cupones[] = $fila;
        }
    
        return $this->cupones;
    }

    public function get_comprar($id){
        $consulta2 = $this->db->query("SELECT * FROM `ofertas` WHERE `id_oferta` = $id");
        
        while ($produ = $consulta2->fetch_assoc()) {
            if ($produ['id_oferta'] == $id) {
                $producto_seleccionado = $produ;
                break;
            }
        }
        return $producto_seleccionado;
    }
    

}


?>