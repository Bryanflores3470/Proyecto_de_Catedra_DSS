<?php  

class Canjear_modelo{

    private $db;
    private $cupones;//cupopnes == Productos

    public function __construct(){

        require_once("../model/Conectar.php");
        $this->db=Conectar::conexion();
        $this->cupones=[];
    }

    public function get_insertar($oferta, $cliente, $estado, $fecha){
        $consulta = $this->db->query("INSERT INTO `cupones` (`cantidad_cupones`, `id_cliente`, `id_oferta`, `estado`, `fecha_canje`) VALUES ('$oferta', '$cliente', '$oferta', '$estado', '$fecha')");
    }
    

    public function get_comprar(){
        $consulta2 = $this->db->query('SELECT * FROM `ofertas` WHERE 1');
    
        $producto_seleccionado = null;
        foreach($consulta2 as $produ){
            if($produ == 1){
                $producto_seleccionado = $produ;
                break;
            }
        }
        return $produ;
    }

}


?>