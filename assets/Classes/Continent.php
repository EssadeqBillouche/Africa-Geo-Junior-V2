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
    }

    public function AddCountinet($name) {
        try {
            $stsmnt = $this->connactionVar;
            $stsmnt = $stsmnt->prepare("INSERT INTO continent (Continent_nom) VALUES(name)");
            $stsmnt->bindParam(":name", $name);
            $stsmnt->execute();
        }catch (Exception $e){
            echo $e->getMessage()."mochkil f add dyal continent";
        }
    }

    public function DeleteContinent($continentId) {
        try {
            $stsmnt = $this->connactionVar;
            $stsmnt = $stsmnt->prepare("DELETE FROM continent WHERE Continent_id=id");
            $stsmnt->bindParam(":id", $continentId);
        }catch (Exception $e){
            echo $e->getMessage()."mochkil f delete continent";
        }
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

