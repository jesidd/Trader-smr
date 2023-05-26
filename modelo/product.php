<?php

include 'ConectBe.php';
include '../../modelo/entidad/Producto.php';

class product{

    public function verificarExistente($idp){
        $conectbe = new ConectBe();
        
        $data_table= $conectbe->ejecutarConsulta("SELECT * FROM producto WHERE id_Producto = :id", 
                                                    array(':id'=>$idp));
        $producto= null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Producto(
                        $data_table[$indice]["id_Producto"],
                        $data_table[$indice]["categoria"],
                        $data_table[$indice]["nombreP"],
                        $data_table[$indice]["cantidad"],
                        $data_table[$indice]["precio"]
                        );
            }
            return $producto;
        }else{
            return null;
        }

    }

    public function insertarProducto(Producto $producto){
        $data_source= new ConectBe();

        $iguales = $this->verificarExistente($producto->getIdP());

        if($iguales == null){
            $sql = "INSERT INTO producto (id_Producto, categoria, nombreP, cantidad, precio ) VALUES ( :id, :cat, :nombre, :cant, :precio)";
            $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':id'=>$producto->getIdP(),
                ':cat'=>$producto->getCategoria(),
                ':nombre'=>$producto->getNombreP(),
                ':cant'=>$producto->getCant(),
                ':precio'=>$producto->getPrecio()
                )
            );
            return $resultado;
        }else{
            $errMsg .= 'Username and Password already existing';
            return null;
        }
    }



}





?>