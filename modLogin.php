<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VolTech | Moderator Login</title>
    <link rel="stylesheet" href="assets/css/adminLogin.css">
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

<div class="admin-wrapper">
    <div class="admin-overlay">

        <form method="post" action="controllers/ModAuthController.php"
              id="modLoginForm"
              class="admin-form"
              novalidate>

            <div class="form-row">
                <div class="form-left">

                    <div class="field">
                        <label>Moderator Username</label>
                        <input type="text" name="username" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                </div>

                <div class="form-right">
                    <img src="assets/images/admin.png" alt="Moderator Icon">
                </div>
            </div>

            <div class="button-group">
                <button type="submit" class="btn">Login</button>
                <a href="adminLogin.php" class="btn">Back</a>
            </div>

        </form>

    </div>
</div>

</body>
</html>
