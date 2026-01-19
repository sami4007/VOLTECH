<?php
session_start();
require_once "assets/database/dbconn.php";

$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);   // form field name stays "password"

    if ($username === "" || $password === "") {
        $errorMsg = "All fields are required.";
    } else {

        // ✅ CORRECT TABLE + COLUMN NAMES
        $sql = "SELECT * FROM regtable WHERE username = ? AND pass = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            // LOGIN SUCCESS → CREATE SESSION
            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $username;

            header("Location: homepage2.php");
            exit();

        } else {
            $errorMsg = "Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="assets/css/userLogin.css">
</head>
<body>

<div class="user-wrapper">
    <div class="user-overlay">

        <form method="post" id="userLoginForm" class="admin-form" novalidate>

            <div class="form-row">

                <div class="form-left">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" name="username" id="userUsername">
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" id="userPassword">
                    </div>
                </div>

                <div class="form-right">
                    <img src="assets/images/admin.png" alt="User Icon">
                </div>

            </div>

            <?php if ($errorMsg): ?>
                <p style="color:red; margin-top:10px; text-align:center;">
                    <?= $errorMsg ?>
                </p>
            <?php endif; ?>

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
