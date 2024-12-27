<?php
require_once('dbConn.php');
require_once('Person.php.php');

class User extends person{
    public function __construct($name, $idRole, $email, $password)
    {
        parent::__construct($name, $idRole, $email, $password);
    }

}
?>