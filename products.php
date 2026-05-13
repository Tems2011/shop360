<?php



session_start();

require_once "config/db_connect.php";
require_once "classes/Product.php";

$productInstance = new Product();

$products = $productInstance->displayProducts($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELVET STREET | Products</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h1>VELVET STREET</h1>
        <p>Luxury Fashion & Streetwear Collection</p>
    </div>

    <!-- PRODUCTS -->
    <div class="row">

        <?php foreach($products as $product): ?>

            <div class="col-md-4 mb-4">

                <div class="card h-100 p-3">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?= $product['product_name']; ?>
                        </h5>

                        <p class="price">
                            ₦<?= $product['product_price']; ?>
                        </p>

                        <p class="text-secondary">
                            <?= $product['product_category']; ?>
                        </p>

                        <a href="product_details.php?id=<?= $product['id']; ?>" class="btn btn-primary w-100">
                            View Details
                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>