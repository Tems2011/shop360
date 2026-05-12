<?php

session_start();




require_once "config/db_connect.php";
require_once "classes/Product.php";

if(!isset($_GET['id'])){
    die("Product ID not found");
}

$id = $_GET['id'];

$productInstance = new Product();

$product = $productInstance->getProductById($pdo, $id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>

<h3><?= $product['product_name']; ?></h3>

<p>$<?= $product['product_price']; ?></p>

<p><?= $product['product_category']; ?></p>

<p><?= $product['product_description']; ?></p>

</body>
</html>