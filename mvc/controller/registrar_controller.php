<?php

require_once("../model/registrarse.php");
//loggin cuando presione el boton
$login=new registrar_modelo();


if(isset($_POST['correo_electronico']) && isset($_POST['contrasena'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];
    //encriptar contraseña
    $encriptada = hash('sha512',$contrasena);
    $direccion = $_POST['direccion'];
    $DUI = $_POST['DUI'];

    $ejecutar = $login->get_registro($nombres,$apellidos,$telefono,$correo_electronico,$encriptada,$direccion,$DUI);

   
        require ('../view/login_view.php');
}



?>