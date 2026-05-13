<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | VELVET STREET</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Poppins, sans-serif;
        }

        body{
            background:#0d0d0d;
            color:white;
        }

        .navbar{
            background:#000;
            border-bottom:1px solid rgba(212,175,55,0.2);
        }

        .navbar .nav-link{
            color:white !important;
            margin-left:15px;
        }

        .navbar .nav-link:hover{
            color:#d4af37 !important;
        }

        .hero{
            min-height:60vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            background:
            linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=1200&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            padding:40px;
        }

        .hero h1{
            font-size:60px;
            color:#d4af37;
            margin-bottom:20px;
        }

        .hero p{
            max-width:700px;
            margin:auto;
            color:#ddd;
            line-height:1.8;
        }

        .about-section{
            padding:80px 6%;
        }

        .about-title{
            color:#d4af37;
            margin-bottom:20px;
        }

        .about-text{
            color:#bbb;
            line-height:1.9;
        }

        .info-card{
            background:#161616;
            border:1px solid rgba(212,175,55,0.15);
            border-radius:20px;
            padding:35px 25px;
            text-align:center;
            transition:0.3s;
            height:100%;
        }

        .info-card:hover{
            transform:translateY(-8px);
            border-color:#d4af37;
        }

        .info-card h4{
            color:#d4af37;
            margin-bottom:15px;
        }

        .info-card p{
            color:#bbb;
            line-height:1.7;
        }

        footer{
            background:#000;
            padding:25px;
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.1);
            color:#888;
        }

        @media(max-width:768px){

            .hero h1{
                font-size:40px;
            }

        }

    </style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark py-3">

    <div class="container">

        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" width="80" height="80" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Shop</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </div>

</nav>

<!-- HERO -->

<section class="hero">

    <div>

        <h1>About VELVET STREET</h1>

        <p>
            Luxury streetwear crafted for confidence, elegance, and modern fashion lovers.
        </p>

    </div>

</section>

<!-- ABOUT CONTENT -->

<section class="about-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4">

            </div>

            <div class="col-lg-6">

                <h2 class="about-title">Who We Are</h2>

                <p class="about-text">
                    VELVET STREET is a modern luxury fashion brand focused on blending premium streetwear with timeless elegance. We create fashion pieces designed for confidence, comfort, and individuality.
                </p>

                <p class="about-text mt-3">
                    Our collections are inspired by urban culture, luxury aesthetics, and the desire to help people express their unique style through fashion.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- VALUES -->

<section class="pb-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">
                <div class="info-card">
                    <h4>Premium Quality</h4>
                    <p>
                        We use carefully selected materials to ensure durability, luxury, and comfort.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4>Modern Fashion</h4>
                    <p>
                        Our collections combine modern streetwear trends with timeless fashion styles.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4>Customer Satisfaction</h4>
                    <p>
                        We are dedicated to giving customers a premium shopping experience.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<footer>
    © 2026 VELVET STREET. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
