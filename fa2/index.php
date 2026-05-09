<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Assessment Hub</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }



        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 22px;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .nav-btn {
            display: block;
            text-decoration: none;
            padding: 15px;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.2s, transform 0.1s;
            border: 1px solid transparent;
        }

        .btn-convert {
            background-color: #e3f2fd;
            color: #1565c0;
            border-color: #bbdefb;
        }
        .btn-convert:hover {
            background-color: #bbdefb;
        }
        .btn-grade {
            background-color: #e8f5e9;
            color: #2e7d32;
            border-color: #c8e6c9;
        }
        .btn-grade:hover {
            background-color: #c8e6c9;
        }
        .btn-loop {
            background-color: #fff3e0;
            color: #ef6c00;
            border-color: #ffe0b2;
        }
        .btn-loop:hover {
            background-color: #ffe0b2;
        }
        .nav-btn:active {
            transform: scale(0.98);
        }
    </style>

</head>
<body>

    <div class="container">
        <h1>Select Task</h1>
        <div class="btn-group">
            <a href="length_conversion.php" class="nav-btn btn-convert">
                1. Length Conversion
            </a>
            <a href="grade_ranking.php" class="nav-btn btn-grade">
                2. Grade Ranking
            </a>

            <a href="decimal_combinations.php" class="nav-btn btn-loop">
                3. Decimal Combinations
            </a>
        </div>
    </div>

</body>
</html>