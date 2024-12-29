<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});

class User extends person{
    public function __construct($name, $idRole, $email, $password)
    {
        parent::__construct($name, $idRole, $email, $password);
    }
    public function login(){
            $email = $this->email;
            $password = $this->password;
    }


}
?>