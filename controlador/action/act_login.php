<?php
    include '../mdb/mdbUsuario.php';

    $username = $_POST['user'];
    $password = $_POST['pass'];

    if($username && $password !=null){
        $errMsg = '';
       //username and password sent from Form

               
        $usuario = autenticarUsuario($username, $password);
        echo $username;

       if($usuario != null){ // Puede iniciar sesión
           session_start();
           $_SESSION['id'] = $usuario->getId();
            $_SESSION['NOMBRE_USUARIO'] = $usuario->getUsername();
            $_SESSION['correo'] = $usuario->getCorreo();
            header("Location: ../../index.html");
            
       }else{ // No puede iniciar sesión
            $errMsg .= 'Username and Password are not found';
            header("Location: ../../vista/register.html");
       }

    }else{ //valores vacios
        $errMsg .= 'Username and Password are not found';
            header("Location: ../../vista/register.html");
    }
       
       
    // No puede iniciar sesión
    // header("Location: ../../vista/login.html");


?>