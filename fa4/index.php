<?php require ('header.php'); ?>

<style>
body {
    align-items: center;
}

.container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 350px;
}

h1 {
    color: #333;
    margin-bottom: 10px;
    font-size: 22px;
}

.container p {
    color: #666;
    margin-bottom: 30px;
    font-size: 14px;
}

.btn-group {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.nav-btn {
    display: block;
    text-decoration: none;
    padding: 15px;
    border-radius: 8px;
    font-weight: 600;
    transition: background-color 0.2s, transform 0.1s;
    border: 1px solid transparent;
}

.btn-stories {
    background-color: #e3f2fd;
    color: #1565c0;
    border-color: #bbdefb;
}

.btn-stories:hover {
    background-color: #bbdefb;
}

.btn-string {
    background-color: #e8f5e9;
    color: #2e7d32;
    border-color: #c8e6c9;
}

.btn-string:hover {
    background-color: #c8e6c9;
}

.nav-btn:active {
    transform: scale(0.98);
}
</style>

<div class="container">
    <h1>Select a Task</h1>
    <div class="btn-group">
        <a href="./pages/stories.php" class="nav-btn btn-stories">
            1. Stories
        </a>
        <a href="./pages/string_function.php" class="nav-btn btn-string">
            2. String Function
        </a>
    </div>
</div>

<?php require ('./component/footer.php'); ?>