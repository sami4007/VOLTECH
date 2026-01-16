<?php
// adminLogin.php
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

        <form id="loginForm" class="admin-form" novalidate>

            <div class="form-row">

                <div class="form-left">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" id="username">
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" id="password">
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




<script src="assets/js/loginValidation.js"></script>


</body>
</html>
