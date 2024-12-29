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

if(isset($_POST['submitCountry'])){
    $countryName = $_POST['country_name'];
    $countryLongue = $_POST['country_Longue'];
    $countryPopulation = $_POST['country_Population'];
    $countryCountinent  = $_POST['continent_id'];

    $newCountry = new Country();
    $newCountry->addCountry($countryName, $countryPopulation,$countryLongue, $countryCountinent );
    header("location: AdminDashboard.php");

}
?>