<?php

if(isset($_POST["submit"])) {

    setcookie("firstname", $_POST["firstname"], time() + 10, "/");
    setcookie("middlename", $_POST["middlename"], time() + 20, "/");
    setcookie("lastname", $_POST["lastname"], time() + 30, "/");

    header("Refresh:0");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>Activity 2</h1>
        <p>Cookies Example</p>
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

            <button type="submit" name="submit">
                Save Cookies
            </button>

        </form>

        <br>

        <?php

        echo "<h2>Cookie Results</h2>";

        if(isset($_COOKIE["firstname"])) {
            echo "<p>First Name: " . $_COOKIE["firstname"] . "</p>";
        } else {
            echo "<p>First Name cookie not available yet.</p>";
        }

        if(isset($_COOKIE["middlename"])) {
            echo "<p>Middle Name: " . $_COOKIE["middlename"] . "</p>";
        } else {
            echo "<p>Middle Name cookie not available yet.</p>";
        }

        if(isset($_COOKIE["lastname"])) {
            echo "<p>Last Name: " . $_COOKIE["lastname"] . "</p>";
        } else {
            echo "<p>Last Name cookie not available yet.</p>";
        }

        ?>

    </div>

</div>

</body>
</html>