<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic No Functions</title>
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
        $numbers = [12, 28, 42, 30, 37, 29, 28, 61, 31, 67];

        $total      = $numbers[0];
        $remainder  = $numbers[0];
        $multiplied = $numbers[0];
        $divided    = $numbers[0];

        for ($index = 1; $index < 10; $index++) {
            $total      += $numbers[$index];
            $remainder  -= $numbers[$index];
            $multiplied *= $numbers[$index];
            $divided    /= $numbers[$index];
        }

        $numList = "";
        for ($index = 0; $index < 10; $index++) {
            $numList .= $numbers[$index];
            if ($index < 9) {
                $numList .= ", ";
            }
        }
    ?>

    <div class="page-wrapper">
        <h1>Arithmetic with Array</h1>

        <table>
            <thead>
                <tr>
                    <th colspan="2">Array list: <?php echo $numList; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left; font-weight: 600;">Addition</td>
                    <td><?php echo $total; ?></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-weight: 600;">Subtraction</td>
                    <td><?php echo $remainder; ?></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-weight: 600;">Multiplication</td>
                    <td><?php echo $multiplied; ?></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-weight: 600;">Division</td>
                    <td><?php echo $divided; ?></td>
                </tr>
            </tbody>
        </table>

        <a href="index.php" class="back-btn">Return</a>
    </div>
</body>

</html>
