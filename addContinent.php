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

    if (isset($_POST["addContinentSubmit"])) {
        $continentName = trim($_POST["continent_name"]);
        $newContinent = new Continent();
        $newContinent->AddContinent($continentName);
        header("Location: AdminDashboard.php");
        exit();
    }

    if(isset($_GET['Edit'])){
        $continentId = $_GET['Edit'];
        header("location: AdminDashboard.php");
        exit();
    }
    if(isset($_GET['DeleteContinent'])){
        $continentId = $_GET['DeleteContinent'];
        $newObj = new Continent();
        $newObj->DeleteContinent($continentId);
        header("location: AdminDashboard.php");
        exit();
    }
?>