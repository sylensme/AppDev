<?php
include("db_connection.php");

$sql = "SELECT * FROM dogs ORDER BY id ASC";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Dog Records</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="view">

<h2>Dog Records</h2>

<?php

$count = 1;

while($row = mysqli_fetch_assoc($result))
{

?>

<div class="card">

<h3>Dog <?php echo $count; ?></h3>

<p><strong>Name:</strong> <?php echo $row['name']; ?></p>

<p><strong>Breed:</strong> <?php echo $row['breed']; ?></p>

<p><strong>Age:</strong> <?php echo $row['age']; ?></p>

<p><strong>Address:</strong> <?php echo $row['address']; ?></p>

<p><strong>Color:</strong> <?php echo $row['color']; ?></p>

<p><strong>Height:</strong> <?php echo $row['height']; ?></p>

<p><strong>Weight:</strong> <?php echo $row['weight']; ?></p>

</div>

<?php

$count++;

}

?>

<a href="index.php" class="back">← Back to Menu</a>

</div>

</body>

</html>