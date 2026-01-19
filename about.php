<?php
session_start();

if (isset($_SESSION['admin_logged_in'])) {
    header("Location: about1.php");
    exit();
}
if (isset($_SESSION['user_logged_in'])) {
    header("Location: about2.php");
    exit();
}
header("Location: about3.php");
exit();
