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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="row">
  <?php foreach ($products as $product): ?>
    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><?= $product["product_name"]; ?></h5>
          <p class="card-text"><?= $product["product_price"]; ?></p>
          <p class="card-text"><?= $product["product_category"]; ?></p>
          <a href="product_details.php?id=<?= $product["product_id"]; ?>" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>