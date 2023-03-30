<?php  

class registrar_modelo{

    private $db;

    public function __construct(){

        require_once("../model/Conectar.php");
        $this->db=Conectar::conexion();
    }

    public function get_registro($nombres,$apellidos,$telefono,$correo_electronico,$encriptada,$direccion,$DUI){
        
        $query ="INSERT INTO clientes(nombres,apellidos,telefono,correo_electronico,contrasena,direccion,DUI) VALUES ('$nombres','$apellidos','$telefono','$correo_electronico','$encriptada','$direccion','$DUI')";
        
        $ejecutar = mysqli_query($this->db,$query);

           return $ejecutar;
    }
}

?>