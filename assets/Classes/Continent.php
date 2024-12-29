<?php
require "DataBaseConnaction.php";

class Continent {
    private $name;
    private $continentId;
    private $connactionVar;

    public function __construct() {
        try {
            $objectConnection = new DataBaseConnaction();
            $this->connactionVar = $objectConnection->getConnection();

        }catch (Exception $e){
            echo $e->getMessage()."makhdamach";
        }

    }

    public function EditContinent($continentId){
        $objectConnection = new DataBaseConnaction();
        $stement = $objectConnection->getConnection();
        $stement = $stement->prepare("Select pays_nom from continents where id = :continentId");
        $stement->bindParam(":continentId", $continentId);
        $stement->execute();
    }

    public function AddContinent($name) {
        try {
            $stsmnt = $this->connactionVar;
            $stsmnt = $stsmnt->prepare("INSERT INTO continent (Continent_nom) VALUES(:name)");
            $stsmnt->bindParam(":name", $name);
            $stsmnt->execute();
            echo "tzadet";
        }catch (Exception $e){
            echo $e->getMessage()."mochkil f add dyal continent";
        }
    }

    public function showAllContinents() {
        $stsmnt = $this->connactionVar;
        $stsmnt = $stsmnt->prepare("SELECT * FROM continent");
        $stsmnt->execute();
        return $stsmnt->fetchAll();
    }

    public function DeleteContinent($continentId) {
        try {
            $stsmnt = $this->connactionVar;
            $stsmnt = $stsmnt->prepare("DELETE FROM continent WHERE Continent_id=:id");
            $stsmnt->bindParam(":id", $continentId);
            $stsmnt->execute();
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

