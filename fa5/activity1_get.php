<?php

$firstname = "";
$middlename = "";
$lastname = "";
$dob = "";
$address = "";

if(isset($_GET["submit"])) {

    $firstname = $_GET["firstname"];
    $middlename = $_GET["middlename"];
    $lastname = $_GET["lastname"];
    $dob = $_GET["dob"];
    $address = $_GET["address"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>GET Method</h1>
    </div>

    <div class="activity-card">

        <form method="get">

            <p>
                First Name<br>
                <input type="text" name="firstname" required>
            </p>

            <p>
                Middle Name<br>
                <input type="text" name="middlename" required>
            </p>

            <p>
                Last Name<br>
                <input type="text" name="lastname" required>
            </p>

            <p>
                Date of Birth<br>
                <input type="date" name="dob" required>
            </p>

            <p>
                Address<br>
                <textarea name="address" required></textarea>
            </p>

            <button type="submit" name="submit">
                Submit
            </button>

        </form>

 
    </div>

</div>

</body>
</html>