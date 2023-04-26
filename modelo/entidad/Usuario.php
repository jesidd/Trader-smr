<?php


/**
 * Usuario
 */
class Usuario
{
    
    private $correo;
    private $username;
    private $password;

    public function __construct( $user, $correo, $password){
        
        $this->correo = $correo;
        $this->username = $user;
        $this->password = $password;
    }
    
    

    public function setUsername($user)
    {
        $this->username = $user;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

        
    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}

