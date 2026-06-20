<?php

session_start();

$_SESSION["color1"] = $_POST["color1"];
$_SESSION["color2"] = $_POST["color2"];
$_SESSION["color3"] = $_POST["color3"];
$_SESSION["color4"] = $_POST["color4"];
$_SESSION["color5"] = $_POST["color5"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>My Favorite Colors</h1>
    </div>

    <div class="activity-card">

        <ol>

            <li style="color: <?php echo $_SESSION["color1"]; ?>;">
                <?php echo $_SESSION["color1"]; ?>
            </li>

            <li style="color: <?php echo $_SESSION["color2"]; ?>;">
                <?php echo $_SESSION["color2"]; ?>
            </li>

            <li style="color: <?php echo $_SESSION["color3"]; ?>;">
                <?php echo $_SESSION["color3"]; ?>
            </li>

            <li style="color: <?php echo $_SESSION["color4"]; ?>;">
                <?php echo $_SESSION["color4"]; ?>
            </li>

            <li style="color: <?php echo $_SESSION["color5"]; ?>;">
                <?php echo $_SESSION["color5"]; ?>
            </li>

        </ol>

    </div>

</div>

</body>
</html>