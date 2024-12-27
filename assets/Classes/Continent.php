<?php
class Continent{
    private $name;
    private $continentId;

    public function __construct($name, $continentId){
        $this->name = $name;
        $this->continentId = $continentId;
    }
    public function getName(){
        return $this->name;
    }
    public function getContinentId(){
        return $this->continentId;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setContinentId($continentId)
    {
        $this->continentId = $continentId;
    }

}

?>