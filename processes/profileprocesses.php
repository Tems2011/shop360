<?php

session_start();

require_once "../config/db_connect.php";

require_once "../classes/Customer.php";


if (!isset($_SESSION['user_id']) || $_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: ../customerprofile.php");
    exit();
}


$account_id = $_SESSION['user_id'];

$firstname = trim($_POST['firstname'] ?? '');

$surname = trim($_POST['surname'] ?? '');

$phone = trim($_POST['phone'] ?? '');


if (empty($firstname) || empty($surname) || empty($phone)) {

    $_SESSION['error'] = "All fields are required.";

    header("Location: ../customerprofile.php");

    exit();
}


try {

    $customer = new Customer();

    $save = $customer->saveCustomerProfile(
        $pdo,
        $account_id,
        $firstname,
        $surname,
        $phone
    );


    if($save){

        $_SESSION['success'] = "Profile updated successfully!";

        header("Location: ../customerdashboard.php");

        exit();

    } else {

        $_SESSION['error'] = "Profile update failed.";

        header("Location: ../customerprofile.php");

        exit();
    }

} catch(PDOException $e){

    $_SESSION['error'] = $e->getMessage();

    header("Location: ../customerprofile.php");

    exit();
}

?>