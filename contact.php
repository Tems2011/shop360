
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | VELVET STREET</title>

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

        .contact-hero{
            padding:80px 20px;
            text-align:center;
            background:#111;
        }

        .contact-hero h1{
            color:#d4af37;
            font-size:55px;
            margin-bottom:20px;
        }

        .contact-hero p{
            color:#bbb;
        }

        .contact-section{
            padding:80px 6%;
        }

        .contact-box{
            background:#161616;
            padding:40px;
            border-radius:20px;
            border:1px solid rgba(212,175,55,0.15);
        }

        .contact-box h3{
            color:#d4af37;
            margin-bottom:25px;
        }

        .form-control{
            background:#0d0d0d;
            border:1px solid rgba(255,255,255,0.1);
            color:white;
            padding:14px;
        }

        .form-control:focus{
            background:#0d0d0d;
            color:white;
            border-color:#d4af37;
            box-shadow:none;
        }

        .btn-custom{
            background:#5c0f24;
            border:none;
            color:white;
            padding:14px;
            width:100%;
            border-radius:10px;
            transition:0.3s;
        }

        .btn-custom:hover{
            background:#d4af37;
            color:#111;
        }

        .info-box{
            background:#161616;
            border-radius:20px;
            padding:35px;
            height:100%;
            border:1px solid rgba(212,175,55,0.15);
        }

        .info-box h4{
            color:#d4af37;
            margin-bottom:20px;
        }

        .info-box p{
            color:#bbb;
            line-height:2;
        }

        footer{
            background:#000;
            padding:25px;
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.1);
            color:#888;
        }

        @media(max-width:768px){

            .contact-hero h1{
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
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </div>

</nav>

<!-- HERO -->

<section class="contact-hero">

    <h1>Contact Us</h1>

    <p>
        We'd love to hear from you. Reach out to us anytime.
    </p>

</section>

<!-- CONTACT SECTION -->

<section class="contact-section">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-7">

                <div class="contact-box">

                    <h3>Send Us A Message</h3>

                    <form>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <button class="btn-custom">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="info-box">

                    <h4>Contact Information</h4>

                    <p>
                        📍 Lagos, Nigeria
                    </p>

                    <p>
                        📞 +234 810 753 3097
                    </p>

                    <p>
                        ✉ support@velvetstreet.com
                    </p>

                    <p>
                        🕒 Monday - Saturday: 9AM - 7PM
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
```
