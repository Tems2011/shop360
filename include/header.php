<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Velvet Street | Luxury Fashion' ?></title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        :root {
            --gold: #d4af37;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #fff;
        }
        .navbar {
            background-color: #000 !important;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        }
        .nav-link {
            color: #ddd !important;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--gold) !important;
        }
        .brand-gold {
            color: var(--gold);
            font-weight: 700;
            letter-spacing: 2px;
        }
        .btn-gold {
            background-color: var(--gold);
            color: #000;
            font-weight: 600;
        }
        .btn-gold:hover {
            background-color: #c9a030;
            color: #000;
        }
        .product-img {
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
    <div class="container">
        <a class="navbar-brand brand-gold fs-4" href="index.php">
            <strong>VELVET STREET</strong>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>" href="products.php">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="cart.php" class="nav-link position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge bg-warning position-absolute top-0 start-100 translate-middle"><?= count($_SESSION['cart'] ?? []) ?></span>
                    </a>
                    <a href="dashboard.php" class="nav-link">Account</a>
                    <a href="logout.php" class="nav-link text-danger">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="nav-link">Login</a>
                    <a href="registration.php" class="btn btn-gold btn-sm">Create Account</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>