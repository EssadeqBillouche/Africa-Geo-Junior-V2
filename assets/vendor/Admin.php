<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Admin Login</h5>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="login()">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4" id="mainContent" style="">
        <!-- Header with Search and Admin Info -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." id="searchInput" onkeyup="searchTables()">
                    <button class="btn btn-outline-secondary" type="button">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex align-items-center justify-content-end">
                    <div class="me-3">
                        <span class="d-inline-block bg-primary rounded-circle" style="width: 32px; height: 32px;">
                            <span class="text-white d-flex align-items-center justify-content-center h-100" id="adminInitial">A</span>
                        </span>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <span id="adminName">Admin</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="logout()">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Continent Management</h3>
                    <button class="btn btn-primary" onclick="showContinentModal()">Add Continent</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Continent Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="continentList">
                            <tr>
                                <td>North America</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-2" onclick="editContinent(this)">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteItem(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Countries Tab -->
            <div class="tab-pane fade" id="countries">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Country Management</h3>
                    <button class="btn btn-primary" onclick="showCountryModal()">Add Country</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Country Name</th>
                                <th>Code</th>
                                <th>Continent</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="countryList">
                            <tr>
                                <td>United States</td>
                                <td>US</td>
                                <td>North America</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-2" onclick="editCountry(this)">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteItem(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cities Tab -->
            <div class="tab-pane fade" id="cities">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>City Management</h3>
                    <button class="btn btn-primary" onclick="showCityModal()">Add City</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>City Name</th>
                                <th>Country</th>
                                <th>Population</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="cityList">
                            <tr>
                                <td>New York</td>
                                <td>United States</td>
                                <td>8.4M</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-2" onclick="editCity(this)">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteItem(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Continent Modal -->
    <div class="modal fade" id="continentModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add/Edit Continent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="continentForm">
                        <div class="mb-3">
                            <label class="form-label">Continent Name</label>
                            <input type="text" class="form-control" id="continentName" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveContinent()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Country Modal -->
    <div class="modal fade" id="countryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add/Edit Country</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="countryForm">
                        <div class="mb-3">
                            <label class="form-label">Country Name</label>
                            <input type="text" class="form-control" id="countryName" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country Code</label>
                            <input type="text" class="form-control" id="countryCode" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Continent</label>
                            <select class="form-select" id="countryContinent" required>
                                <option value="">Select Continent</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveCountry()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- City Modal -->
    <div class="modal fade" id="cityModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add/Edit City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="cityForm">
                        <div class="mb-3">
                            <label class="form-label">City Name</label>
                            <input type="text" class="form-control" id="cityName" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" id="cityCountry" required>
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Population</label>
                            <input type="text" class="form-control" id="cityPopulation" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveCity()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>