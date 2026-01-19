<?php
session_start();
require_once "assets/database/dbconn.php";

$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Safety check
    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if ($username === "" || $password === "") {
        $errorMsg = "All fields are required.";
    } else {

        $stmt = $conn->prepare(
            "SELECT id FROM admin WHERE username = ? AND pass = ?"
        );

        if (!$stmt) {
            die("SQL Prepare Failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            // ADMIN SESSION CREATED
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username']  = $username;

            header("Location: homepage1.php");
            exit();

        } else {
            $errorMsg = "Invalid admin credentials.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/adminLogin.css">
</head>
<body>

<div class="admin-wrapper">
<div class="admin-overlay">

<form method="post" action="" id="adminLoginForm" class="admin-form">

    <div class="form-row">

        <div class="form-left">
            <div class="field">
                <label>Username</label>
                <input type="text" name="username" id="adminUsername" autocomplete="off">
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" id="adminPassword">
            </div>
        </div>

        <div class="form-right">
            <img src="assets/images/admin.png" alt="Admin Icon">
        </div>

    </div>

    <?php if ($errorMsg): ?>
        <p style="color:red;text-align:center;margin-top:10px;">
            <?= htmlspecialchars($errorMsg) ?>
        </p>
    <?php endif; ?>

    <div class="button-group">
        <button type="submit" class="btn">Login</button>
        <a href="home.php" class="btn">Back</a>
    </div>

</form>

</div>
</div>

<script src="assets/js/adminLoginValidation.js"></script>
</body>
</html>
