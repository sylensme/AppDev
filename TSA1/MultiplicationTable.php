<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #eafcff;
            text-align: center;
            padding: 30px;
        }

        h1{
            margin-bottom: 30px;
            font-size: 50px;
            color: #004d66;
        }

        table{
            margin: auto;
            border-collapse: collapse;
        }

        td{
            width: 60px;
            height: 60px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            border: 2px solid #ffffff;
        }

        .blue{
            background-color: #4da6ff;
            color: white;
        }

        .mint{
            background-color: #98ffcc;
            color: #003333;
        }

    </style>

</head>
<body>

    <h1>Multiplication Table</h1>
    <table>
        <?php
            for($row = 0; $row <= 10; $row++){

                echo "<tr>";

                for($col = 0; $col <= 10; $col++){
                    $result = $row * $col;
                    if(($row + $col) % 2 == 0){
                        $color = "mint";
                    } else {
                        $color = "blue";
                    }
                    echo "<td class='$color'>$result</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        function goBack(){
            window.location.href = "index.php";
        }
    </script>
</body>
</html>