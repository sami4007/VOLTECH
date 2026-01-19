<?php
session_start();

$backLink = "home.php"; // guest default

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
    <title>About - VolTec</title>
    <link rel="stylesheet" href="assets/css/about.css">

</head>
<body>

<div class="page about1">

    <div class="center-box">
        <p>
            Welcome to Virtual Office of Link & Tech (VolTec), your centralized hub
            for academic excellence. We are committed to simplifying and enhancing
            your educational journey. Our platform empowers students, educators,
            and administrators alike.
        </p>
    </div>

    <!-- BACK (session-aware) -->
    <a href="<?= $backLink ?>">
        <button class="nav-btn back">Back</button>
    </a>

    <!-- NEXT (static flow) -->
    <button class="nav-btn next" onclick="goNext('about2.php')">Next</button>
</div>

<script>
function goNext(page) {
    window.location.href = page;
}
</script>

</body>
</html>
