<?php

session_start();
/*
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: userLogin.php");
    exit();
} */

require_once "assets/database/dbconn.php";

$student = null;
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $student_id   = trim($_POST['student_id']);
    $student_name = trim($_POST['student_name']);

    if ($student_id === "" || $student_name === "") {
        $errorMsg = "Both Student ID and Name are required.";
    } else {
        $sql = "SELECT * FROM students 
                WHERE student_id = ? AND student_name = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $student_id, $student_name);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $student = $result->fetch_assoc();
        } else {
            $errorMsg = "No student found with given ID and Name.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <link rel="stylesheet" href="assets/css/ustudentdetails.css">
</head>
<body>

<div class="student-page">
    <h1>Student Details</h1>

    <div class="content-wrapper">

        <!-- LEFT SEARCH PANEL -->
        <div class="input-section">
            <h2>Search Student</h2>

            <form method="post">
                <label>Student ID</label>
                <input type="text" name="student_id" placeholder="Enter student ID">

                <label>Student Name</label>
                <input type="text" name="student_name" placeholder="Enter student name">

                <div class="btn-group">
                    <button type="submit">Search</button>
                    <button type="reset">Clear</button>
                    <a href="homepage2.php" class="cancel-link">
                        <button type="button">Back</button>
                    </a>
                </div>
            </form>
        </div>

        <!-- RIGHT RESULT PANEL -->
        <div class="result-section">

            <?php if ($student): ?>
                <h2>Student Information</h2>

                <table class="student-table">
                    <tr>
                        <th>Student ID</th>
                        <td><?= htmlspecialchars($student['student_id']) ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?= htmlspecialchars($student['student_name']) ?></td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td><?= htmlspecialchars($student['father_name']) ?></td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td><?= htmlspecialchars($student['mother_name']) ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?= htmlspecialchars($student['age']) ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?= htmlspecialchars($student['phone_number']) ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?= htmlspecialchars($student['address']) ?></td>
                    </tr>
                </table>

            <?php elseif ($errorMsg): ?>
                <p class="error-msg"><?= $errorMsg ?></p>

            <?php else: ?>
                <p class="info-msg">
                    Enter Student ID and Name to view details.
                </p>
            <?php endif; ?>

        </div>

    </div>
</div>

<script src="assets/js/ustudentdetails.js"></script>
</body>
</html>
