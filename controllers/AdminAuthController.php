<?php
// controllers/AdminAuthController.php

session_start();
require_once __DIR__ . '/../models/User.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../adminLogin.php");
    exit;
}

// clear any previous session data
session_unset();

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($username === '' || $password === '') {
    $_SESSION['error'] = "All fields are required.";
    header("Location: ../adminLogin.php");
    exit;
}

$userModel = new User();
$user = $userModel->authenticate($username, $password);

/*
|--------------------------------------------------------------------------
| ADMIN AUTHORIZATION (STRICT)
|--------------------------------------------------------------------------
*/
if ($user && $user['role'] === 'admin') {

    // prevent session fixation
    session_regenerate_id(true);

    $_SESSION['user_id']  = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role']     = 'admin';

    header("Location: ../homepage1.php");
    exit;
}

// if credentials exist but role is NOT admin
$_SESSION['error'] = "Invalid admin credentials.";
header("Location: ../adminLogin.php");
exit;
