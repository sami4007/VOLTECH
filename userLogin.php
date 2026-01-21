<?php
// userLogin.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="assets/css/userLogin.css">
</head>
<body>

<?php
if (isset($_SESSION['error'])) {
    echo "<p style='color:red; text-align:center; font-weight:bold;'>
            " . htmlspecialchars($_SESSION['error']) . "
          </p>";
    unset($_SESSION['error']);
}
?>

<div class="user-wrapper">
    <div class="user-overlay">

        <form method="post"
              action="controllers/UserAuthController.php"
              id="userLoginForm"
              class="admin-form"
              novalidate>

            <div class="form-row">

                <div class="form-left">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" name="username" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" required>
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

<script src="assets/js/userLoginValidation.js"></script>
</body>
</html>
