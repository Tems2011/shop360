
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
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{
            background:#000 !important;
            padding:15px 6%;
            border-bottom:1px solid rgba(212,175,55,0.2);
        }

        .navbar-brand img{
            object-fit:contain;
        }

        .navbar-nav .nav-link{
            color:white !important;
            margin-left:15px;
            font-weight:500;
            transition:0.3s;
        }

        .navbar-nav .nav-link:hover{
            color:#d4af37 !important;
        }

        .search-box{
            display:flex;
            align-items:center;
            background:#141414;
            border-radius:40px;
            overflow:hidden;
            border:1px solid #5c0f24;
        }

        .search-box input{
            background:transparent;
            border:none;
            outline:none;
            color:white;
            padding:10px 15px;
            width:220px;
        }

        .search-box button{
            border:none;
            padding:10px 18px;
            background:#5c0f24;
            color:#d4af37;
            font-weight:500;
        }

        .search-box button:hover{
            background:#7c1734;
        }

        /* HERO SECTION */

        .hero{
            min-height:95vh;
            background:
            linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),
            url('https://images.unsplash.com/photo-1445205170230-053b83016050?q=80&w=1400&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            display:flex;
            align-items:center;
            padding:80px 6%;
        }

        .hero-content h1{
            font-size:70px;
            font-weight:700;
            margin-bottom:20px;
        }

        .hero-content span{
            color:#d4af37;
        }

        .hero-content p{
            max-width:650px;
            color:#ddd;
            font-size:18px;
            line-height:1.8;
            margin-bottom:35px;
        }

        .hero-buttons{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .btn-custom{
            padding:14px 35px;
            border:none;
            border-radius:40px;
            font-weight:500;
            transition:0.3s;
        }

        .btn-shop{
            background:#5c0f24;
            color:white;
        }

        .btn-shop:hover{
            background:#d4af37;
            color:#111;
        }

        .btn-collection{
            background:transparent;
            border:1px solid #d4af37;
            color:#d4af37;
        }

        .btn-collection:hover{
            background:#d4af37;
            color:#111;
        }

        /* FEATURES */

        .features{
            padding:80px 6%;
            background:#111;
        }

        .section-title{
            text-align:center;
            margin-bottom:60px;
        }

        .section-title h2{
            color:#d4af37;
            font-size:42px;
            margin-bottom:10px;
        }

        .section-title p{
            color:#aaa;
        }

        .feature-card{
            background:#161616;
            border:1px solid rgba(212,175,55,0.15);
            border-radius:20px;
            padding:35px 25px;
            text-align:center;
            height:100%;
            transition:0.3s;
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
            line-height:1.7;
        }

        /* COLLECTIONS */

        .collections{
            padding:80px 6%;
            background:#0d0d0d;
        }

        .collection-card{
            background:#161616;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
            border:1px solid rgba(212,175,55,0.1);
            height:100%;
        }

        .collection-card:hover{
            transform:translateY(-8px);
            border-color:#d4af37;
        }

        .collection-card img{
            width:100%;
            height:320px;
            object-fit:cover;
        }

        .collection-content{
            padding:25px;
        }

        .collection-content h4{
            color:#d4af37;
            margin-bottom:12px;
        }

        .collection-content p{
            color:#bbb;
            line-height:1.7;
        }

        /* BANNER */

        .banner{
            padding:70px 6%;
            background:#5c0f24;
            text-align:center;
        }

        .banner h2{
            font-size:42px;
            margin-bottom:15px;
        }

        .banner p{
            color:#f0f0f0;
            margin-bottom:25px;
        }

        /* FOOTER */

        footer{
            background:#000;
            padding:70px 6% 30px;
        }

        .footer-logo{
            width:120px;
            margin-bottom:20px;
        }

        .footer-title{
            color:#d4af37;
            margin-bottom:20px;
            font-size:20px;
        }

        .footer-text,
        .footer-links a{
            color:#bbb;
            text-decoration:none;
            line-height:2;
            transition:0.3s;
        }

        .footer-links a:hover{
            color:#d4af37;
        }

        .newsletter input{
            width:100%;
            padding:12px;
            border:none;
            outline:none;
            margin-bottom:12px;
            background:#161616;
            color:white;
            border-radius:8px;
        }

        .newsletter button{
            width:100%;
            border:none;
            padding:12px;
            background:#5c0f24;
            color:white;
            border-radius:8px;
            transition:0.3s;
        }

        .newsletter button:hover{
            background:#d4af37;
            color:#111;
        }

        .footer-bottom{
            text-align:center;
            margin-top:50px;
            padding-top:25px;
            border-top:1px solid rgba(255,255,255,0.1);
            color:#888;
        }

        /* MOBILE RESPONSIVE */

        @media(max-width:991px){

            .hero{
                text-align:center;
                justify-content:center;
            }

            .hero-content h1{
                font-size:45px;
            }

            .hero-buttons{
                justify-content:center;
            }

            .search-box{
                margin-top:15px;
                width:100%;
            }

            .search-box input{
                width:100%;
            }

        }

        @media(max-width:576px){

            .hero-content h1{
                font-size:36px;
            }

            .section-title h2{
                font-size:30px;
            }

            .banner h2{
                font-size:30px;
            }

        }

    </style>

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
                    <a class="nav-link active" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products.php">Shop</a>
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
