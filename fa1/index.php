<?php
 
$fullname = "Eugene Lloyd G. Matilac";
$location = "San Juan, Metro Manila, Philippines";
$phone = "+639455473811";
$email = "eugenematilac0@gmail.com";

$university = "Far Eastern University - Technology";
$degree = "Bachelor of Science in Information Technology with Specialization in Web and Mobile Application Development";
$gwa = "3.64/4.00";
$achievement = "CCSMA's Consistent Dean's Lister";
$location_univ = "Manila, Philippines";

$shs_school = "University of the East - Manila";
$shs_track = "Senior High School - Science, Technology, Engineering, and Mathematics";
$shs_achievement = "With Honors, 93% GWA";

$hs_school = "Saint John The Baptist Catholic School";
$hs_achievement = "With Honors, 91% GWA";

$club_name = "FIT iTamaraws Esports Club";
$club_role = "ESports Gaming Varsity Member";
$club_duration = "Sept. 2025 - Jan. 2026";

$cert1 = "Information Technology Specialist in Databases";
$cert2 = "Information Technology Specialist in Java";
$cert3 = "Information Technology Specialist in Python";
$cert4 = "Information Technology Specialist in JavaScript";
$cert_provider = "Certiport";

$technical_skills = "Basic Information Technology (Python), Prompt Engineer, C++, Java, Davinci Resolve, Troubleshooting Hardware, Node.js, HTML, CSS, Javascript, MySQL, React.js, Photoshop, Microsoft Suite, Google Workspace";

$interests = "Technology, Gaming, Anime, Music, Traveling, Fitness";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fullname; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1> Portfolio </h1>
        </header>



        <section class="profile-section">

            <div class="profile-image">
                <img src="portfolio.jpg" alt="<?php echo $fullname; ?>">

            </div>
            <div class="profile-info">
                <h1><?php echo $fullname; ?></h1>
                <p>📍 <?php echo $location; ?></p>
                <p>📱 <?php echo $phone; ?></p>
                <p>✉️ <?php echo $email; ?></p>
            </div>
        </section>

        <section class="section">
            <h2>EDUCATION</h2>

            <div class="education-item">
                <h3 class="school"><?php echo $university; ?></h3>
                <p class="location"><?php echo $location_univ; ?></p>
                <p class="degree"><?php echo $degree; ?></p>
              
                <ul>
                    <li>GWA: <?php echo $gwa; ?></li>
                    <li><?php echo $achievement; ?></li>
                    <li>Relevant Coursework: Computer Programming, User Design Fundamentals, Data Structures and
                        Algorithms, Web Design, Discrete Mathematics, Information Management</li>
                </ul>

            </div>
            <div class="education-item">
                <h3 class="school"><?php echo $shs_school; ?></h3>
                <p class="location"><?php echo $location_univ; ?></p>
                <p class="degree"><?php echo $shs_track; ?></p>
                <ul>
                    <li><?php echo $shs_achievement; ?></li>
                </ul>
            </div>
            <div class="education-item">
                <h3 class="school"><?php echo $hs_school; ?></h3>
                <p class="location"><?php echo $location_univ; ?></p>
                <p class="degree">High School</p>
                <ul>
                    <li><?php echo $hs_achievement; ?></li>
                </ul>
            </div>

        </section>
        <section class="section">
            <h2>EXTRA-CURRICULAR</h2>
            <div class="education-item">
                <h3 class="school"><?php echo $club_name; ?></h3>
                <p class="location"><?php echo $location_univ; ?></p>
                <p class="degree"><?php echo $club_role; ?> | <?php echo $club_duration; ?></p>

                <ul>
                    <li>Conducted structured analysis of game mechanics, meta developments, and competitive strategies
                        to achieve and maintain target performance rankings</li>
                    <li>Utilized gameplay data, match reviews, and opponent analysis to inform strategic decision-making
                        and improve execution quality</li>
                    <li>Maintained a rigorous training schedule, participating in 5+ scrimmages per week alongside
                        consistent daily practice and performance benchmarks</li>
                </ul>

            </div>

        </section>

        <section class="section">

            <h2>CERTIFICATIONS</h2>
            <div class="certification-item">
                <h3><?php echo $cert_provider; ?></h3>
                <ul>
                    <li><?php echo $cert1; ?></li>
                    <li><?php echo $cert2; ?></li>
                    <li><?php echo $cert3; ?></li>
                    <li><?php echo $cert4; ?></li>
                </ul>
            </div>

        </section>

        <section class="section">
            <h2>SKILLS & INTERESTS</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h4>Skills</h4>
                    <p><?php echo $technical_skills; ?></p>

                </div>
                <div class="skill-category">
                    <h4>Interests</h4>
                    <p><?php echo $interests; ?></p>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> <?php echo $fullname; ?>. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>