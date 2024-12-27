<?php
class country{
    private $countryId;
    private $CountryName;

    private $CountryPopulation;
    private $Countrylangue;
    private $CountryCountinentID;
    public function __construct($countryId, $countryName, $countryPopulation, $countrylangue, $countryCountinentID){
        $this->CountryName = $countryName;
        $this->countryId = $countryId;
        $this->countryPopulation = $countryPopulation;
        $this->countrylangue = $countrylangue;
        $this->CountryCountinentID = $countryCountinentID;
    }
    public function getCountryId(){
        return $this->countryId;
    }
    public function getCountryName(){
        return $this->CountryName;
    }
    public function getCountryPopulation(){
        return $this->CountryPopulation;
    }

    public function getCountryLangue(){
        return $this->getcountrylangue();
    }
    public function getCountryCountinentID(){
        return $this->CountryCountinentID;
    }

//    setters

    public function setCountryId($countryId){
        $this->countryId = $countryId;
    }
    public function setCountryName($countryName){
        $this->CountryName = $countryName;
    }
    public function setCountryPopulation($countryPopulation){
        $this->countryPopulation = $countryPopulation;
    }
    public function setCountrylangue($countrylangue){
        $this->countrylangue = $countrylangue;
    }
    public function setCountryCountinentID($countryCountinentID){
        $this->countryCountinentID = $countryCountinentID;
    }

}


?>