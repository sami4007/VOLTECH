<?php
session_start();

/* =========================
   Access Guard
========================= */
if (
    !isset($_SESSION['admin_logged_in']) &&
    !isset($_SESSION['mod_logged_in']) &&
    !isset($_SESSION['user_logged_in'])
) {
    header("Location: home.php");
    exit();
}

/* =========================
   Role-aware Back Link
========================= */
$backLink = "home.php";

if (isset($_SESSION['admin_logged_in'])) {
    $backLink = "homepage1.php";
} elseif (isset($_SESSION['mod_logged_in'])) {
    $backLink = "homepage3.php";
} elseif (isset($_SESSION['user_logged_in'])) {
    $backLink = "homepage2.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Contributors</title>
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>

<div class="page about3">

    <div class="center-box">
        <h1>CONTRIBUTORS</h1>
        <p>
            BENAZIR NEWAZ KHAN : 23-50217-1<br><br>
            SAIF AL SAMI : 23-50215-1<br><br>
            MD. NAZRUL ISLAM NABIL : 23-50205-1
        </p>
    </div>

    <!-- BACK (role-aware) -->
    <a href="<?= $backLink ?>">
        <button class="nav-btn back">Back</button>
    </a>

    <!-- NEXT (router handles role) -->
    <button class="nav-btn next" onclick="goNext('about1.php')">Next</button>
</div>

<script>
function goNext(page) {
    window.location.href = page;
}
</script>

</body>
</html>
