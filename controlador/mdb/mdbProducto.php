<?php

    require_once '../../modelo/product.php';
    session_start();


    function insertarProducto($id,$cat,$name,$cant,$precio){
        $ob=new product();
        $producto=new Producto($id,$cat,$name,$cant,$precio);
        $resultado=$ob->insertarProducto($producto);
        return $resultado;
    }


    function todoLosProductos(){
        $ob=new product();
        $resultado=$ob->todoLosProductos();
        return $resultado;
    }

    function borrarProducto($idp, $nombrep){
        $ob= new product();

        $resultado=$ob->borrarProducto($idp, $nombrep);
        return $resultado;
    }


?>