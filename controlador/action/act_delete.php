<?php
    include '../mdb/mdbUsuario.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuario = borrarUsuario($username,$password);

    if($usuario != null ){
        $msg .= 'se elimino el usuario correctamente';
        echo $msg;
    }else{
        $errMsg .= 'No se elimino el usuario';
        echo $errMsg;
    }

?>