<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Velvet Street Clothing</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


<nav class="navbar navbar-expand-lg">
  <div class="container">
    <img src="assets/images/logo.png" alt="" class="d-inline-block align-text-top" width="150" height="150">
    <a class="navbar-brand" href="#">VELVET STREET</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>


<section class="hero" id="home">
  <h1>VELVET STREET</h1>
  <p>Luxury • Elegance • Streetwear Redefined</p>
</section>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/image_cfba922d (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/image_8e383009.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/image_b44d1aef.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- PRODUCTS -->
<section class="container py-5" id="shop">
  <h2 class="text-center mb-5" style="color:#b08d57;">Featured Collection</h2>

  <div class="row g-4">

    <div class="col-md-4">
      <div class="card p-3">
        <img src="assets/images\hoodie.png" class="card-img-top" alt="Hoodie">
        <div class="card-body">
          <h5 class="card-title">Velvet Noir Hoodie</h5>
          <p>Premium black hoodie with gold detailing.</p>
          <button class="btn btn-outline-warning w-100">Shop Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3">
        <img src="assets/images/tee.png" class="card-img-top" alt="Tee">
        <div class="card-body">
          <h5 class="card-title">Wine Street Tee</h5>
          <p>Deep wine oversized streetwear tee.</p>
          <button class="btn btn-outline-warning w-100">Shop Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3">
        <img src="assets/images/jacket.png" class="card-img-top" alt="Jacket">
        <div class="card-body">
          <h5 class="card-title">Gold Line Jacket</h5>
          <p>Luxury black jacket with gold accents.</p>
          <button class="btn btn-outline-warning w-100">Shop Now</button>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="container py-5" id="about">
  <div class="card p-4">
    <h3 class="card-title">About Velvet Street</h3>
    <p>
      Velvet Street is a luxury streetwear brand combining bold fashion with elegance.
      Every piece is designed to express confidence, culture, and class.
      Designed for creators,leaders and individuals who stand out in the crowd.Velvet blends luxury aesthetics with authentic streetwear culture.
    </p>
  </div>
</section>

<footer id="contact">
  <p>© 2026 Velvet Street Clothing. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>