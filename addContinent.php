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

try {
    if(isset($_POST["addCountient"]) && !empty($_POST["continent_name"])){
        $continentName = $_POST["continent_name"];
        $newContinent = new Continent();
        $newContinent->AddCountinet($continentName);
        header("Location: index.php");
    }else{
            echo "problem addCountient";
    }
} catch (\mysql_xdevapi\Exception $e) {
    echo $e->getMessage();
}

?>