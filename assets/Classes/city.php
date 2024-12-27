<?php
class city{
    private $CityName;
    private $CityId;
    private $CityType;
    private $CityDescription;
    private $CityCountryID;

    function __construct($CityName,$CityId,$CityType,$CityDescription,$CityCountryID){
        $this->CityName = $CityName;
        $this->CityId = $CityId;
        $this->CityType = $CityType;
        $this->CityDescription = $CityDescription;
        $this->CityCountryID = $CityCountryID;
    }

    public function getCityName(){
        return $this->CityName;
    }
    public function getCityId(){
        return $this->CityId;
    }
    public function getCityType(){
        return $this->CityType;
    }
    public function getCityDescription(){
        return $this->CityDesctiption;
    }
    public function getCityCountryID()
    {
        return $this->CityCountryID;
    }
    public function setCityName($CityName){
        $this->CityName = $CityName;
    }
    public function setCityId($CityId){
        $this->CityId = $CityId;
    }
    public function setCityType($CityType){
        $this->CityType = $CityType;
    }
    public function setCityDescription($CityDescription){
        $this->CityDescription = $CityDescription;
    }
    public function setCityCountryID($CityCountryID){
        $this->CityCountryID = $CityCountryID;
    }
}


?>