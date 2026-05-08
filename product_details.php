<?php
require_once "config/db_connect.php";
require_once "classes/Product.php";

$id = $_GET['id'];

$product_instance = new Product();
$products = $product_instance->getProductById($pdo,$id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3><?= $products['product_name']; ?></h3>
   <p><?= $products['product_price']; ?></p>
   <p><?= $products['product_category']; ?></p>
   <p><?= $products['product_description']; ?></p>

</body>
</html>