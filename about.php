<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Velvet Street</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#0b0b0b;
            color:#f5f5f5;
            font-size:16px;
        }

        .navbar{
            background-color:#000;
            border-bottom:1px solid #b08d57;
        }

        .brand{
            color:#b08d57 !important;
            font-weight:bold;
            letter-spacing:2px;
            font-size:1.1rem;
        }

        .hero{
            padding:60px 15px;
            text-align:center;
            background:linear-gradient(135deg,#000,#1a1a1a);
            border-bottom:1px solid #b08d57;
        }

        .hero h1{
            color:#b08d57;
            font-size:clamp(28px,5vw,50px);
            font-weight:700;
        }

        .hero p{
            font-size:clamp(14px,3.5vw,18px);
            opacity:0.9;
        }

        .section-title{
            color:#b08d57;
            margin-bottom:15px;
            font-size:clamp(18px,4vw,26px);
        }

        .card-dark{
            background-color:#111;
            border:1px solid #222;
            border-radius:12px;
        }

        .footer{
            margin-top:40px;
            padding:25px 15px;
            text-align:center;
            border-top:1px solid #b08d57;
            background-color:#000;
            font-size:14px;
        }

        .search-box input{
            background:#111;
            border:1px solid #b08d57;
            color:#fff;
        }

        .search-box input::placeholder{
            color:#aaa;
        }

        /* MOBILE-FIRST IMPROVEMENTS */
        @media (max-width: 768px){
            .hero{
                padding:40px 10px;
            }

            .navbar-nav{
                text-align:center;
            }

            .search-box{
                width:100%;
                margin-top:10px;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg px-3">

    <a class="navbar-brand brand" href="products.php">VELVET STREET</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="login.php">login</a></li>
        </ul>

        <form class="d-flex search-box ms-lg-3 mt-2 mt-lg-0">
            <input class="form-control me-2" type="search" placeholder="Search products...">
            <button class="btn btn-outline-warning">Search</button>
        </form>

    </div>
</nav>

<!-- HERO -->
<div class="hero">
    <h1>About Velvet Street</h1>
    <p>Luxury streetwear. Bold identity. Timeless fashion.</p>
</div>

<!-- CONTENT -->
<div class="container px-3 mt-4">

    <div class="text-center mb-4">
        <h2 class="section-title">Who We Are</h2>
        <p>
            Velvet Street is a modern clothing brand built for individuals who express confidence through fashion.
            We combine luxury aesthetics with street culture to create timeless pieces that stand out.
        </p>
    </div>

    <div class="row g-3">

        <div class="col-12 col-md-4">
            <div class="card card-dark p-3 h-100">
                <h4 class="section-title">Our Vision</h4>
                <p>To become a global streetwear brand that defines modern luxury fashion.</p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card card-dark p-3 h-100">
                <h4 class="section-title">Our Mission</h4>
                <p>To deliver high-quality, stylish, and affordable fashion for everyone.</p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card card-dark p-3 h-100">
                <h4 class="section-title">Our Style</h4>
                <p>Black. Gold. Wine. A signature identity that reflects bold elegance.</p>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <h2 class="section-title">Why Choose Us</h2>
        <p>
            Every piece is carefully designed with attention to detail, comfort, and durability.
            Velvet Street is not just clothing — it's a lifestyle.
        </p>
    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    <p>© 2026 Velvet Street. All Rights Reserved.</p>
    <p>Luxury Streetwear Brand</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</