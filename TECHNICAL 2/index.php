<?php
$studioTitle = "Select a Task";
$studioSubtitle = " ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Assessment Studio</title>
    <style>
    html,
    body {
        min-height: 100%;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px 18px;
        font-family: 'Segoe UI', Arial, sans-serif;
        background: radial-gradient(circle at top left, #151515 0%, #040404 72%);
        color: #f7f3e8;
    }

    .shell {
        width: 100%;
        max-width: 880px;
        margin: auto;
        padding: 42px 24px;
    }

    .hero-card {
        background: rgba(255, 255, 255, 0.04);
        border-radius: 20px;
        box-shadow: 0 24px 48px rgba(0, 0, 0, 0.45);
        padding: 40px 34px;
        text-align: center;
        border: 1px solid rgba(255, 209, 93, 0.18);
    }

    .badge {
        display: inline-block;
        padding: 12px 20px;
        border-radius: 999px;
        background-color: #b79344;
        color: #040404;
        font-size: 0.85rem;
        letter-spacing: 0.06em;
        font-weight: 800;
        margin-bottom: 18px;
    }

    h1 {
        margin: 0;
        font-size: 2.6rem;
        letter-spacing: -0.04em;
        color: #f9f1dc;
    }

    p {
        margin: 18px auto 32px;
        max-width: 700px;
        color: #cfc6ae;
        line-height: 1.75;
    }

    .nav-grid {
        display: grid;
        gap: 16px;
    }

    .nav-link {
        display: block;
        padding: 20px 24px;
        border-radius: 16px;
        text-decoration: none;
        font-weight: 700;
        transition: transform 0.18s ease, box-shadow 0.18s ease;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.03);
        color: #f7f3e8;
    }

    .nav-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 36px rgba(0, 0, 0, 0.35);
        border-color: rgba(215, 169, 84, 0.5);
    }

    .nav-link.convert {
        background: rgba(183, 147, 68, 0.18);
        color: #fff7d8;
    }

    .nav-link.grade {
        background: rgba(183, 147, 68, 0.18);
        color: #fff7d8;
    }

    .nav-link.sequence {
        background: rgba(183, 147, 68, 0.18);
        color: #fff7d8;
    }
    </style>
</head>

<body>
    <div class="shell">
        <div class="hero-card">
            <h1><?= $studioTitle ?></h1>
            <p><?= $studioSubtitle ?></p>
            <div class="nav-grid">
                <a href="./pages/directory.php" class="nav-link convert">Fruit Directory</a>
                <a href="./pages/volumeOfShapes.php" class="nav-link grade">Volume of Shapes</a>
                <a href="./pages/resume.php" class="nav-link sequence">Resume</a>
            </div>
        </div>
    </div>
</body>

</html>