<?php

spl_autoload_register(function ($class) {
    require $class . '.php';
});

abstract class Person{
    protected $name;
    protected $idRole;

    protected $email;
    protected $password;
    public function __construct($name, $idRole, $email, $password){
        $this->name = $name;
        $this->idRole = $idRole;
        $this->email = $email;
        $this->password = $password;
    }
    abstract public function login();
}
?>