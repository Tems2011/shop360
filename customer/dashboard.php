<?php
session_start();
require "../config/db_connect.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT firstname, surname, phone 
        FROM customers 
        WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $user_id]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>