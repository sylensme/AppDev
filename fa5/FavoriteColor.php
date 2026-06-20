<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>Favorite Colors</h1>
        <p>Enter your 5 favorite colors</p>
    </div>

    <div class="activity-card">

        <form action="ResultColors.php" method="post">

            <p><input type="text" name="color1" placeholder="Color 1" required></p>
            <p><input type="text" name="color2" placeholder="Color 2" required></p>
            <p><input type="text" name="color3" placeholder="Color 3" required></p>
            <p><input type="text" name="color4" placeholder="Color 4" required></p>
            <p><input type="text" name="color5" placeholder="Color 5" required></p>

            <button type="submit">
                Send Colors
            </button>

        </form>

    </div>

</div>

</body>
</html>