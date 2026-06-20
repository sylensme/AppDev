<?php $pageTitle = 'Fruit Directory'; require("../component/header.php"); ?>
<?php
$fruits = [
    [
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=200",
        "name" => "Apple",
        "desc" => "Crisp and sweet",
        "facts" => "Apples are a good source of fiber and vitamin C."
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKdaZ0RQ6GuW8U0qe7S6E2dwAW-gzzOSPg0Oyjn-tAy4QNHPHI91VLaKeTk_X5BKCQXORHtfe4SA2gtrdzF3Qw-bwoPZKEidvN5ZfukKzY&s=10",
        "name" => "Avocado",
        "desc" => "Creamy and rich",
        "facts" => "Avocados are technically single-seeded berries and are high in healthy monounsaturated fats."
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH2oponPSYe0xZ5iPdmhFFyWPUITkAXF-ft2Oh6Izl8yul2sw_IISJSeJHFeNlNqYsvmaFN0hsMzkecD_r2Q0w-Vd_oD7Kf7IiWGukG-RPsw&s=10",
        "name" => "Orange",
        "desc" => "High in Vitamin C",
        "facts" => "Oranges are exceptionally high in vitamin C which boosts the immune system."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=200",
        "name" => "Strawberry",
        "desc" => "Sweet and tangy",
        "facts" => "Strawberries are packed with antioxidants and manganese."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1596363505729-4190a9506133?w=200",
        "name" => "Blueberry",
        "desc" => "Tiny superfood",
        "facts" => "Blueberries have one of the highest antioxidant levels among all fruits."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1528825871115-3581a5387919?w=200",
        "name" => "Banana",
        "desc" => "Creamy and sweet",
        "facts" => "Bananas are technically berries and grow on large herbaceous flowering plants."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=200",
        "name" => "Pineapple",
        "desc" => "Tropical and spiky",
        "facts" => "Pineapples contain bromelain, an enzyme that aids in digestion."
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwgrR4XVHzHDBpQwve7SdkbymDNB_8mfttUwC5ihzvRoYaa8B8cM31USnOCDnC9BZ3s3xhzX5wwN-vneH3tZw4OCQZpjXGX5HqMv0UyyLNnw&s=10",
        "name" => "Kiwi",
        "desc" => "Fuzzy and green",
        "facts" => "Kiwis contain more vitamin C per gram than oranges."
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT287l9cE-yC4quTy1r2hXqXReBvyl4CifcMQjqqAkYJDrU47C22jLRQchfB39dFczuk32dXyo4QP9U3foJIir7dID06gGFinzJLyZOyRgo2Q&s=10",
        "name" => "Mango",
        "desc" => "The king of fruits",
        "facts" => "Mangoes are related to cashews and pistachios, belonging to the same family."
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Fk3AAZ4L2a3JQ5NSJxoPzijbWFmnpq-7BTFMyYD_xrpF8rCOVzB9mqzBexat83Dz_k0EsB90QP6quEH6IO3JmjAJBII0RlB0iIc6mjW2&s=10", 
        "name" => "Watermelon",
        "desc" => "Hydrating summer fruit",
        "facts" => "Watermelon is 92% water, making it incredibly hydrating."
    ]
];
            
        usort($fruits, function($a, $b) {
             return strcmp($a['name'], $b['name']);
         });
    ?>

<div class="container">
    <div class="directory-container">
        <table class="directory-table">
            <thead>
                <tr>
                    <th colspan="4">Fruits</th>
                </tr>
                <tr class=" table-header">
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($fruits as $fruit) {
                    echo "<tr>";
                    echo "<td><img src='" . $fruit['image'] . "' alt='" . $fruit['name'] . "' class='table-img'></td>";
                    echo "<td>" . $fruit['name'] . "</td>";
                    echo "<td>" . $fruit['desc'] . "</td>";
                    echo "<td>" . $fruit['facts'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
    <div class="button-card">
        <a href="../index.php" class="button-link">Back to home</a>
    </div>
</div>



<?php require("../component/footer.php"); ?>