<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VOLTECH | Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/adminLogin.css">
</head>
<body>

<div class="admin-wrapper">
    <div class="admin-overlay">

        <!-- LOGIN FORM (UI ONLY) -->
        <form method="post" action="../controllers/AuthController.php" class="admin-form">

    <div class="form-row">

        <div class="form-left">
            <div class="field">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
        </div>

        <div class="form-right">
            <img src="../assets/images/admin.png" alt="Admin Icon">
        </div>

    </div>

    <div class="button-group">
        <button type="submit" class="btn">Login</button>
    </div>

</form>

    </div>
</div>

</body>
</html>
