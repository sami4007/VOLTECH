<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <link rel="stylesheet" href="ustudentdetails.css">
</head>

<body>

<div class="top-bar">
    <div class="left-section">
        <label>Search by name</label>
        <input type="text" id="studentName">
        <br><br>
        <button onclick="searchStudent()">Search</button>

        <a href="homepage1.php" class="cancel-link">
            <button type="button">back</button>
        </a>
        
    </div>

    <div class="right-section">
        <h1>Student details</h1>
    </div>
</div>


<div id="resultSection" ></div>

<script src="ustudentdetails.js"></script>
</body>
</html>

