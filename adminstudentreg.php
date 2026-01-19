<?php
require_once "assets/database/dbconn.php";

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: adminLogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $student_name = $_POST['adminregstudent_name'];
    $father_name  = $_POST['adminregfather_name'];
    $mother_name  = $_POST['adminregmother_name'];
    $age          = $_POST['adminregage'];
    $phone_number = $_POST['adminregphone'];
    $email        = $_POST['adminregemail'];
    $address      = $_POST['adminregaddress'];
    $student_id   = $_POST['adminregstudent_id'];

    $sql = "INSERT INTO students 
        (student_name, father_name, mother_name, age, phone_number, email, address, student_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssissss",
        $student_name,
        $father_name,
        $mother_name,
        $age,
        $phone_number,
        $email,
        $address,
        $student_id
    );

    mysqli_stmt_execute($stmt);

    header("Location: adminstudentreg.php?success=1");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="assets/css/adminstudentreg.css">
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

<?php if (isset($_GET['success'])): ?>
<script>
    alert("Registration successful!");
    window.location.href = "homepage1.php";
</script>
<?php endif; ?>


<script src="assets/js/adminstudentreg.js"></script>
</body>
</html>
