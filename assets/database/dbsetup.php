<?php
// Connect to MySQL server
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    exit; // stop silently if connection fails
}

// Create database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS voltech");

// Select database
mysqli_select_db($conn, "voltech");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS regtable (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    fullname VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL
)";

mysqli_query($conn, $sql);
?>
