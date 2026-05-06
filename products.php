<?php

require_once "config/db_connect.php";
require_once "classes/Product.php";

$productInstance= new Product();
$products = $productInstance->displayProducts($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product["product_name"]; ?></td>
                <td><?= $product["product_price"]; ?></td>
                <td><?= $product["product_category"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </table>
</body>
</html>