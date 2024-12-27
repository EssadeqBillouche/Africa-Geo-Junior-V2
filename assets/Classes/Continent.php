<?php
require "dbConn.php";

class Continent {
    private $name;
    private $continentId;
    private $connactionVar;

    public function __construct() {
        try {
            $objectConnection = new DataBaseConnaction();
            $this->connactionVar = $objectConnection->getConnection();
            echo "Khedama";
        }catch (Exception $e){
            echo $e->getMessage()."makhdamach";
        }

    }

    public function EditContinent($continentId) {
        var_dump($this->connactionVar);
    }

    public function AddCountinet($name) {
        try {
            $stsmnt = $this->connactionVar;
            $stsmnt = $stsmnt->prepare("INSERT INTO continents (continentName) VALUES(name)");
            $stsmnt->bindParam(":name", $name);
            $stsmnt->execute();
        }catch (Exception $e){
            echo $e->getMessage()."mochkil f add dyal continent";
        }
    }

    public function DeleteContinent($continentId) {

    }

    public function getName() {
        return $this->name;
    }

    public function getContinentId() {
        return $this->continentId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setContinentId($continentId) {
        $this->continentId = $continentId;
    }
}

?>

