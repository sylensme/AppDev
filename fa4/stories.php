<?php require '../component/header.php'; ?>

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

    .story-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .story-row {
        display: flex;
        width: 100%;
        gap: 20px;
        margin-bottom: 20px;
    }

    .story-column {
        flex: 1;
        border: 1px solid #bbdefb;
        border-radius: 8px;
        padding: 20px;
        overflow-y: auto;
        background-color: #f9fbff;
    }

    .story-column h2 {
        color: #1565c0;
        font-size: 16px;
        margin-bottom: 12px;
    }

    .story-column p {
        font-size: 14px;
        color: #444;
        line-height: 1.6;
    }
</style>

<div class="page-wrapper">
    <div class="story-container">
        <div class="story-row">
            <div class="story-column">
                <?php include '../component/story1.php'; ?>
            </div>
            <div class="story-column">
                <?php include '../component/story2.php'; ?>
            </div>
            <div class="story-column">
                <?php include '../component/story3.php'; ?>
            </div>
            <div class="story-column">
                <?php include '../component/story4.php'; ?>
            </div>
            <div class="story-column">
                <?php include '../component/story5.php'; ?>
            </div>
        </div>

        <div class="button-footer">
            <a href="../index.php" class="btn-back">
                Return to Home
            </a>
        </div>
    </div>
</div>

<?php require '../component/footer.php'; ?>
