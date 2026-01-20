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
