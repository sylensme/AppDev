<?php

$firstname = "";
$middlename = "";
$lastname = "";
$dob = "";
$address = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>POST Method</h1>
    </div>

    <div class="activity-card">

        <form method="post">

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

            <button type="submit">
                Submit
            </button>

        </form>

        <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>

        <hr>

        <h2>Submitted Information</h2>

        <p><strong>First Name:</strong> <?php echo $firstname; ?></p>
        <p><strong>Middle Name:</strong> <?php echo $middlename; ?></p>
        <p><strong>Last Name:</strong> <?php echo $lastname; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>

        <?php endif; ?>

    </div>

</div>

</body>
</html>