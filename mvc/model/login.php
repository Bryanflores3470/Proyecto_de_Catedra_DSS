<?php  

class Login_modelo{

    private $db;

    public function __construct(){

        require_once("../model/Conectar.php");
        $this->db=Conectar::conexion();
    }

    public function get_login($correo_electronico, $encriptada){
        $validar_login = mysqli_query($this->db,"SELECT * FROM clientes where correo_electronico ='$correo_electronico' and contrasena ='$encriptada'");
        
        
           return $validar_login;
    }
}

?>