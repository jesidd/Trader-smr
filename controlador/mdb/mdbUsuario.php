<?php

    include '../../modelo/user.php';
    session_start();

    function autenticarUsuario($username,$password){
        $ob = new User();
        $usuario = $ob->AutenticarUser($username,$password);
        return $usuario;
    }

    function insertarUsuario($username,$correo,$pass){
        $ob=new User();
        $usuario=new Usuario("",$username,$correo,$pass);
        $resultado=$ob->insertarUsuario($usuario);
        return $resultado;
    }
    
    function modificarUsuario($username,$correo,$pass){
        $ob=new User();
        $id = $_SESSION['id'];

        $usuario=new Usuario($id,$username,$correo,$pass);
        $resultado=$ob->modificarUsuario($usuario);
        return $resultado;
    }

    function borrarUsuario($username,$password){
        $ob= new User();
        $id = $_SESSION['id'];

        $usuario= new Usuario($id,$username," ",$password);
        $resultado=$ob->borrarUsuario($usuario);
        return $resultado;
    }


?>