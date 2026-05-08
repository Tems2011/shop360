<?php
session_start();

require_once "../config/db_connect.php";
require_once "../classes/Validation.php";
require_once "../classes/User.php";

$email = $_POST['email'];
$password = $_POST['password'];

$validation = new Validate();

$existingEmail = $validation->validateEmail($email);
$passwordStrength = $validation->validatePasswordStrength($password);

if($existingEmail){
    $_SESSION['error']= 'Email is not valid';
    header('Location:../login.php');
    exit();
}
if($passwordStrength){
    $_SESSION['error']= 'Password must be between 8 and 15 characters long';
    header('Location:../login.php');
    exit();
}
$user = new User();
$account = $user->login($pdo, $email, $password);
if($account){
    $_SESSION['success'] = 'Logged in successfully';
    $_SESSION['user_email'] = $account['email'];
    $_SESSION['account_id'] = $account['id'];
    header('Location:../products.php');
    exit();
}
else{
    $_SESSION['error'] = 'Invalid Email or Password';
    header('Location:../login.php');
    exit();
}

?>