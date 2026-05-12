<?php
session_start();

require_once "../config/db_connect.php";
require_once "../classes/Validation.php";
require_once "../classes/User.php";
//
//I will validate format
//I will validate if email exists in the database
// I will validate if password is correct for the email provided
// I will log the user in if all validations are passed


$email = $_POST['email'];
$password = $_POST['password'];

$validation = new Validate();



 
// VALIDATE EMAIL
$emailError = $validation->validateEmail($email);

if($emailError){

    $_SESSION['error'] = $emailError;

    header("Location:../login.php");
    exit();
}

//validate for existing email
$user = new User();
$existingEmail = $user->existingEmail($pdo, $email); //is used to check if the email exists in the database 

if(!$existingEmail){
    $_SESSION['error'] = "Email does not exist";
    header("Location:../login.php");
    exit();
}

//validate if password matches the email provided
$account = $user->login($pdo, $email, $password);
if (!$account){
    $_SESSION['error'] = "Invalid email or password";
    header("Location:../login.php");
    exit();
}
    $_SESSION['user_id'] = $account['id'];

    header("Location:../products.php");
    exit();
    session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();


}
