<?php
    require_once '../../controlador/mdb/mdbProducto.php';

    

    function obtenerTodo(){
        $pds = todoLosProductos();
        global $id;
        global $item;

        $id = '';
        $item = '';

        if($pds!=null){
            foreach ($pds as $producto) {
                // Acceder a los valores del objeto Producto
                $idProducto = $producto->getIdP();
                $nombre = $producto->getNombreP();
                
                $id .= '<option value="' . $idProducto . '">' . $idProducto . '</option>';
                $item .= '<option value="' . $nombre . '">' . $nombre . '</option>';
                // Realizar operaciones con los valores del producto
                // ...
            }
            
        }
    }

    function listarId(){
        global $id;
        return $id;
    }

    function listarNombre(){
        global $item;
        return $item;
    }
    
?>