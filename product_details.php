<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

require_once "config/db_connect.php";
require_once "classes/Product.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Product ID not found");
}

$id = (int)$_GET['id'];

$productInstance = new Product();
$product = $productInstance->getProductById($pdo, $id);

if (!$product) {
    die("Product not found");
}

$page_title = htmlspecialchars($product['product_name'] ?? 'Product Details');

include "include/header.php";

/* =========================
   MULTIPLE IMAGES SUPPORT
========================= */
$images = !empty($product['featured_image'])
    ? explode(',', $product['featured_image'])
    : ['assets/images/no-image.jpg'];

$mainImage = $images[0];
?>

<link rel="stylesheet" href="assets/css/product-details.css">

<div class="container py-5">

    <!-- ALERTS -->
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success rounded-4 shadow-sm">
            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger rounded-4 shadow-sm">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <!-- PRODUCT CARD -->
    <div class="row g-0 shadow-lg product-card">

        <!-- IMAGE SECTION -->
        <div class="col-lg-6 product-image-section">

            <!-- MAIN IMAGE -->
            <img
                id="mainProductImage"
                src="<?= htmlspecialchars($mainImage) ?>"
                alt="<?= htmlspecialchars($product['product_name']) ?>"
                class="product-main-image"
            >

            <!-- CATEGORY BADGE -->
            <span class="product-badge">
                <?= htmlspecialchars($product['product_category'] ?? 'Luxury Fashion') ?>
            </span>

            <!-- THUMBNAILS UNDER IMAGE -->
            <?php if (count($images) > 1): ?>
                <div class="product-thumbnails">
                    <?php foreach ($images as $img): ?>
                        <img
                            src="<?= htmlspecialchars(trim($img)) ?>"
                            class="thumb-image"
                            onclick="document.getElementById('mainProductImage').src=this.src"
                        >
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

        <!-- DETAILS SECTION -->
        <div class="col-lg-6">
            <div class="p-4 p-lg-5 d-flex flex-column h-100">

                <h1 class="product-title mb-3">
                    <?= htmlspecialchars($product['product_name']) ?>
                </h1>

                <h2 class="product-price mb-4">
                    ₦<?= number_format((float)$product['product_price'], 2) ?>
                </h2>

                <div class="mb-4">
                    <h5 class="product-section-title mb-3">
                        Product Description
                    </h5>

                    <p class="product-description">
                        <?= nl2br(htmlspecialchars($product['product_description'])) ?>
                    </p>
                </div>

                <hr>

                <!-- ORDER FORM -->
                <form action="place-order.php" method="POST">

                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <input type="hidden" name="price" value="<?= $product['product_price'] ?>">

                    <div class="mb-3">
                        <label class="form-label text-light">Quantity</label>
                        <input type="number" name="quantity"
                               class="form-control product-input"
                               value="1" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Shipping Address</label>
                        <textarea name="shipping_address"
                                  rows="3"
                                  class="form-control product-textarea"
                                  required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-light">Payment Type</label>
                        <select name="payment_type"
                                class="form-select product-select"
                                required>
                            <option value="">Select Payment Method</option>
                            <option value="Cash on Delivery">Cash on Delivery</option>
                            <option value="Card">Card</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>

                    <button type="submit" class="btn w-100 py-3 fw-bold btn-gold">
                        Place Order
                    </button>

                </form>

                <a href="products.php"
                   class="btn w-100 mt-3 py-3 fw-semibold btn-outline-custom">
                    ← Back to Shop
                </a>

            </div>
        </div>

    </div>

</div>

<?php include "include/footer.php"; ?>