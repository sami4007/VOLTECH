<?php
// ViewStudentDetails.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Student Details</title>
    <link rel="stylesheet" href="ViewStudentDetails.css">
</head>

<body>

    <div class="student-page">

        <h1>Student Details</h1>

        <div class="content-wrapper">

            <div class="input-section">
                <h2>Search Student</h2>

                <label>Search by Name</label>
                <input type="text" id="studentName" placeholder="Enter student name">

                <div class="btn-group">
                    <button type="button" onclick="searchStudent()">Search</button>
                    <button type="button" onclick="clearSearch()">Cancel</button>
                    <a href="homepage2.php" class="cancel-link">
                        <button type="button">Back</button>
                    </a>


                </div>
            </div>

            <div class="result-section" id="resultSection">
     
            </div>

        </div>

    </div>

    <script src="ViewStudentDetails.js"></script>
</body>

</html>