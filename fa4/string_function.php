<?php 
    $personCollection = array(
        "ethan walker",
        "olivia parker",
        "noah bennett",
        "ava thompson",
        "liam carter",
        "sophia mitchell",
        "mason reed",
        "isabella flores",
        "logan cooper",
        "mia richards",
        "elijah bailey",
        "charlotte hayes",
        "jacob morgan",
        "amelia ward",
        "daniel brooks",
        "harper james",
        "michael ross",
        "evelyn price",
        "alexander gray",
        "scarlett cole"
    );

    function analyzeEntry($personName) {

        $characterQuantity = strlen($personName);

        $firstLetterCapitalized = ucfirst($personName);

        $vowelCharacters = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
        $vowelsReplaced = str_replace($vowelCharacters, '@', $personName);

        $lowerCaseAPosition = strpos($personName, 'a');
        if ($lowerCaseAPosition !== false) {
            $aCharacterLocation = $lowerCaseAPosition + 1;
        } else {
            $upperCaseAPosition = strpos($personName, 'A');
            $aCharacterLocation = ($upperCaseAPosition !== false) ? ($upperCaseAPosition + 1) : "Not found";
        }

        $reversedName = strrev($personName);

        return array(
            "original"         => $personName,
            "charCount"        => $characterQuantity,
            "capitalizedFirst" => $firstLetterCapitalized,
            "vowelsSwapped"    => $vowelsReplaced,
            "charAPosition"    => $aCharacterLocation,
            "reversedEntry"    => $reversedName
        );
    }
?>

<?php require('../component/header.php'); ?>

<style>
    body {
        align-items: flex-start;
    }

    .page-wrapper {
        width: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding: 40px 20px;
    }

    .string-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 1400px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .string-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .string-table th {
        background-color: #e3f2fd;
        color: #1565c0;
        font-weight: 700;
        font-size: 14px;
        padding: 14px 12px;
        text-align: center;
        border-bottom: 2px solid #bbdefb;
    }

    .string-table td {
        border-bottom: 1px solid #eee;
        padding: 12px;
        font-size: 14px;
        color: #333;
        vertical-align: middle;
        text-align: center;
    }

    .string-table tbody tr:hover {
        background-color: #f5f9ff;
    }
</style>

<div class="page-wrapper">
    <div class="string-container">
        <table class="string-table">
            <thead>
                <tr>
                    <th colspan="6" class="main-header">List of Names</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Number of characters</th>
                    <th>Uppercase first character</th>
                    <th>Replace vowels with @</th>
                    <th>Check position of character "a"</th>
                    <th>Reverse name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($personCollection as $currentPerson) {
                        $analysisResult = analyzeEntry($currentPerson);
                        echo "<tr>";
                        echo "<td>" . $analysisResult['original'] . "</td>";
                        echo "<td>" . $analysisResult['charCount'] . "</td>";
                        echo "<td>" . $analysisResult['capitalizedFirst'] . "</td>";
                        echo "<td>" . $analysisResult['vowelsSwapped'] . "</td>";
                        echo "<td>" . $analysisResult['charAPosition'] . "</td>";
                        echo "<td>" . $analysisResult['reversedEntry'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <div class="button-footer">
            <a href="../index.php" class="btn-back">
                Return to Home
            </a>
        </div>
    </div>
</div>

<?php require('../component/footer.php'); ?>
