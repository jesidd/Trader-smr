<?php

include '../mdb/mdbUsuario.php';

$username = $_POST['usuario'];
$email = $_POST['correo'];
$clave = $_POST['password'];

if($username && $clave && $email != null){
    $usuario = modificarUsuario($username,$email,$clave);

    if($usuario != null){
        header("location: ../../vista/register.html");
    }else{
        $errMsg .= 'The username and password were not modified.';
        echo $errMsg;
    }

}else{
    $errMsg .= 'The username and password were not empty.';
    echo $errMsg;
}





?>