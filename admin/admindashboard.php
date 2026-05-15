<?php

session_start();

require_once "../config/db_connect.php";
require_once "../classes/product.php";
require_once "../classes/order.php";

/*
    TEMP AUTH (your current system)
    later we will upgrade to role-based:
    $_SESSION['role'] == 'admin'
*/

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
$productsInstance = new Product;
$products = $productsInstance->getAllProducts($pdo);
$totalProducts = count($products);

// FETCH DATA FROM DATABASE (NO HARD CODING)
//$products = getProducts($pdo);
//$orders = getOrders($pdo);

// STATS (REAL DATA)


$ordersInstance = new Order;
$orders = $ordersInstance->getAllOrders($pdo);
$totalOrders = count($orders);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Velvet Street</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="admin-container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="sidebar-logo">
            <h2>VELVET STREET</h2>
        </div>

        <div class="sidebar-menu">
            <a href="admindashboard.php" class="active">Dashboard</a>
            <a href="manageproduct.php"> Product</a>
            <a href="manageorders.php">Orders</a>
            <a href="customers.php">Customers</a>
            <a href="../logout.php">Logout</a>
        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="admin-header">
            <h1>Admin Dashboard</h1>
            <p>Manage your Velvet Street store</p>
        </div>

        <!-- STATS CARDS (DATABASE DRIVEN) -->
        <div class="dashboard-grid">

            <div class="stat-card">
                <div class="stat-number"><?php echo $totalProducts; ?></div>
                <div class="stat-label">Total Products</div>
            </div>

            <div class="stat-card">
                <div class="stat-number"><?php echo $totalOrders; ?></div>
                <div class="stat-label">Total Orders</div>
            </div>

        </div>

        <!-- RECENT PRODUCTS TABLE -->
        <h2 class="text-gold mb-20">Recent Products</h2>

        <table class="admin-table">

            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>

            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['product_category']; ?></td>
                    <td><?php echo $product['product_price']; ?></td>
                    <td>
                        <?php 
                            echo ($product['in_stock'] == 1) ? "In Stock" : "Out of Stock"; 
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>

</div>

</body>
</html>