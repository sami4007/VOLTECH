<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="adminstudentreg.css">
</head>
<body>

<div class="main">

    <h1 class="astudentregtitle">WELCOME TO REGISTRATION PAGE</h1>

    <form class="astudentreg-form" method="post">

        <div class="astudentregform">
            <label>STUDENT NAME :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregstudent_name">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>FATHER NAME :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregfather_name">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>MOTHER NAME :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregmother_name">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>AGE :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregage">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>PHONE NUMBER :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregphone">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>EMAIL :</label>
            <div class="field">
                <input type="email" class="inputs" name="adminregemail">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>ADDRESS :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregaddress">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregform">
            <label>STUDENT ID :</label>
            <div class="field">
                <input type="text" class="inputs" name="adminregstudent_id">
                <span class="astudentregerror"></span>
            </div>
        </div>

        <div class="astudentregbuttons">
                <a href="homepage1.php" class="back-link">
                    <button type="button">BACK</button>
                </a>
                <button type="submit">CONFIRM REGISTRATION</button>
            </div>

    </form>

</div>

<script src="adminstudentreg.js"></script>
</body>
</html>
