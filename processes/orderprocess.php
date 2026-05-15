<?php

session_start();

include '../config/db_connect.php';
include '../classes/Order.php';

if(isset($_POST['place_order'])){

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];

    $customer_id = $_SESSION['user_id'];

    $productSql = "SELECT * FROM products WHERE id = ?";

    $productStmt = $pdo->prepare($productSql);

    $productStmt->execute([$product_id]);

    $product = $productStmt->fetch(PDO::FETCH_ASSOC);

    $total = $product['product_price'] * $quantity;

    placeOrder(
        $pdo,
        $customer_id,
        $product_id,
        $quantity,
        $total,
        $address,
        $payment
    );

    header("Location: ../products.php");
}

?> 
