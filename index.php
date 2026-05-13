
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELVET STREET</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" alt="logo" width="90" height="90">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">contact</a>
                </li>


            <form class="search-box">
                <input type="text" placeholder="Search products...">
                <button type="submit">Search</button>
            </form>

        </div>

    </div>

</nav>

<!-- HERO SECTION -->

<section class="hero">

    <div class="hero-content">

        <h1>Luxury Fashion For The <span>Modern Street</span></h1>

        <p>
            Discover premium streetwear and timeless fashion pieces designed for confidence, elegance, and comfort. VELVET STREET brings luxury and urban culture together.
        </p>

        <div class="hero-buttons">
            <button class="btn-custom btn-shop">Shop Now</button>
            <button class="btn-custom btn-collection">Explore Collections</button>
        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="features">

    <div class="section-title">
        <h2>Why Choose Us</h2>
        <p>Luxury experience crafted for fashion lovers.</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-card">
                <h4>Premium Quality</h4>
                <p>
                    Carefully crafted outfits made with premium fabrics and modern finishing.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <h4>Fast Delivery</h4>
                <p>
                    Nationwide delivery with secure packaging and reliable shipping.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <h4>Exclusive Collections</h4>
                <p>
                    Limited edition drops inspired by luxury and modern street culture.
                </p>
            </div>
        </div>

    </div>

</section>

<!-- COLLECTIONS -->

<section class="collections">

    <div class="section-title">
        <h2>Featured Collections</h2>
        <p>Explore our latest fashion collections.</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="collection-card">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1200&auto=format&fit=crop">

                <div class="collection-content">
                    <h4>Urban Luxury</h4>
                    <p>
                        Elegant fashion pieces inspired by modern street culture.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="collection-card">
                <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=1200&auto=format&fit=crop">

                <div class="collection-content">
                    <h4>Premium Essentials</h4>
                    <p>
                        Timeless everyday outfits built with comfort and class.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="collection-card">
                <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=1200&auto=format&fit=crop">

                <div class="collection-content">
                    <h4>Signature Styles</h4>
                    <p>
                        Exclusive collections made for confidence and luxury.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- BANNER -->

<section class="banner">

    <h2>Free Shipping On Orders Over ₦50,000</h2>

    <p>
        Shop your favorite fashion pieces and enjoy premium delivery nationwide.
    </p>

    <button class="btn-custom btn-collection">
        Start Shopping
    </button>

</section>

<!-- FOOTER -->

<footer>

    <div class="row g-5">

        <div class="col-lg-4">

            <img src="assets/images/logo.png" class="footer-logo" alt="logo">

            <p class="footer-text">
                VELVET STREET is a luxury fashion brand focused on modern streetwear, premium quality, and timeless elegance.
            </p>

        </div>

        <div class="col-lg-2 col-md-6">

            <h4 class="footer-title">Quick Links</h4>

            <div class="footer-links d-flex flex-column">
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="#">Collections</a>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <h4 class="footer-title">Contact</h4>

            <p class="footer-text">Email: support@velvetstreet.com</p>
            <p class="footer-text">Phone: +234 000 000 0000</p>
            <p class="footer-text">Location: Lagos, Nigeria</p>

        </div>

        <div class="col-lg-3">

            <h4 class="footer-title">Newsletter</h4>

            <div class="newsletter">
                <input type="email" placeholder="Enter your email">
                <button>Subscribe</button>
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        © 2026 VELVET STREET. All Rights Reserved.
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
