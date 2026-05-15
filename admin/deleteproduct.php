<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: "); 
}

include '../config/dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

header("Location: admindashboard.php");

?> 
