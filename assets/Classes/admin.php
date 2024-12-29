<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});
class admin extends person{

    public function __construct($name, $idRole, $email, $password)
    {
        parent::__construct($name, $idRole, $email, $password);
    }

    public function mangeCountry(){

    }
    public function mangeCity(){

    }
    public function mangeCountinent(){

    }
    public function login()
    {

    }
}
?>