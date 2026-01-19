<?php
session_start();
require_once "assets/database/dbconn.php";

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: adminLogin.php");
    exit();
} 

$student = null;
$students = [];
$msg = "";

/* ================= SEARCH ================= */
if (isset($_POST['search'])) {
    $student_id = trim($_POST['student_id']);

    if ($student_id !== "") {
        $stmt = $conn->prepare(
            "SELECT * FROM students WHERE student_id = ?"
        );
        $stmt->bind_param("s", $student_id);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows === 1) {
            $student = $res->fetch_assoc();
        } else {
            $msg = "Student not found.";
        }
    }
}

/* ================= UPDATE ================= */
if (isset($_POST['update'])) {

    $stmt = $conn->prepare(
        "UPDATE students SET
            student_name = ?,
            father_name  = ?,
            mother_name  = ?,
            age          = ?,
            phone_number = ?,
            email        = ?,
            address      = ?
         WHERE student_id = ?"
    );

    $stmt->bind_param(
        "sssissss",
        $_POST['student_name'],
        $_POST['father_name'],
        $_POST['mother_name'],
        $_POST['age'],
        $_POST['phone_number'],
        $_POST['email'],
        $_POST['address'],
        $_POST['student_id']
    );

    $stmt->execute();
    $msg = "Student record updated successfully.";
}

/* ================= DELETE ================= */
if (isset($_POST['delete'])) {

    $stmt = $conn->prepare(
        "DELETE FROM students WHERE student_id = ?"
    );
    $stmt->bind_param("s", $_POST['student_id']);
    $stmt->execute();

    $msg = "Student record deleted successfully.";
}

/* ================= SHOW ALL ================= */
if (isset($_POST['showall'])) {
    $res = $conn->query("SELECT * FROM students");
    $students = $res->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Student Management</title>
    <link rel="stylesheet" href="assets/css/astudentdetails.css">
</head>
<body>

<div class="student-page">
<h1>Admin Student Management</h1>

<div class="content-wrapper">

<!-- LEFT PANEL -->
<div class="input-section">
<h2>Manage Student</h2>

<form method="post">
    <label>Student ID</label>
    <input type="text" name="student_id" required>

    <div class="btn-group">
        <button name="search">Search</button>
        <button name="showall">Show All</button>
        <a href="homepage1.php" class="btn cancel-link">Back</a>
    </div>
</form>
</div>

<!-- RIGHT PANEL -->
<div class="result-section">

<?php if ($msg): ?>
    <p style="color:green;font-weight:bold;"><?= $msg ?></p>
<?php endif; ?>

<!-- SINGLE STUDENT (EDIT MODE) -->
<?php if ($student): ?>

<form method="post">
<input type="hidden" name="student_id" value="<?= htmlspecialchars($student['student_id']) ?>">

<table class="student-table">
<tr><th>Name</th><td><input name="student_name" value="<?= htmlspecialchars($student['student_name']) ?>"></td></tr>
<tr><th>Father</th><td><input name="father_name" value="<?= htmlspecialchars($student['father_name']) ?>"></td></tr>
<tr><th>Mother</th><td><input name="mother_name" value="<?= htmlspecialchars($student['mother_name']) ?>"></td></tr>
<tr><th>Age</th><td><input name="age" value="<?= htmlspecialchars($student['age']) ?>"></td></tr>
<tr><th>Phone</th><td><input name="phone_number" value="<?= htmlspecialchars($student['phone_number']) ?>"></td></tr>
<tr><th>Email</th><td><input name="email" value="<?= htmlspecialchars($student['email']) ?>"></td></tr>
<tr><th>Address</th><td><input name="address" value="<?= htmlspecialchars($student['address']) ?>"></td></tr>
</table>

<!-- ACTION BUTTONS -->
<div class="action-buttons">
    <button name="update" class="action-btn update-btn">Update</button>
    <button name="delete" class="action-btn delete-btn"
        onclick="return confirm('Are you sure you want to delete this student?')">
        Delete
    </button>
</div>

</form>

<!-- SHOW ALL -->
<?php elseif ($students): ?>

<table class="student-table">
<tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
</tr>

<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['student_id'] ?></td>
    <td><?= $s['student_name'] ?></td>
    <td><?= $s['phone_number'] ?></td>
    <td><?= $s['email'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php else: ?>
    <p>Search a student by ID or click “Show All”.</p>
<?php endif; ?>

</div>
</div>
</div>

</body>
</html>
