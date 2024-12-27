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
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
