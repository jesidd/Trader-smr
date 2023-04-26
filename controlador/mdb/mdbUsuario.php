<?php

    include '../../modelo/user.php';

    function autenticarUsuario($username,$password){
        $ob = new User();
        $usuario = $ob->AutenticarUser($username,$password);
        return $usuario;
    }

    function insertarUsuario($username,$correo,$pass){
        $ob=new User();
        $usuario=new Usuario($username,$correo,$pass);
        $resultado=$ob->insertarUsuario($usuario);
        return $resultado;
    }
    
    function modificarUsuario($username,$correo,$pass){
        $ob=new User();
        $usuario=new Usuario($username,$correo,$pass);
        $resultado=$ob->modificarUsuario($usuario);
        return $resultado;
    }


?>