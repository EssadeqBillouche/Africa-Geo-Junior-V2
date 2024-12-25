<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Africa Explorer</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="https://attic.sh/034ff8q0hf1wgelq89znjzphbai5" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->

    <style>
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
            background: linear-gradient(135deg, #3498db, #2980b9);
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
            color: #2c3e50;
        }

        .stat-icon {
            color: #3498db;
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

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="https://attic.sh/034ff8q0hf1wgelq89znjzphbai5" alt="">
                <h1 class="sitename">display Cities</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="active">Home<br></a></li>
                    <li><a href="addCity.php">ADD COUNTRY</a></li>
                    <li><a href="addCity.php">ADD City</a></li>
                    <li class="dropdown"><a href="addCity.php"><span>ADD country OR city</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="addCity.php">ADD COUNTRY</a></li>
                            <li><a href="addCity.php">ADD City</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>

    <main class="main">

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">

                    <?php
                    require_once 'databaseConnaction.php';
                    $query = "SELECT name, population, langue, id FROM countries";
                    $result = mysqli_query($connection, $query);
                    var_dump(mysqli_fetch_assoc($result));
                    var_dump(mysqli_fetch_assoc($result));
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-md-4">';
                            echo '  <div class="card country-card">';
                            echo '      <div class="country-card-header">';
                            echo '          <h3>' . $row['name'] . '</h3>';
                            echo '          <a href="displayCities.php?country=' . $row['id'] . '" class="btn btn-primary">Show All Cities</a>';
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
                            echo '              <div class="stat-value">AFRICA</div>';
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
        </section><!-- /Gallery Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Africa Explorer</strong> <span>All Rights Reserved</span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">CodeShogne</a> Distributed by <a href="https://themewagon.com">Africa Explorer</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>


    <!--  -->



</body>

</html>