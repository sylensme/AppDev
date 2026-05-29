<?php $pageTitle = 'Student Resume'; require("../component/header.php"); ?>

<div class="directory-container resume-shell">

    <div class="profile-card">
        <div class="profile-avatar">
            <div class="avatar-frame">
                <img src="../component/portfolio.jpg" alt="Profile Picture">
            </div>
        </div>

        <div class="profile-summary">
            <span class="eyebrow">Personal Information</span>
            <h2>Eugene Lloyd G. Matilac</h2>
            <p>Ambitious IT student and web developer with strong academic performance, practical technical skills, and
                experience in collaborative esports teamwork.</p>
            <div class="profile-meta">
                <div class="meta-item"><strong>University:</strong> Far Eastern University - Technology</div>
                <div class="meta-item"><strong>Degree:</strong> BS Information Technology with Specialization in Web and
                    Mobile App Development</div>
                <div class="meta-item"><strong>Location:</strong> San Juan, Metro Manila, Philippines</div>
                <div class="meta-item"><strong>Email:</strong> eugenematilac0@gmail.com</div>
                <div class="meta-item"><strong>Phone:</strong> +63 945 547 3811</div>
            </div>
        </div>
    </div>

    <div class="resume-options">
        <div class="section-panel">
            <a class="section-link" href="?page=objective">Career Objective</a>
            <a class="section-link" href="?page=education">Educational Attainment</a>
            <a class="section-link" href="?page=skills">Skills</a>
            <a class="section-link" href="?page=affiliation">Affiliation</a>
            <a class="section-link" href="?page=experience">Work Experience</a>
        </div>

        <div class="detail-panel">
            <?php
                if (isset($_GET['page'])) {
                    $file = __DIR__ . '/../component/' . $_GET['page'] . '.php';
                    if (file_exists($file)) {
                        include $file;
                    } else {
                        echo '<p>Section not available.</p>';
                    }
                } else {
                    include __DIR__ . '/../component/objective.php';
                }
            ?>
        </div>
    </div>

    <a href="../index.php" class="button-link">Return</a>
</div>

<?php require("../component/footer.php"); ?>