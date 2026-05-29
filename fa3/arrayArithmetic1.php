<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic with Array (With Functions)</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Times New Roman", serif;
            background-color: #eeeeee;
            padding: 40px;
        }

        .page-wrapper {
            width: 1000px;
            margin: auto;
        }

        h1 {
            display: inline-block;
            border: 3px solid #79b84a;
            background-color: white;
            padding: 18px 40px;
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 3px solid #79b84a;
        }

        th {
            background-color: #79b84a;
            color: white;
            font-weight: 700;
            font-size: 16px;
            padding: 16px 12px;
            text-align: center;
            border-bottom: 2px solid #5a9a30;
        }

        td {
            border-bottom: 1px solid #c8e6c9;
            padding: 14px 12px;
            font-size: 15px;
            color: #333;
            vertical-align: middle;
            text-align: center;
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

        .back-btn:hover { background-color: #0d47a1; }
    </style>
</head>

<body>
    <?php
        function compute_results($numA, $numB, $numC) {
            $total      = $numA + $numB + $numC;
            $remainder  = $numA - $numB - $numC;
            $multiplied = $numA * $numB * $numC;
            $divided    = ($numB != 0 && $numC != 0) ? ($numA / $numB) / $numC : 0;

            return [
                "Addition"       => $total,
                "Subtraction"    => $remainder,
                "Multiplication" => $multiplied,
                "Division"       => $divided
            ];
        }

        $val1 = 87;
        $val2 = 46;
        $val3 = 67;

        $output = compute_results($val1, $val2, $val3);
    ?>

    <div class="page-wrapper">
        <h1>Arithmetic with User Defined Function</h1>

        <table>
            <thead>
                <tr>
                    <th colspan="2">Parameters: <?php echo "$val1, $val2, $val3"; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($output as $label => $answer) {
                    echo "<tr>";
                    echo "<td style='text-align: left; font-weight: 600;'>" . $label . "</td>";
                    echo "<td>" . $answer . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="index.php" class="back-btn">Return</a>
    </div>
</body>

</html>
