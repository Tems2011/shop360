<?php
session_start();

require_once "../config/db_connect.php";
require_once "../classes/Validation.php";
require_once "../classes/User.php";

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$validation = new Validate();


// VALIDATE EMAIL
$emailError = $validation->validateEmail($email);

if($emailError){
    $_SESSION['error'] = $emailError;
    header("Location:../registration.php");
    exit();
}


// VALIDATE PASSWORD MATCH
$passwordError = $validation->validatePassword($password, $confirm_password);

if($passwordError){
    $_SESSION['error'] = $passwordError;
    header("Location:../registration.php");
    exit();
}


// VALIDATE PASSWORD STRENGTH
$passwordStrength = $validation->validatePasswordStrength($password);

if($passwordStrength){
    $_SESSION['error'] = $passwordStrength;
    header("Location:../registration.php");
    exit();
}


// CHECK IF EMAIL ALREADY EXISTS
$user = new User();

$existingEmail = $user->existingEmail($pdo, $email);

if($existingEmail){
    $_SESSION['error'] = "Email already exists";
    header("Location:../registration.php");
    exit();
}


// CREATE ACCOUNT
$accountCreated = $user->createAccount($pdo, $email, $password);

if($accountCreated){

    $_SESSION['success'] = "You've successfully registered please Login";

    header("Location:../login.php");
    exit();

}else{

    $_SESSION['error'] = "Failed to create account";

    header("Location:../registration.php");
    exit();
}

