<?php
// controllers/AuthController.php

session_start();
require_once __DIR__ . '/../models/User.php';

/*
|--------------------------------------------------------------------------
| LOGIN HANDLER
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Clear any previous login state
    session_unset();

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $userModel = new User();
    $user = $userModel->authenticate($username, $password);

    if ($user) {

        // Set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Prevent session fixation
        session_regenerate_id(true);

        // Role-based redirect
        if ($user['role'] === 'admin') {
            header("Location: ../homepage1.php");
        } elseif ($user['role'] === 'moderator') {
            header("Location: ../homepage3.php");
        } else {
            header("Location: ../homepage2.php");
        }
        exit;

    } else {
        $_SESSION['error'] = "Invalid username or password";

// send user back to the SAME login page they came from
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;

    }
}

/*
|--------------------------------------------------------------------------
| LOGOUT HANDLER
|--------------------------------------------------------------------------
*/
if (isset($_GET['action']) && $_GET['action'] === 'logout') {

    session_unset();
    session_destroy();

    header("Location: ../home.php");
    exit;
}
