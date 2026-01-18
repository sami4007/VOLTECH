<?php
session_start();
require_once "assets/database/dbconn.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['userUsername'];
    $password = $_POST['userPassword'];

    $sql = "SELECT * FROM regtable WHERE username = ? AND pass = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        header("Location: homepage2.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

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

        <form method="post" id="userLoginForm" class="admin-form" novalidate>

    <div class="form-row">

        <div class="form-left">
            <div class="field">
                <label>Username</label>
                <input type="text" id="userUsername" name="userUsername">
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" id="userPassword" name="userPassword">
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
