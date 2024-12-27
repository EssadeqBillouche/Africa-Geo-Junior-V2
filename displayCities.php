<?php
require_once "databaseConnaction.php";
?>

<?php
$country_id = isset($_GET['country']) ? $_GET['country'] : 0;

// Fetch cities for the given country
$query = "SELECT * FROM cities WHERE country_id = $country_id";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: Arial, sans-serif;
        }
        .city-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #ffffff;
            padding: 20px;
        }
        .city-card-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .city-card-body {
            font-size: 1rem;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Cities</h1>
        <div class="row">
           
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Back to Countries</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
mysqli_close($connection);
?>
