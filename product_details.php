<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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

$mainImage = $product['featured_image'] ?? 'assets/images/no-image.jpg';

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $quantity = max(1, (int)($_POST['quantity'] ?? 1));
    
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product['id']) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        $_SESSION['cart'][] = [
            'id'       => $product['id'],
            'name'     => $product['product_name'],
            'price'    => $product['product_price'],
            'image'    => $mainImage,
            'quantity' => $quantity
        ];
    }
    
    $success = "✅ {$product['product_name']} added to cart!";
}

$page_title = htmlspecialchars($product['product_name'] ?? 'Product Details');
include "includes/header.php";
?>

<div class="container py-5">
    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <div class="row g-5 bg-dark border border-secondary rounded-4 overflow-hidden">
        <!-- Images -->
        <div class="col-lg-6 p-4">
            <img id="mainImage" src="<?= htmlspecialchars($mainImage) ?>" 
                 class="img-fluid rounded-4" style="width:100%; height:520px; object-fit:cover;" alt="">
            
            <?php if (!empty($product['images'])): ?>
            <div class="d-flex gap-3 mt-4 flex-wrap">
                <?php foreach($product['images'] as $i => $img): ?>
                    <img src="<?= htmlspecialchars($img['image_path']) ?>" 
                         class="thumbnail rounded <?= $i===0 ? 'active' : '' ?>" 
                         style="width:80px; height:80px; object-fit:cover; cursor:pointer; border:3px solid transparent;"
                         onclick="changeImage(this)">
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Details -->
        <div class="col-lg-6">
            <div class="p-4 p-lg-5">
                <p class="text-warning"><?= htmlspecialchars($product['product_category'] ?? '') ?></p>
                <h1 class="display-5 fw-bold"><?= htmlspecialchars($product['product_name'] ?? '') ?></h1>
                <h2 class="text-gold fs-1 fw-bold">₦<?= number_format($product['product_price'] ?? 0, 2) ?></h2>
                
                <p class="lead mt-4"><?= nl2br(htmlspecialchars($product['product_description'] ?? '')) ?></p>

                <form method="POST" class="mt-4">
                    <div class="d-flex gap-3 align-items-center">
                        <input type="number" name="quantity" value="1" min="1" class="form-control" style="width:120px;">
                        <button type="submit" name="add_to_cart" class="btn btn-gold btn-lg px-5">
                            Add to Cart
                        </button>
                    </div>
                </form>

                <a href="products.php" class="btn btn-outline-light mt-4">← Back to Shop</a>
            </div>
        </div>
    </div>
</div>

<script>
function changeImage(thumb) {
    document.getElementById('mainImage').src = thumb.src;
    document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
}
</script>

<?php include "includes/footer.php"; ?>