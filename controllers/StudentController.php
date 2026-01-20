<?php
// controllers/StudentController.php

session_start();
require_once "../assets/database/dbconn.php";

if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], ['admin', 'moderator'])) {
    echo json_encode([]);
    exit;
}

$type = $_GET['type'] ?? 'all';

$data = [];

if ($type === 'search' && isset($_GET['keyword'])) {

    $keyword = "%" . $_GET['keyword'] . "%";
    $stmt = mysqli_prepare(
        $conn,
        "SELECT * FROM students WHERE student_name LIKE ? OR student_id LIKE ?"
    );
    mysqli_stmt_bind_param($stmt, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

} else {
    $result = mysqli_query($conn, "SELECT * FROM students");
}

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

header("Content-Type: application/json");
echo json_encode($data);
