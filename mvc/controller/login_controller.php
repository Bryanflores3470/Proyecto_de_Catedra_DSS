<?php

require_once("../model/login.php");
//loggin cuando presione el boton
$login=new Login_modelo();


if(isset($_POST['correo_electronico']) && isset($_POST['contrasena'])) {
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];
    $encriptada = hash('sha512',$contrasena);

    $loginCliente = $login->get_login($correo_electronico, $encriptada);

    
        require ('../view/mostrar_view.php');
        
}


?>