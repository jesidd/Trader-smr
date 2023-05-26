<?php

    include '../../modelo/product.php';
    session_start();


    function insertarProducto($id,$cat,$name,$cant,$precio){
        $ob=new product();
        $producto=new Producto($id,$cat,$name,$cant,$precio);
        $resultado=$ob->insertarProducto($producto);
        return $resultado;
    }


?>