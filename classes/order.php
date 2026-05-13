<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$page_title = "My Orders - Velvet Street";
include "includes/header.php";

require_once "config/db_connect.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT o.*, p.product_name 
        FROM orders o 
        LEFT JOIN products p ON o.product_id = p.id 
        WHERE o.customer_id = :customer_id 
        ORDER BY o.created_at DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute([':customer_id' => $user_id]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container py-5">
    <h2 class="mb-4">My Orders</h2>

    <?php if (empty($orders)): ?>
        <div class="text-center py-5">
            <h4>You have no orders yet.</h4>
            <a href="products.php" class="btn btn-gold mt-3">Start Shopping</a>
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                    <tr>
                        <td>#<?= str_pad($order['id'], 6, '0', STR_PAD_LEFT) ?></td>
                        <td><?= htmlspecialchars($order['product_name']) ?></td>
                        <td><?= date("d M, Y", strtotime($order['created_at'])) ?></td>
                        <td class="text-gold">₦<?= number_format($order['total_amount'], 2) ?></td>
                        <td>
                            <span class="badge bg-<?= strtolower($order['status']) === 'delivered' ? 'success' : (strtolower($order['status']) === 'pending' ? 'warning' : 'info') ?>">
                                <?= htmlspecialchars($order['status']) ?>
                            </span>
                        </td>
                        <td>
                            <a href="order_details.php?id=<?= $order['id'] ?>" class="btn btn-sm btn-outline-light">
                                View
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?php include "includes/footer.php"; ?>