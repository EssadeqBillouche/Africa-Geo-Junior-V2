<?php 
include("databaseConnaction.php");


$CountryName = $_POST['CountryName'];
$CountryPopulation = $_POST['CountryPopulation'];
$countryLanguage = $_POST['Language'];

$query = "INSERT INTO `countries`(`name`, `Population`, `Langue`, `continent_id`) VALUES ('$CountryName', '$CountryPopulation', '$countryLanguage', '1')";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("not working  " . mysqli_error($connection));
} else {
    header("Location: index.php?insert_msg=Your data has been added successfully");
    exit(); 
}
?>
