<?php
$combinations = "";
for ($i = 0; $i <= 99; $i++) {
    $formattedNumber = str_pad($i, 2, "0", STR_PAD_LEFT);
    if ($i == 99) {
        $combinations .= $formattedNumber;
    } else {
        $combinations .= $formattedNumber . ", ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Decimal Combinations</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 1000px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .output-box {
            border: 2px solid #1565c0;
            padding: 20px;
            font-size: 22px;
            line-height: 1.8;
            background-color: #f9fbff;
            word-wrap: break-word;
        }
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background-color: #1565c0;
            color: white;
            padding: 12px 18px;
            border-radius: 6px;
            font-weight: bold;
        }
        .back-btn:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Two-Digit Decimal Combinations</h1>
    <div class="output-box">
        <?= $combinations ?>
    </div>
    <a href="index.php" class="back-btn">Back to Home</a>
</div>
</body>
</html> 