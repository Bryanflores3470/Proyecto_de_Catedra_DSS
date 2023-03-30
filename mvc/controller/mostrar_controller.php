<?php 

    require_once("../model/mostrar_cupones.php");
    $cupones=new Mostrar_modelo();

    $cuponesmatriz=$cupones->get_cupones();

  

    require_once("../view/mostrar_view.php");

?>