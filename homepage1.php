<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: home.php");
    exit;
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
    <a href="adminstudentreg.php">New Entry</a>
    <a href="adminfundmanage.php">Fund Management</a>
    <a href="about1.php">About</a>
    <a href="controllers/AdminAuthController.php?action=logout">Logout</a>
     
    <!-- Right side text -->
    <span class="welcome-text1">Welcome Admin</span>
</nav>

<!-- ===== SLIDER SECTION ===== -->
<div class="slider-container">

    <div class="slide active" style="background-image: url('assets/images/slide1.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide2.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide3.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide4.png');"></div>
    <div class="slide" style="background-image: url('assets/images/slide5.png');"></div>

    <div class="slider-title">
        STUDENT MANAGEMENT PORTAL
    </div>

</div>

<script src="assets/js/slider.js"></script>
</body>
</html>
