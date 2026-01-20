<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: views/loginView.php");
    exit;
}


$backLink = "views/loginView.php";

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'admin') {
        $backLink = "homepage1.php";
    } elseif ($_SESSION['role'] === 'moderator') {
        $backLink = "homepage3.php";
    } elseif ($_SESSION['role'] === 'user') {
        $backLink = "homepage2.php";
    }
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
            Welcome to Virtual Operation and Learning Technology (VolTech), your centralized hub
            for academic excellence. We are committed to simplifying and enhancing
            your educational journey. Our platform empowers students, educators,
            and administrators alike.
        </p>
    </div>

    <!-- BACK (role-aware) -->
    <a href="<?= $backLink ?>">
        <button class="nav-btn back">Back</button>
    </a>

    <!-- NEXT (router handles role) -->
    <button class="nav-btn next" onclick="goNext('about2.php')">Next</button>

</div>

<script>
function goNext(page) {
    window.location.href = page;
}
</script>

</body>
</html>
