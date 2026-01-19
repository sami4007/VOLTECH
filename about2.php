<?php
session_start();

$backLink = "home.php";

if (isset($_SESSION['admin_logged_in'])) {
    $backLink = "homepage1.php";
} elseif (isset($_SESSION['user_logged_in'])) {
    $backLink = "homepage2.php";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Education</title>
    <link rel="stylesheet" href="assets/css/about.css">

</head>
<body>

<div class="page about2">

    <div class="center-box">
        <p>
            Education is crucial for personal growth, societal progress, and the
            advancement of humanity. It provides the foundation for critical
            thinking, problem-solving, and acquiring essential skills. Education
            not only broadens our knowledge but also fosters creativity and
            innovation. It is the key to unlocking opportunities, empowering
            individuals to pursue their passions and contribute meaningfully
            to the world.
        </p>
    </div>

    <a href="<?= $backLink ?>">
        <button class="nav-btn back">Back</button>
    </a>

    <button class="nav-btn next" onclick="goNext('about3.php')">Next</button>
</div>

    <script>
    function goNext(page) {
    window.location.href = page;
    }
    </script>

</body>
</html>
