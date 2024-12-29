<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});

class country {
    private $countryId;
    private $countryName;
    private $countryPopulation;
    private $countryLangue;
    private $countryContinentID;
    private $countryConnection;

    public function __construct() {
        try {
            $obeject = new DataBaseConnaction();
            $obeject = $obeject->getConnection();
            $this->countryConnection = $obeject;

        } catch (Exception $e){
            echo "problem in the country Connection".$e->getMessage();
        }
    }

    public function AddCountry($countryName, $countryPopulation, $countryLangue, $countryContinentID) {
        try {
            $stetment = $this->countryConnection;
            $stetment = $stetment->prepare("INSERT INTO Pays (	pays_nom,population,langue,fk_Continent) VALUES (:nom,:population,:langue,:continent)");
            $stetment->bindValue(":nom", $countryName);
            $stetment->bindValue(":population", $countryPopulation);
            $stetment->bindValue(":langue", $countryLangue);
            $stetment->bindValue(":continent", $countryContinentID);
            $stetment->execute();
        } catch (Exception $e) {
            echo "error problem from class country function addcountry " . $e->getMessage();
        }
    }

    public function EditCountry() {

    }

    public function DeleteCountry($countryId) {

    }

    public function showAllCountries() {
        $stetment = $this->countryConnection;
        $stetment = $stetment->prepare("SELECT * FROM pays");
        $stetment->execute();
        return $stetment->fetchAll();
    }

    public function getCountryNameById($countryId) {
        $stetment = $this->countryConnection;
        $stetment = $stetment->prepare("SELECT pays_nom FROM pays WHERE pays_id = :id");
        $stetment->bindValue(":id", $countryId);
        $stetment->execute();
        return $stetment->fetch();
    }
    public function getCountryName() {
        return $this->countryName;
    }

    public function getCountryPopulation() {
        return $this->countryPopulation;
    }

    public function getCountryLangue() {
        return $this->countryLangue;
    }

    public function getCountryContinentID() {
        return $this->countryContinentID;
    }

    public function setCountryId($countryId) {
        $this->countryId = $countryId;
    }

    public function setCountryName($countryName) {
        $this->countryName = $countryName;
    }

    public function setCountryPopulation($countryPopulation) {
        $this->countryPopulation = $countryPopulation;
    }

    public function setCountryLangue($countryLangue) {
        $this->countryLangue = $countryLangue;
    }

    public function setCountryContinentID($countryContinentID) {
        $this->countryContinentID = $countryContinentID;
    }
}
?>
