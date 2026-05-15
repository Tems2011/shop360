<?php
session_start();
$page_title = "Shop - Velvet Street";
include "includes/header.php";

require_once "config/db_connect.php";
require_once "classes/Product.php";

$productInstance = new Product();
$products = $productInstance->getProductWithImages($pdo);
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Our Collection</h1>
        <p class="lead text-light-emphasis">Premium Streetwear & Luxury Fashion</p>
    </div>

    <?php if (empty($products)): ?>
        <div class="text-center py-5">
            <h3>No products available at the moment</h3>
            <p>Please check back later.</p>
        </div>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100 bg-dark border-secondary text-white">
                        <img src="<?= htmlspecialchars($product['featured_image'] ?? 'assets/images/no-image.jpg') ?>" 
                             class="product-img" 
                             alt="<?= htmlspecialchars($product['product_name'] ?? '') ?>">
                        
                        <div class="card-body d-flex flex-column">
                            <p class="text-warning small mb-1">
                                <?= htmlspecialchars($product['product_category'] ?? 'Uncategorized') ?>
                            </p>
                            <h5 class="card-title"><?= htmlspecialchars($product['product_name'] ?? 'Unnamed Product') ?></h5>
                            
                            <p class="price text-gold fs-4 fw-bold mt-auto">
                                $<?= number_format($product['product_price'] ?? 0, 2) ?>
                            </p>
                            
                            <a href="product_details.php?id=<?= (int)$product['id'] ?>" 
                               class="btn btn-outline-light mt-3">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include "includes/footer.php"; ?>