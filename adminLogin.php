<?php
// adminLogin.php
// (No backend logic yet – frontend validation only)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VolTech | Admin Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/adminLogin.css">
</head>
<body>

<div class="admin-wrapper">
    <div class="admin-overlay">

        <form id="adminLoginForm" class="admin-form" novalidate>

            <div class="form-row">

                <div class="form-left">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" id="adminUsername">
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" id="adminPassword">
                    </div>
                </div>

                <div class="form-right">
                    <img src="assets/images/admin.png" alt="Admin Icon">
                </div>

            </div>

            <div class="button-group">
                <button type="submit" class="btn">Login</button>
                <a href="home.php" class="btn">Back</a>
            </div>

        </form>

    </div>
</div>

<!-- Admin JS -->
<script src="assets/js/adminLoginValidation.js"></script>

</body>
</html>
