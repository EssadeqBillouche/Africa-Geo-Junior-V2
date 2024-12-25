<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Insights</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-light: #f8f9fa;
            --text-muted: #6c757d;
        }

        body {
            background-color: #f4f7fa;
            font-family: 'Inter', 'Arial', sans-serif;
            color: var(--primary-color);
        }

        .dashboard-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-top: 30px;
        }

        .country-card {
            border: none;
            border-radius: 12px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .country-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .country-card-header {
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .country-card-header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .country-flag {
            max-width: 50px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .country-card-body {
            padding: 20px;
            background-color: var(--background-light);
        }

        .stat-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .stat-icon {
            color: var(--secondary-color);
            margin-right: 15px;
            font-size: 1.5rem;
            width: 40px;
            text-align: center;
        }

        .stat-label {
            font-weight: 600;
            color: var(--text-muted);
            margin-right: 10px;
            min-width: 100px;
        }

        .stat-value {
            font-weight: 700;
        }

        .country-badges {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .badge-custom {
            padding: 6px 12px;
            font-weight: 600;
            border-radius: 20px;
        }

        .data-source {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 15px;
            text-align: right;
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">

            <?php
            // Database connection
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'africadataexplorer';

            $connection = mysqli_connect($host, $user, $password, $database);

            // Check connection
            if (!$connection) {
                die('Database connection failed: ' . mysqli_connect_error());
            }

            // Query to fetch countries
            $query = "SELECT name, population,  langue FROM countries";
            $result = mysqli_query($connection, $query);

            // Check if query was successful
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4">';
                    echo '  <div class="card country-card">';
                    echo '      <div class="country-card-header">';
                    echo '          <h3>' . $row['name'] . '</h3>';
                    // echo '          <img src="' . $row['flag_url'] . '" alt="' . $row['name'] . ' Flag" class="country-flag">';
                    echo '      </div>';
                    echo '      <div class="country-card-body">';
                    echo '          <div class="stat-row">';
                    echo '              <div class="stat-icon"><i class="fas fa-users"></i></div>';
                    echo '              <div class="stat-label">Population</div>';
                    echo '              <div class="stat-value">' . $row['population'] . '</div>';
                    echo '          </div>';
                    echo '          <div class="stat-row">';
                    echo '              <div class="stat-icon"><i class="fas fa-globe"></i></div>';
                    echo '              <div class="stat-label">Continent</div>';
                    echo '              <div class="stat-value">' . 'AFRICA' . '</div>';
                    echo '          </div>';
                    echo '          <div class="stat-row">';
                    echo '              <div class="stat-icon"><i class="fas fa-language"></i></div>';
                    echo '              <div class="stat-label">Languages</div>';
                    echo '              <div class="stat-value">' . $row['langue'] . '</div>';
                    echo '          </div>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-danger">Error fetching data: ' . mysqli_error($connection) . '</p>';
            }

            // Close database connection
            mysqli_close($connection);
            ?>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
