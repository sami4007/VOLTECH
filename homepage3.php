<?php
session_start();
if (!isset($_SESSION['mod_logged_in'])) {
    header("Location: modLogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management Portal</title>

    <link rel="stylesheet" href="assets/css/homepage.css">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <a href="astudentdetails.php">New Information</a>
    <a href="about.php">About</a>
    <a href="modLogout.php">Log Out</a>
     
    <!-- Right side text -->
    <span class="welcome-text1">Welcome Moderator</span>
</nav>

<!-- ===== SLIDER SECTION ===== -->
<div class="slider-container">

    <div class="slide active" style="background-image: url('assets/images/slide1.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide2.jpg');"></div>
    <div class="slide" style="background-image: url('assets/images/slide3.jpg');"></div>
    <div class="slide" style="background-image: url('assets/images/slide4.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide5.png');"></div>

    <div class="slider-title">
        STUDENT MANAGEMENT PORTAL
    </div>

</div>

<script src="assets/js/slider.js"></script>
</body>
</html>
