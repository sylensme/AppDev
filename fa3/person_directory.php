<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Directory</title>
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
        $members = [
            ["name" => "Killua Zoldyck",  "images" => "https://static.wikia.nocookie.net/hunterxhunter/images/b/bd/HxH2011_EP147_Killua_Portrait.png/revision/latest/scale-to-width-down/1000?cb=20230904181904","age" => 12, "birthday" => "July 7", "contact" => "+63-912-345-0001"],
            ["name" => "Gon Freecss",     "images" => "https://static.wikia.nocookie.net/hunterxhunter/images/3/3e/HxH2011_EP147_Gon_Portrait.png/revision/latest?cb=20230904181801", "age" => 12, "birthday" => "May 5", "contact" => "+63-912-345-0002"],
            ["name" => "Kento Nanami",    "images" => "data:image/webp;base64,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", "age" => 28, "birthday" => "July 3", "contact" => "+63-917-456-0003"],
            ["name" => "Ryomen Sukuna",   "images" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVhI9BtkEaWQt1V_QjrwjLcouac-JQGwGMNa_F7uaHV1AnG-kJo4Sop-r7FgYMSFPHU2Yt41z7hIaXffsCrglUyXmWbOY3xxolavq7Jn3o&s=10", "age" => 1000,"birthday" => "Unknown", "contact" => "+63-917-456-0004"],
            ["name" => "Monkey D. Luffy", "images" => "https://static.wikitide.net/deathbattlewiki/2/28/Portrait.monkeydluffy.png", "age" => 19, "birthday" => "May 5",       "contact" => "+63-918-567-0005"],
            ["name" => "Vinsmoke Sanji",  "images" => "data:image/webp;base64,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", "age" => 21, "birthday" => "March 2", "contact" => "+63-918-567-0006"],
            ["name" => "Asta",            "images" => "https://static.wikia.nocookie.net/blackclover/images/9/98/Asta_profile.png/revision/latest?cb=20220731212646", "age" => 17, "birthday" => "October 4", "contact" => "+63-919-678-0007"],
            ["name" => "Yuno",            "images" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSPLqPVWqzz89247f_IoZhU-HVMLssKnvG9WWH_x1hAGLIWm8zD21-n-gsYbc6KXBJoKTxSP3cQekX1A_ltqAWAF5y4uQHpd60gXq7Q0pbng&s=10", "age" => 17, "birthday" => "January 5", "contact" => "+63-919-678-0008"],
            ["name" => "Ichigo Kurosaki", "images" => "https://upload.wikimedia.org/wikipedia/en/1/1e/IchigoKurosakiBleach.jpg", "age" => 17, "birthday" => "July 15", "contact" => "+63-920-789-0009"],
            ["name" => "Rukia Kuchiki",   "images" => "data:image/webp;base64,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", "age" => 150, "birthday" => "January 14", "contact" => "+63-920-789-0010"],
        ];

        usort($members, function($x, $y) {
            return strcmp($x['name'], $y['name']);
        });
    ?>

    <div class="page-wrapper">
        <h1>Person Directory</h1>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rowNum = 1;
                foreach ($members as $entry) {
                    echo "<tr>";
                    echo "<td>" . $rowNum++ . "</td>";
                    echo "<td>" . $entry['name'] . "</td>";
                    echo "<td><img src='" . $entry['images'] . "' alt='" . $entry['name'] . "' style='width:150px; height:150px; object-fit:cover; border:2px solid #79b84a; display:block; margin:0 auto;'></td>";
                    echo "<td>" . $entry['age'] . "</td>";
                    echo "<td>" . $entry['birthday'] . "</td>";
                    echo "<td>" . $entry['contact'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="index.php" class="back-btn">Return</a>
    </div>
</body>

</html>
