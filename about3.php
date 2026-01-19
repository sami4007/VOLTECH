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

    <a href="<?= $backLink ?>">
        <button class="nav-btn back">Back</button>
    </a>

    <!-- Optional loop back -->
    <button class="nav-btn next" onclick="goNext('about1.php')">Next</button>
</div>

<script>
function goNext(page) {
    window.location.href = page;
}
</script>

</body>
</html>