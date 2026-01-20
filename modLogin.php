<?php
session_start();
require_once "assets/database/dbconn.php";

$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if ($username === "" || $password === "") {
        $errorMsg = "All fields are required.";
    } else {

        $stmt = $conn->prepare("SELECT * FROM moderator WHERE username = ? AND pass = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $_SESSION['mod_logged_in'] = true;
            $_SESSION['mod_username']  = $username;

            // 🔁 change destination later if you add a moderator homepage
            header("Location: homepage3.php");
            exit();

        } else {
            $errorMsg = "Invalid moderator credentials.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VolTech | Moderator Login</title>
    <link rel="stylesheet" href="assets/css/adminLogin.css">
</head>
<body>

<div class="admin-wrapper">
    <div class="admin-overlay">

        <form method="post" id="modLoginForm" class="admin-form" novalidate>

            <div class="form-row">
                <div class="form-left">

                    <div class="field">
                        <label>Moderator Username</label>
                        <input type="text" name="username">
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>

                    <?php if ($errorMsg !== ""): ?>
                        <p style="color:red;"><?php echo $errorMsg; ?></p>
                    <?php endif; ?>

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
