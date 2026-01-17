<?php
// userLogin.php
// (No backend logic yet – frontend validation only)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VolTech | User Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/userLogin.css">
</head>
<body>

<div class="user-wrapper">
    <div class="user-overlay">

        <form id="userLoginForm" class="admin-form" novalidate>

            <div class="form-row">

                <div class="form-left">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" id="userUsername">
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" id="userPassword">
                    </div>
                </div>

                <div class="form-right">
                    <img src="assets/images/admin.png" alt="User Icon">
                </div>

            </div>

            <div class="button-group">
                <button type="submit" class="btn">Login</button>
                <a href="usersignup.php" class="btn">Register</a>
                <a href="home.php" class="btn">Back</a>
            </div>

        </form>

    </div>
</div>

<!-- User JS -->
<script src="assets/js/userLoginValidation.js"></script>

</body>
</html>
