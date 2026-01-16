<?php
// userLogin.php
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
        <a href="usersignup.php" class="btn">Register</a>
        <a href="home.php" class="btn">Back</a>
    </div>

</form>


    </div>

</div>
<script src="assets/js/loginValidation.js"></script>

</body>
</html>
