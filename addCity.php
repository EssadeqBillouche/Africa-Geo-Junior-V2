<?php
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/assets/Classes/';
    $file = $baseDir . $class . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("{$class} not found");
    }
});

if(isset($_POST["SubmitCity"])){
    $cityName = $_POST["cityName"];
    $countryId = $_POST["selectCountryForCity"];
    $cityType = $_POST["selectcityType"];
    $cityDescription = $_POST["cityDescription"];
    $objecCity = new City();
    $objecCity = $objecCity->addCity($cityName,  $cityType, $cityDescription,$countryId);
}

if(isset($_GET["DeleteCity"])){
    $id = $_GET["DeleteCity"];
    $objecCity = new City();
    $objecCity = $objecCity->DeleteCity($id);
}

?>