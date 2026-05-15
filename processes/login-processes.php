<?php
session_start();

require_once "../config/db_connect.php";
require_once "../classes/Validation.php";
require_once "../classes/User.php";

$email = $_POST['email'];
$password = $_POST['password'];

$validation = new Validate();
$user = new User();

// Validate email format
$emailError = $validation->validateEmail($email);

if ($emailError) {
    $_SESSION['error'] = $emailError;
    header("Location: ../login.php");
    exit();
}

// Check if email exists
$existingEmail = $user->existingEmail($pdo, $email);

if (!$existingEmail) {
    $_SESSION['error'] = "Email does not exist";
    header("Location: ../login.php");
    exit();
}

// Login verification
$account = $user->login($pdo, $email, $password);

if (!$account) {
    $_SESSION['error'] = "Invalid email or password";
    header("Location: ../login.php");
    exit();
}


// Successful login
$_SESSION['user_id'] = $account['id'];
$_SESSION['role'] = $account['role'];

// Redirect based on role
if ($account['role'] === 'admin') {
    header("Location: ../admin/admindashboard.php");
    exit();
} else {
    header("Location: ../products.php");
    exit();
}

header("Location: ../products.php");
exit();
?>