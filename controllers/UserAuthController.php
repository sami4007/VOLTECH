<?php
// controllers/UserAuthController.php

session_start();
require_once __DIR__ . '/../models/User.php';

/*
|--------------------------------------------------------------------------
| LOGOUT HANDLER (GET)
|--------------------------------------------------------------------------
*/
if (isset($_GET['action']) && $_GET['action'] === 'logout') {

    session_unset();
    session_destroy();

    header("Location: ../userlogin.php");
    exit;
}

/*
|--------------------------------------------------------------------------
| LOGIN HANDLER (POST)
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    session_unset();

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../userlogin.php");
        exit;
    }

    $userModel = new User();
    $user = $userModel->authenticate($username, $password);

    if ($user && $user['role'] === 'user') {

        session_regenerate_id(true);

        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role']     = 'user';

        header("Location: ../homepage2.php");
        exit;
    }

    $_SESSION['error'] = "Invalid user credentials.";
    header("Location: ../userlogin.php");
    exit;
}
