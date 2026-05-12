<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Velvet Street</title>

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
        }

        .section-title{
            color:#b08d57;
            margin-bottom:15px;
        }

        .card-dark{
            background-color:#111;
            border:1px solid #222;
            border-radius:12px;
        }

        .form-control{
            background:#111;
            border:1px solid #333;
            color:#fff;
        }

        .form-control:focus{
            border-color:#b08d57;
            box-shadow:none;
        }

        .btn-gold{
            background:#b08d57;
            color:#000;
            font-weight:600;
        }

        .btn-gold:hover{
            background:#d1a866;
        }

        .footer{
            margin-top:40px;
            padding:25px 15px;
            text-align:center;
            border-top:1px solid #b08d57;
            background-color:#000;
        }

        /* MOBILE FIRST */
        @media (max-width:768px){
            .hero{
                padding:40px 10px;
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

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="contact.php">Contact</a></li>
        </ul>

    </div>
</nav>

<!-- HERO -->
<div class="hero">
    <h1>Contact Us</h1>
    <p>We are here to help you with orders, support and inquiries.</p>
</div>

<!-- CONTACT SECTION -->
<div class="container mt-5 px-3">

    <div class="row justify-content-center">

        <div class="col-12 col-md-8">

            <div class="card card-dark p-4">

                <h3 class="section-title text-center">Send Us a Message</h3>

                <form action="process/contact_process.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-control" placeholder="Write your message..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-gold w-100">Send Message</button>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    <p>© 2026 Velvet Street. All Rights Reserved.</p>
    <p>Luxury Streetwear Brand</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
