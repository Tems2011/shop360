<?php
require "../config/db_connect.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $user_id = $_SESSION['user_id'];

    $firstname = trim($_POST['firstname'] ?? '');
    $surname   = trim($_POST['surname'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');

    if($firstname === '' || $surname === '' || $phone === ''){
        die("All fields are required.");
    }

    $sql = "UPDATE customers 
            SET first_name = :firstname,
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

    header("Location: ../dashboard.php");
    exit();
}
?>