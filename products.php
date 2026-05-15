<?php
session_start();

$page_title = "Shop - Velvet Street";

/* FIXED HEADER PATH */
include "include/header.php";

/* DATABASE */
require_once "config/db_connect.php";
require_once "classes/Product.php";

/* CHECK PDO CONNECTION */
if (!isset($pdo)) {
    die("Database connection failed.");
}

/* PRODUCT INSTANCE */
$productInstance = new Product();

/* FETCH PRODUCTS */
$products = $productInstance->getProductWithImages($pdo);

/* ENSURE ARRAY */
if (!is_array($products)) {
    $products = [];
}
?>

<div class="container py-5">
    
    <!-- PAGE TITLE -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-white">Our Collection</h1>
        <p class="lead text-secondary">Premium Streetwear & Luxury Fashion</p>
    </div>

    <?php if (empty($products)): ?>
        
        <!-- NO PRODUCTS -->
        <div class="text-center py-5 text-white">
            <h3>No products available at the moment</h3>
            <p>Please check back later.</p>
        </div>

    <?php else: ?>
        
        <!-- PRODUCT GRID -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <?php foreach ($products as $product): ?>

                <div class="col">
                    <div class="card h-100 bg-dark border-secondary text-white shadow-lg">

                        <!-- PRODUCT IMAGE -->
                        <img 
                            src="<?= htmlspecialchars($product['featured_image'] ?? 'assets/images/no-image.jpg') ?>" 
                            class="card-img-top"
                            alt="<?= htmlspecialchars($product['product_name'] ?? 'Product Image') ?>"
                            style="height: 300px; object-fit: cover;"
                        >

                        <!-- CARD BODY -->
                        <div class="card-body d-flex flex-column">

                            <!-- CATEGORY -->
                            <p class="text-warning small mb-1">
                                <?= htmlspecialchars($product['product_category'] ?? 'Uncategorized') ?>
                            </p>

                            <!-- PRODUCT NAME -->
                            <h5 class="card-title fw-bold">
                                <?= htmlspecialchars($product['product_name'] ?? 'Unnamed Product') ?>
                            </h5>

                            <!-- PRICE -->
                            <p class="text-warning fs-4 fw-bold mt-auto">
                                $<?= number_format((float)($product['product_price'] ?? 0), 2) ?>
                            </p>

                            <!-- BUTTON -->
                            <a 
                                href="product_details.php?id=<?= (int)($product['id'] ?? 0) ?>" 
                                class="btn btn-outline-warning mt-3 w-100"
                            >
                                View Details
                            </a>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>

<?php include "include/footer.php"; ?>