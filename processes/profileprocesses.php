<?php
session_start();

require "../config/db_connect.php";
require "../classes/customer.php";

/* User must login first */
if(!isset($_SESSION['user_id'])){

    header("Location: ../login.php");
    exit();
}

if(isset($_POST['save_profile'])){

    $user_id  = $_SESSION['user_id'];

    $firstname = trim($_POST['firstname']);
    $surname   = trim($_POST['surname']);
    $phone     = trim($_POST['phone']);

    $customer = new Customer($pdo);

    $save = $customer->createProfile(
        $user_id,
        $firstname,
        $surname,
        $phone
    );
}
  if($save){

    $_SESSION['success'] = "Profile Created Successfully";

    header("Location: ../dashboard.php");
    exit();

}else{

    $_SESSION['error'] = "Profile Creation Failed";

    header("Location: ../customer/customer-profile.php");
    exit();
}