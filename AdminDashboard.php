<?php
require_once "addContinent.php";
require_once "addCountry.php";
require_once "addCity.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <!-- Header with Search and Logout -->
    <div class="row bg-light py-3 px-4 mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Location Admin Dashboard</h2>
            <div class="d-flex align-items-center gap-3">
                <div class="input-group" style="width: 300px;">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4" id="locationTabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#continents">Continents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#countries">Countries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#cities">Cities</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Continents Tab -->
            <div class="tab-pane fade show active" id="continents">
                <div class="row">
                    <!-- Add New Continent Form -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Add New Continent</h5>
                            </div>
                            <div class="card-body">
                                <form action="addContinent.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Continent Name</label>
                                        <input type="text" class="form-control" name="continent_name" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="addContinentSubmit">Save Continent</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Existing Continents -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Existing Continents</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <?php
                                    $showObject = new Continent();
                                    $results = $showObject->showAllContinents();
                                    foreach ($results as $result) {
                                        echo '<div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">'.htmlspecialchars($result["Continent_nom"]).'</h5>
                                                <div class="mt-2">
                                                    <a href="addContinent.php?='.htmlspecialchars($result["Continent_id"]).'" class="btn btn-sm btn-warning me-2">Edit</a>
                                                    <a href="addContinent.php?DeleteContinent='.htmlspecialchars($result["Continent_id"]).'" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Countries Tab -->
            <div class="tab-pane fade" id="countries">
                <div class="row">
                    <!-- Add New Country Form -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Add New Country</h5>
                            </div>
                            <div class="card-body">
                                <form action="addCountry.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Country Name</label>
                                        <input type="text" class="form-control" name="country_name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Country Population</label>
                                        <input type="text" class="form-control" name="country_Population" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Longue</label>
                                        <input type="text" class="form-control" name="country_Longue" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Continent</label>
                                        <select class="form-select" name="continent_id" required>
                                            <option value="">Select Continent</option>
                                            <?php
                                            $countinentObj = new Continent();
                                            $results = $countinentObj->showAllContinents();
                                            foreach ($results as $result) {
                                                echo '<option value="'.$result['Continent_id'].'">'.$result['Continent_nom'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submitCountry" >Save Country</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Existing Countries -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Existing Countries</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <?php
                                    $CountryObject = new country();
                                    $results = $CountryObject->showAllCountries();
                                    var_dump($results);
                                    foreach ($results as $result) {
                                    echo '<div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">'.htmlspecialchars($result["pays_nom"]).'</h5>
                                                <p class="card-text">Country Population : '.htmlspecialchars($result["population"]).'</p>
                                                <p class="card-text">country Languge : '.htmlspecialchars($result["langue"]).'</p>
                                                <div class="mt-2">
                                                    <a href="addCountry.php?EditCountry='.htmlspecialchars($result["pays_id"]).'" class="btn btn-sm btn-warning me-2">Edit</a>
                                                    <a href="addCountry.php?deleteCountry='.htmlspecialchars($result["pays_id"]).'" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cities Tab -->
            <div class="tab-pane fade" id="cities">
                <div class="row">
                    <!-- Add New City Form -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Add New City</h5>
                            </div>

                            <div class="card-body">
                                <form action="addCity.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">City Name</label>
                                        <input type="text" class="form-control" name="cityName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="form-select" name="selectCountryForCity" required>
                                            <option value="">Select Country</option>
                                            <?php
                                            $newObj = new country();
                                            $results = $newObj->showAllCountries();
                                            foreach ($results as $result) {
                                                echo '<option value="'.$result['pays_id'].'">'.$result['pays_nom'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <select class="form-select" name="selectcityType" required>
                                            <option value="">Select Type</option>
                                            <option value="ville">city</option>
                                            <option value="capital">capital</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control" name="cityDescription" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="SubmitCity">Save City</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Existing Cities -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Existing Cities</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Sample City Cards -->
                                    <?php
                                    $newObj = new city();
                                    $results = $newObj->showAllCity();
                                    foreach ($results as $result) {
                                        $newObj = new country();
                                        $newObj = $newObj->getCountryNameById($result["fk_pays"]);
                                        $newObj["pays_nom"];
                                        echo '<div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">'.htmlspecialchars($result["ville_nom"]).'</h5>
                                                <p class="card-text">Country: '.$newObj["pays_nom"].'</p>
                                                <p class="card-text">description: '.htmlspecialchars($result["description"]).'</p>
                                                <p class="card-text">Type: '.htmlspecialchars($result["type"]).'</p>
                                                <div class="mt-2">
                                                    <a href="addCity.php?EditCity='.$result["ville_id"].'" class="btn btn-sm btn-warning me-2">Edit</a>
                                                    <a href="addCity.php?DeleteCity='.$result["ville_id"].'" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Paris</h5>
                                                <p class="card-text">Country: France</p>
                                                <p class="card-text">Population: 11,142,303</p>
                                                <div class="mt-2">
                                                    <a href="edit_city.php?id=2" class="btn btn-sm btn-warning me-2">Edit</a>
                                                    <a href="delete_city.php?id=2" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>