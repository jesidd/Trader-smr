<?php
    include '../mdb/mdbUsuario.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuario = borrarUsuario($username,$password);

    if($usuario != null ){
        $msg .= 'se elimino el usuario correctamente';
        echo $msg;
        header("Location: ../../index.html");
    }else{
        $errMsg .= 'No se elimino el usuario';
        echo $errMsg;

    }

?>