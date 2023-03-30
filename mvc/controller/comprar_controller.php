<?php 
    $operacion = $_GET['operacion'];
    switch ($operacion){
        case 'verproducto':
            $id = $_GET['id'];
            require_once("../model/comprar_cupones.php");
            $producto_seleccionado = new Comprar_modelo();
            $cuponesmatriz = $producto_seleccionado->get_comprar($id); // Aquí se llama a la función get_comprar() con $id
            // Resto del código para mostrar los detalles del producto
            require_once("../view/comprar_view.php");
            break;
    }
    
    /*require_once("../model/comprar_cupones.php");
    
    $cupones=new Comprar_modelo();

    $cuponesmatriz=$cupones->get_comprar();*/


    

?>