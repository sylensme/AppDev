<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formative 3</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            margin-bottom: 10px;
            font-size: 22px;
        }

        p {
            color: #666;
            font-size: 14px;
            margin-bottom: 25px;
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
            font-size: 14px;
            transition: background-color 0.2s, transform 0.1s;
            border: 1px solid transparent;
        }

        .nav-btn:active { transform: scale(0.98); }

        .btn-blue {
            background-color: #e3f2fd;
            color: #1565c0;
            border-color: #bbdefb;
        }

        .btn-blue:hover { background-color: #bbdefb; }

        .btn-green {
            background-color: #e8f5e9;
            color: #2e7d32;
            border-color: #c8e6c9;
        }

        .btn-green:hover { background-color: #c8e6c9; }

        .btn-orange {
            background-color: #fff3e0;
            color: #ef6c00;
            border-color: #ffe0b2;
        }

        .btn-orange:hover { background-color: #ffe0b2; }
    </style>
</head>

<body>
    <div class="container">
        <h1>Select Task</h1>
        <div class="btn-group">
            <a href="person_directory.php" class="nav-btn btn-blue">
                1. Person Directory
            </a>
            <a href="arrayArithmetic.php" class="nav-btn btn-green">
                2. Array Arithmetic Operations
            </a>
            <a href="arrayArithmetic1.php" class="nav-btn btn-orange">
                3. User-Defined Functions for Arithmetic Operations
            </a>
        </div>
    </div>
</body>

</html>
