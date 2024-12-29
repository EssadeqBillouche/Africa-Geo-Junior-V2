<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});
class city{
    private $CityName;
    private $CityId;
    private $CityType;
    private $CityDescription;
    private $CityCountryID;

    private $CityConnaction;

    function __construct(){
        try {
            $Connaction = new DataBaseConnaction();
            $Connaction = $Connaction->getConnection();
            $this->CityConnaction = $Connaction;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }
//    methods

    public function AddCity($name,$type,$description,$countryID){
        $stmnt = $this->CityConnaction;
        $stmnt = $stmnt -> Prepare("INSERT INTO ville (ville_nom,description,type,fk_pays) VALUES (:name,:description,:type,:fk_pays)");
        $stmnt -> bindParam(':name',$name);
        $stmnt -> bindParam(':description',$description);
        $stmnt -> bindParam(':type',$type);
        $stmnt -> bindParam(':fk_pays',$countryID);
        $stmnt -> execute();
        header("Location: AdminDashboard.php");
    }
    public function ShowAllCity(){
        $stmnt = $this->CityConnaction;
        $stmnt = $stmnt ->prepare("SELECT * FROM ville");
        $stmnt -> execute();
        return $stmnt -> fetchAll();
    }
    public function EditCity(){

    }
    public function DeleteCity($cityID){
        try {
            var_dump($cityID);
            $sterm = $this->CityConnaction;
            $sterm = $sterm -> Prepare("DELETE FROM ville WHERE ville_id = :id");
            $sterm -> bindParam(':id',$cityID);
            $sterm -> execute();
            header("Location: AdminDashboard.php");
            exit();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
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