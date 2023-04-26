<?php

    include '../mdb/mdbUsuario.php';

    $username = $_POST['usuario'];
    $email = $_POST['correo'];
    $clave = $_POST['password'];

    if($username && $clave && $email != null){
        $usuario = insertarUsuario($username,$email,$clave);

        if($usuario != null){
            header("location: ../../vista/register.html");
        }

    }else{
        $errMsg .= 'Username and Password are not found';
    }

?>