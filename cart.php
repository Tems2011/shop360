<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); exit();
}

$page_title = "Cart - Velvet Street";
include "include/header.php";

$total = 0;
?>

<div class="container py-5">
    <h2 class="mb-4">Shopping Cart</h2>

    <?php if (empty($_SESSION['cart'])): ?>
        <div class="text-center py-5">
            <h4>Your cart is empty</h4>
            <a href="products.php" class="btn btn-gold mt-3">Browse Products</a>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($_SESSION['cart'] as $key => $item): 
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                ?>
                    <div class="card bg-dark border-secondary mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?= htmlspecialchars($item['image']) ?>" class="img-fluid h-100" style="object-fit:cover;" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5><?= htmlspecialchars($item['name']) ?></h5>
                                    <p class="text-gold">₦<?= number_format($item['price'], 2) ?></p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <input type="number" value="<?= $item['quantity'] ?>" min="1" 
                                               class="form-control" style="width:100px;" onchange="updateQuantity(<?= $key ?>, this.value)">
                                        <button onclick="removeFromCart(<?= $key ?>)" class="btn btn-outline-danger btn-sm">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-4">
                <div class="card bg-dark border-secondary sticky-top" style="top:100px;">
                    <div class="card-body">
                        <h4>Order Summary</h4>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <strong>₦<?= number_format($total, 2) ?></strong>
                        </div>
                        <button class="btn btn-gold w-100 btn-lg">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
function removeFromCart(key) {
    if (confirm("Remove this item?")) {
        window.location.href = `processes/remove_cart.php?key=${key}`;
    }
}
function updateQuantity(key, qty) {
    window.location.href = `processes/update_cart.php?key=${key}&qty=${qty}`;
}
</script>

<?php include "include/footer.php"; ?>