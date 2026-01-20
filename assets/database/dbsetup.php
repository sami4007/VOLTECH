<?php
// Connect to MySQL server
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    exit; // stop if connection fails
}

// Create database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS voltech");

// Select database
mysqli_select_db($conn, "voltech");


$sql1 = "CREATE TABLE IF NOT EXISTS regtable (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    pass VARCHAR(100) NOT NULL
)";

mysqli_query($conn, $sql1);


$sql2 = "CREATE TABLE IF NOT EXISTS students (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    father_name VARCHAR(100) NOT NULL,
    mother_name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address TEXT NOT NULL,
    student_id VARCHAR(15) NOT NULL
)";

mysqli_query($conn, $sql2);

$sql3 = "CREATE TABLE IF NOT EXISTS admin (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(100) NOT NULL
)";

mysqli_query($conn, $sql3);

$sql4 = "INSERT IGNORE INTO admin (username, pass)
        VALUES 
        ('sami4007', 'sami4007'),
        ('nabil4007', 'nabil4007'),
        ('bn4007', 'bn4007')";
mysqli_query($conn, $sql4);


$sql5 = "CREATE TABLE IF NOT EXISTS moderator (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(100) NOT NULL
)";

mysqli_query($conn, $sql5);


$sql6 = "INSERT IGNORE INTO moderator (username, pass)
         VALUES ('mod4007', 'mod4007')";

mysqli_query($conn, $sql6);

echo "<h3>Database setup completed successfully.</h3>";

?>
