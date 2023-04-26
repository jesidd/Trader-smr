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
                        $data_table[$indice]["id"],
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
                        $data_table[$indice]["id"],
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

    public function buscarUsuarioPorUser($username){
        $data_source = new ConectBe();
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE usuario = :username", 
                                                    array(':username'=>$username));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                    $data_table[$indice]["id"],
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

    public function verificarExistenteExcpt($username, $correo,$id){
        $conectbe = new ConectBe();

        $data_table= $conectbe->ejecutarConsulta("SELECT * FROM usuarios WHERE id <> $id AND ( usuario = :user OR correo = :correo )", 
                                                    array(':user'=>$username,':correo'=>$correo));
        $usuario= null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
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

    public function modificarUsuario(Usuario $usuario){
        $data_source= new ConectBe();
        session_start();

        //$usuarioFirst = $this->buscarUsuarioPorUser($usuario->getUsername());$usuarioFirst->getId()
        $id = $_SESSION['id'];
        $iguales = $this->verificarExistenteExcpt($usuario->getUsername(),$usuario->getCorreo(),$id);

        if($iguales == null){
            $sql = "UPDATE usuarios SET "
            . " usuario= :username, "
            . " correo= :correo, "
            . " password= :password"
            . " WHERE id= :id";
            $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':username'=>$usuario->getUsername(),
            ':correo'=>$usuario->getCorreo(),
            ':password'=>$usuario->getPassword(),
            ':id'=>$id
              )
            );
        }else{
            $errMsg .='ya se encuentra registrado el correo o el usuario intente con otro diferente';
            echo $errMsg;
            $resultado = null;
        }

        return $resultado;
    }

    public function borrarUsuario($id){
        $data_source = new ConectBe();
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM usuario WHERE id = :id", array('id'=>$id));
        
        return $resultado;
    }

}


?>