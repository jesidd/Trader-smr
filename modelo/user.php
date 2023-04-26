<?php

include 'ConectBe.php';
include '../../modelo/entidad/Usuario.php';

class User{

    public function AutenticarUser($user,$pass){
        $conectbe = new ConectBe();

        $data_table= $conectbe->ejecutarConsulta("SELECT * FROM usuarios WHERE usuario = :user AND password = :pass", 
                                                    array(':user'=>$user,':pass'=>$pass));
        $usuario= null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"]
                        );
            }
            return $usuario;
        }else{
            return null;
        }

    }

    public function verificarExistente($username, $correo){
        $conectbe = new ConectBe();

        $data_table= $conectbe->ejecutarConsulta("SELECT * FROM usuarios WHERE usuario = :user OR correo = :correo", 
                                                    array(':user'=>$username,':correo'=>$correo));
        $usuario= null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"]
                        );
            }
            return $usuario;
        }else{
            return null;
        }

    }

    public function insertarUsuario(Usuario $usuario){
        $data_source= new ConectBe();

        $iguales = $this->verificarExistente($usuario->getUsername(),$usuario->getCorreo());
        
        if($iguales == null){
            $sql = "INSERT INTO usuarios (usuario, correo, password) VALUES ( :username, :correo, :password)";
            $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':username'=>$usuario->getUsername(),
                ':correo'=>$usuario->getCorreo(),
                ':password'=>$usuario->getPassword()
                )
            );
            return $resultado;
        }else{
            $errMsg .= 'Username and Password already existing';
            echo $errMsg;
        }
    }

    public function modificarUsuario(Usuario $usuario){
        $data_source= new ConectBe();
        $sql = "UPDATE usuarios SET "
                . " usuario= :username, "
                . "correo= :correo, "
                . " password= :password"
                . " WHERE usuario= $usuario->getUsername()";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':username'=>$usuario->getUsername(),
                ':correo'=>$usuario->getCorreo(),
                ':password'=>$usuario->getPassword()
            )
        );
        return $resultado;
    }


}


?>