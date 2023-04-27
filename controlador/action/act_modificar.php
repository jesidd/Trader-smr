<?php

include '../mdb/mdbUsuario.php';

$username = $_POST['usuario'];
$email = $_POST['correo'];
$clave = $_POST['password'];

if($username && $clave && $email != null){
    $usuario = modificarUsuario($username,$email,$clave);

    if($usuario != null){
        header("location: ../../vista/pages/modificar.php");
        session_start();
        $msg = 'Se modifico correctamente';
        $_SESSION['login']=$msg;
    }else{
        $errMsg .= 'No se pudo modificar, ya se encuentra registrado el correo o el usuario intente con otro diferente';
        session_start();
        $_SESSION['error']=$errMsg;
        header("location: ../../vista/pages/modificar.php");
    }

}else{
    $errMsg = 'The username and password were not empty.';
    session_start();
    $_SESSION['error']=$errMsg;
    header("location: ../../vista/pages/modificar.php");
}





?>