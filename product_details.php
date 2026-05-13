<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}

require_once "config/db_connect.php";
require_once "classes/Product.php";

if(!isset($_GET['id'])){
    die("Product ID not found");
}

$id = $_GET['id'];

$productInstance = new Product();

$product = $productInstance->getProductById($pdo, $id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['product_name']; ?> | VELVET STREET</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#0d0d0d;
            color:white;
        }

        /* NAVBAR */

        .navbar{
            background:#000;
            border-bottom:1px solid rgba(212,175,55,0.15);
        }

        .navbar-brand{
            color:#d4af37 !important;
            font-weight:700;
            letter-spacing:2px;
        }

        .nav-link{
            color:white !important;
            margin-left:15px;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#d4af37 !important;
        }

        /* PRODUCT SECTION */

        .product-section{
            padding:80px 0;
        }

        .product-card{
            background:#161616;
            border-radius:25px;
            overflow:hidden;
            border:1px solid rgba(212,175,55,0.15);
            box-shadow:0 10px 30px rgba(0,0,0,0.5);
        }

        .product-image{
            width:100%;
            height:100%;
            min-height:500px;
            object-fit:cover;
            background:#111;
        }

        .product-content{
            padding:50px;
        }

        .product-category{
            color:#d4af37;
            font-size:14px;
            letter-spacing:2px;
            text-transform:uppercase;
            margin-bottom:15px;
        }

        .product-title{
            font-size:45px;
            font-weight:700;
            margin-bottom:20px;
        }

        .product-price{
            font-size:32px;
            color:#5c0f24;
            font-weight:700;
            margin-bottom:25px;
        }

        .product-description{
            color:#bbb;
            line-height:2;
            margin-bottom:35px;
        }

        .info-box{
            background:#111;
            border-radius:15px;
            padding:20px;
            margin-bottom:30px;
            border:1px solid rgba(255,255,255,0.08);
        }

        .info-box p{
            margin-bottom:10px;
            color:#ccc;
        }

        .btn-custom{
            padding:14px 35px;
            border:none;
            border-radius:40px;
            font-weight:500;
            transition:0.3s;
        }

        .btn-cart{
            background:#5c0f24;
            color:white;
        }

        .btn-cart:hover{
            background:#d4af37;
            color:#111;
        }

        .btn-back{
            background:transparent;
            border:1px solid #d4af37;
            color:#d4af37;
        }

        .btn-back:hover{
            background:#d4af37;
            color:#111;
        }

        /* FEATURES */

        .features{
            padding:70px 0;
        }

        .feature-card{
            background:#161616;
            padding:30px;
            border-radius:20px;
            text-align:center;
            border:1px solid rgba(212,175,55,0.1);
            transition:0.3s;
            height:100%;
        }

        .feature-card:hover{
            transform:translateY(-8px);
            border-color:#d4af37;
        }

        .feature-card h4{
            color:#d4af37;
            margin:20px 0 15px;
        }

        .feature-card p{
            color:#bbb;
            line-height:1.8;
        }

        /* FOOTER */

        footer{
            background:#000;
            padding:40px 0;
            margin-top:70px;
            border-top:1px solid rgba(255,255,255,0.08);
        }

        .footer-text{
            color:#888;
            text-align:center;
        }

        @media(max-width:991px){

            .product-content{
                padding:35px;
            }

            .product-title{
                font-size:35px;
            }

            .product-image{
                min-height:350px;
            }

        }

        @media(max-width:576px){

            .product-title{
                font-size:28px;
            }

            .product-price{
                font-size:25px;
            }

            .product-content{
                padding:25px;
            }

            .btn-custom{
                width:100%;
                margin-bottom:15px;
            }

        }

    </style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark py-3">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            VELVET STREET
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products.php">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="orders.php">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- PRODUCT DETAILS -->

<section class="product-section">

    <div class="container">

        <div class="product-card">

            <div class="row g-0">

                <!-- PRODUCT IMAGE -->

                <div class="col-lg-6">

                    <img 
                        src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?q=80&w=1200&auto=format&fit=crop" 
                        class="product-image"
                        alt="Product Image"
                    >

                </div>

                <!-- PRODUCT CONTENT -->

                <div class="col-lg-6">

                    <div class="product-content">

                        <p class="product-category">
                            <?= $product['product_category']; ?>
                        </p>

                        <h1 class="product-title">
                            <?= $product['product_name']; ?>
                        </h1>

                        <h2 class="product-price">
                            ₦<?= number_format($product['product_price']); ?>
                        </h2>

                        <p class="product-description">
                            <?= $product['product_description']; ?>
                        </p>

                        <div class="info-box">

                            <p>
                                <strong>Category:</strong>
                                <?= $product['product_category']; ?>
                            </p>

                            <p>
                                <strong>Availability:</strong>
                                In Stock
                            </p>

                            <p>
                                <strong>Brand:</strong>
                                VELVET STREET
                            </p>

                        </div>

                        <div class="d-flex flex-wrap gap-3">

                            <button class="btn-custom btn-cart">
                                Add To Cart
                            </button>

                            <a href="products.php" class="btn-custom btn-back text-decoration-none">
                                Back To Shop
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="features">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="feature-card">

                    <h4>Premium Quality</h4>

                    <p>
                        Carefully crafted luxury fashion made with premium materials and modern finishing.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card">

                    <h4>Fast Delivery</h4>

                    <p>
                        Reliable nationwide delivery with secure packaging and tracking.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card">

                    <h4>Secure Payments</h4>

                    <p>
                        Safe and trusted payment methods for seamless shopping experience.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>

    <div class="container">

        <p class="footer-text">
            © 2026 VELVET STREET. All Rights Reserved.
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>