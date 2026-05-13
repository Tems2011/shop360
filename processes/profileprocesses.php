<?php
session_start();
require_once "../config/db_connect.php";

if (!isset($_SESSION['user_id']) || $_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../customer-profile.php");
    exit();
}

$user_id   = $_SESSION['user_id'];
$firstname = trim($_POST['firstname'] ?? '');
$surname   = trim($_POST['surname'] ?? '');
$phone     = trim($_POST['phone'] ?? '');

if (empty($firstname) || empty($surname) || empty($phone)) {
    $_SESSION['error'] = "All fields are required.";
    header("Location: ../customer-profile.php");
    exit();
}

try {
    $sql = "UPDATE customers 
            SET firstname = :firstname, 
                surname   = :surname, 
                phone     = :phone 
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':firstname' => $firstname,
        ':surname'   => $surname,
        ':phone'     => $phone,
        ':id'        => $user_id
    ]);

    $_SESSION['success'] = "Profile updated successfully!";
    header("Location: ../customer-profile.php");

} catch (PDOException $e) {
    $_SESSION['error'] = "Update failed. Please try again.";
    header("Location: ../customer-profile.php");
}
exit();
?>