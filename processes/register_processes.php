<?php
session_start();

require_once "../config/db_connect.php";
require_once "../classes/Validation.php";
require_once "../classes/User.php";

$email = $_POST["email"];

$emailInstance = new Validate();
$emailError = $emailInstance->validateEmail($email);
if($emailError){
    $_SESSION["error"] = $emailError;
    header("Location:../registration.php");
    exit();
}
$confirm_password = $_POST['confirm_password'];
$password = $_POST['password'];
$passwordInstance = new Validate();
$passwordcheck = $passwordInstance->validatePassword($password, $confirm_password);
if($passwordcheck){
    $_SESSION['error'] = $passwordcheck;
    header('Location:../registration.php');
    exit();
}

if($passwordStrength){
    $_SESSION['error']= 'Password must be between 8 and 15 characters long';
    header('Location:../registration.php');
    exit();
}


$user = new User();
$existingEmail = $user->existingEmail($pdo, $email);
if($existingEmail){
    $_SESSION["error"] = "Email already exists";
    header("Location:../registration.php");
    exit;
}

$accountCreated = $user->createAccount($pdo, $email, $password);

if($accountCreated){
    $_SESSION["success"] = "Account created successfully";
    $_SESSION['success'] = "You've successfully registered please Login";
    header("Location:../login.php");
    exit();
}else {
    $_SESSION["error"] = "
    failed to create account
    ";
        header("Location: ../registration.php");
        exit();

}
