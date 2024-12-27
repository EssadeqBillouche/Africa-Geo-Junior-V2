<?php
require_once 'dbConn.php';
class Person{
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

    function Login()
    {

    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    public function getIdRole()
    {
        return $this->idRole;
    }
    public function getEmail()
    {
        return $this->email;
    }
//    setters

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
?>