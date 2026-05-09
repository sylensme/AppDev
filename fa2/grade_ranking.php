<?php
$firstName = "First Name";
$middleInitial = "MI.";
$lastName = "Lastname";
$grade = 95;
if ($grade >= 93 && $grade <= 100) {
    $ranking = "A";
} elseif ($grade >= 90 && $grade <= 92) {
    $ranking = "A-";
} elseif ($grade >= 87 && $grade <= 89) {
    $ranking = "B+";
} elseif ($grade >= 83 && $grade <= 86) {
    $ranking = "B";
} elseif ($grade >= 80 && $grade <= 82) {
    $ranking = "B-";
} elseif ($grade >= 77 && $grade <= 79) {
    $ranking = "C+";
} elseif ($grade >= 73 && $grade <= 76) {
    $ranking = "C";
} elseif ($grade >= 70 && $grade <= 72) {
    $ranking = "C-";
} elseif ($grade >= 67 && $grade <= 69) {
    $ranking = "D+";
} elseif ($grade >= 63 && $grade <= 66) {
    $ranking = "D";
} elseif ($grade >= 60 && $grade <= 62) {
    $ranking = "D-";
} else {
    $ranking = "F";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            background-color: #eeeeee;
            font-family: "Times New Roman", serif;
        }
        .container {
            width: 1000px;
            margin: auto;
        }
        .top-box {
            width: 600px;
            border: 3px solid #79b84a;
            padding: 18px 40px;
            font-size: 38px;
            font-weight: bold;
            background-color: white;
        }
        .content {
            display: flex;
            align-items: flex-start;
            gap: 60px;
            margin-top: 15px;
            margin-left: 150px;
        }
        .small-boxes {
            display: flex;
            gap: 60px;
        }
        .box {
            width: 180px;
            height: 180px;
            border: 3px solid #79b84a;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 42px;
            font-weight: bold;
        }
        .picture-box {
            width: 280px;
            height: 285px;
            border: 3px solid #79b84a;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .picture-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .back-btn {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background-color: #1565c0;
            color: white;
            padding: 12px 18px;
            border-radius: 6px;
            font-size: 18px;
            font-family: Arial, sans-serif;
        }
        .back-btn:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="top-box">
        Name: <?= $firstName ?> <?= $middleInitial ?> <?= $lastName ?>
    </div>
    <div class="content">
        <div class="small-boxes">
            <div class="box">
                <div>Rank:</div>
                <div><?= $ranking ?></div>
            </div>
            <div class="box">
                <div>Grade:</div>
                <div><?= $grade ?></div>
            </div>
        </div>
        <div class="picture-box">
            <img src="german.jpg" alt="Student Picture">
        </div>
    </div>
    <a href="index.php" class="back-btn">Back to Home</a>
</div>
</body>
</html> 