<?php 
    $operacion = $_GET['operacion'];
    switch ($operacion){
        case 'comprar':
            $oferta = $_GET['oferta'];
            $cliente = $_GET['cliente'];
            $estado = $_GET['estado'];
            $fecha = $_GET['fecha'];
            require_once("../model/canjear_cupones.php");
            $producto_seleccionado = new Canjear_modelo();
            $cuponesmatriz = $producto_seleccionado->get_insertar($oferta, $cliente, $estado, $fecha); // Aquí se llama a la función get_comprar() con $id
            // Resto del código para mostrar los detalles del producto
            require_once("../view/canjear_view.php");
            break;
    }
    
    /*require_once("../model/comprar_cupones.php");
    
    $cupones=new Comprar_modelo();

    $cuponesmatriz=$cupones->get_comprar();*/


    

?>