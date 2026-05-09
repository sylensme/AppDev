<?php
$inputValue = 3;
$mmValue = $inputValue * 10;
$cmFromDm = $inputValue * 10;
$cmFromM = $inputValue * 100;
$mFromKm = $inputValue * 1000;
$inchValue = $inputValue * 12;
$feetValue = $inputValue * 3;
$yardsFromChain = $inputValue * 22;
$yardsFromFurlong = $inputValue * 220;
$yardsFromMile = $inputValue * 1760;
$inchFromMm = $inputValue * 0.03937;
$inchFromCm = $inputValue * 0.39370;
$inchFromM = $inputValue * 39.37008;
$feetFromM = $inputValue * 3.28084;
$yardFromM = $inputValue * 1.09361;
$yardFromKm = $inputValue * 1093.6133;
$mileFromKm = $inputValue * 0.62137;
$cmFromInch = $inputValue * 2.54;
$cmFromFoot = $inputValue * 30.48;
$cmFromYard = $inputValue * 91.44;
$meterFromYard = $inputValue * 0.9144;
$meterFromMile = $inputValue * 1609.344;
$kmFromMile = $inputValue * 1.609344;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Conversion Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 30px;
        }
        .container {
            width: 1000px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            table-layout: fixed;
        }
        th {
            background-color: yellow;
            border: 1px solid #777;
            padding: 10px;
            font-size: 18px;
            text-align: center;
        }
        td {
            border: 1px solid #777;
            padding: 8px;
            font-size: 16px;
        }
        .equal {
            width: 20px;
            text-align: center;
            font-weight: bold;
            padding: 0;
        }
        .left-col {
            width: 30%;
        }
        .right-col {
            width: 20%;
        }
        .back-btn {
            display: inline-block;
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
<table>
    <tr>
        <th colspan="6">METRIC CONVERSIONS</th>
    </tr>
    <tr>
        <td class="left-col"><?= $inputValue ?> centimetre</td>
        <td class="equal">=</td>
        <td><?= $mmValue ?> millimetres</td>
        <td class="right-col"><?= $inputValue ?> cm</td>
        <td class="equal">=</td>
        <td><?= $mmValue ?> mm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> decimetre</td>
        <td class="equal">=</td>
        <td><?= $cmFromDm ?> centimetres</td>
        <td><?= $inputValue ?> dm</td>
        <td class="equal">=</td>
        <td><?= $cmFromDm ?> cm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> metre</td>
        <td class="equal">=</td>
        <td><?= $cmFromM ?> centimetres</td>
        <td><?= $inputValue ?> m</td>
        <td class="equal">=</td>
        <td><?= $cmFromM ?> cm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> kilometre</td>
        <td class="equal">=</td>
        <td><?= $mFromKm ?> metres</td>
        <td><?= $inputValue ?> km</td>
        <td class="equal">=</td>
        <td><?= $mFromKm ?> m</td>
    </tr>
</table>
<table>
    <tr>
        <th colspan="6">IMPERIAL CONVERSIONS</th>
    </tr>
    <tr>
        <td><?= $inputValue ?> foot</td>
        <td class="equal">=</td>
        <td><?= $inchValue ?> inches</td>
        <td><?= $inputValue ?> ft</td>
        <td class="equal">=</td>
        <td><?= $inchValue ?> in</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> yard</td>
        <td class="equal">=</td>
        <td><?= $feetValue ?> feet</td>
        <td><?= $inputValue ?> yd</td>
        <td class="equal">=</td>
        <td><?= $feetValue ?> ft</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> chain</td>
        <td class="equal">=</td>
        <td><?= $yardsFromChain ?> yards</td>
        <td><?= $inputValue ?> ch</td>
        <td class="equal">=</td>
        <td><?= $yardsFromChain ?> yd</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> furlong</td>
        <td class="equal">=</td>
        <td><?= $yardsFromFurlong ?> yards</td>
        <td><?= $inputValue ?> fur</td>
        <td class="equal">=</td>
        <td><?= $yardsFromFurlong ?> yd</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> mile</td>
        <td class="equal">=</td>
        <td><?= $yardsFromMile ?> yards</td>
        <td><?= $inputValue ?> mi</td>
        <td class="equal">=</td>
        <td><?= $yardsFromMile ?> yd</td>
    </tr>
</table>
<table>
    <tr>
        <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
    </tr>
    <tr>
        <td><?= $inputValue ?> millimetre</td>
        <td class="equal">=</td>
        <td><?= $inchFromMm ?> inches</td>
        <td><?= $inputValue ?> mm</td>
        <td class="equal">=</td>
        <td><?= $inchFromMm ?> in</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> centimetre</td>
        <td class="equal">=</td>
        <td><?= $inchFromCm ?> inches</td>
        <td><?= $inputValue ?> cm</td>
        <td class="equal">=</td>
        <td><?= $inchFromCm ?> in</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> metre</td>
        <td class="equal">=</td>
        <td><?= $inchFromM ?> inches</td>
        <td><?= $inputValue ?> m</td>
        <td class="equal">=</td>
        <td><?= $inchFromM ?> in</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> metre</td>
        <td class="equal">=</td>
        <td><?= $feetFromM ?> feet</td>
        <td><?= $inputValue ?> m</td>
        <td class="equal">=</td>
        <td><?= $feetFromM ?> ft</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> metre</td>
        <td class="equal">=</td>
        <td><?= $yardFromM ?> yards</td>
        <td><?= $inputValue ?> m</td>
        <td class="equal">=</td>
        <td><?= $yardFromM ?> yd</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> kilometre</td>
        <td class="equal">=</td>
        <td><?= $yardFromKm ?> yards</td>
        <td><?= $inputValue ?> km</td>
        <td class="equal">=</td>
        <td><?= $yardFromKm ?> yd</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> kilometre</td>
        <td class="equal">=</td>
        <td><?= $mileFromKm ?> miles</td>
        <td><?= $inputValue ?> km</td>
        <td class="equal">=</td>
        <td><?= $mileFromKm ?> mi</td>
    </tr>
</table>
<table>
    <tr>
        <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
    </tr>
    <tr>
        <td><?= $inputValue ?> inch</td>
        <td class="equal">=</td>
        <td><?= $cmFromInch ?> centimetres</td>
        <td><?= $inputValue ?> in</td>
        <td class="equal">=</td>
        <td><?= $cmFromInch ?> cm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> foot</td>
        <td class="equal">=</td>
        <td><?= $cmFromFoot ?> centimetres</td>
        <td><?= $inputValue ?> ft</td>
        <td class="equal">=</td>
        <td><?= $cmFromFoot ?> cm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> yard</td>
        <td class="equal">=</td>
        <td><?= $cmFromYard ?> centimetres</td>
        <td><?= $inputValue ?> yd</td>
        <td class="equal">=</td>
        <td><?= $cmFromYard ?> cm</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> yard</td>
        <td class="equal">=</td>
        <td><?= $meterFromYard ?> metres</td>
        <td><?= $inputValue ?> yd</td>
        <td class="equal">=</td>
        <td><?= $meterFromYard ?> m</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> mile</td>
        <td class="equal">=</td>
        <td><?= $meterFromMile ?> metres</td>
        <td><?= $inputValue ?> mi</td>
        <td class="equal">=</td>
        <td><?= $meterFromMile ?> m</td>
    </tr>
    <tr>
        <td><?= $inputValue ?> mile</td>
        <td class="equal">=</td>
        <td><?= $kmFromMile ?> kilometres</td>
        <td><?= $inputValue ?> mi</td>
        <td class="equal">=</td>
        <td><?= $kmFromMile ?> km</td>
    </tr>
</table>
<a href="index.php" class="back-btn">Back to Home</a>
</div>
</body>
</html> 

  
