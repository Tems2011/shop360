<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velvet Street Dashboard</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">                     
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">VELVET STREET</div>

    <div class="nav">
        <a href="customer-profile.php">👤 Profile</a>
        <a href="wishlist.php">❤️ Wishlist</a>
        <a href="cart.php">🛒 Cart</a>
        <a href="orders.php">📦 Orders</a>

        <a class="logout" href="logout.php">🚪 Logout</a>
    </div>
</div>

<!-- Main -->
<div class="main">
    <div class="profile-card">
    <h2>Welcome 👋</h2>

    <p><strong>First Name:</strong> <?= $user['firstname'] ?></p>
    <p><strong>Surname:</strong> <?= $user['surname'] ?></p>
    <p><strong>Phone:</strong> <?= $user['phone'] ?></p>
</div>


 <div class="header">
        <p>Manage your profile, wishlist and shopping activity</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Profile</h3>
            <p>View and update your personal details</p>
        </div>

        <div class="card">
            <h3>Wishlist</h3>
            <p>Your saved favorite items</p>
        </div>

        <div class="card">
            <h3>Cart</h3>
            <p>Items ready for checkout</p>
        </div>

        <div class="card">
            <h3>Orders</h3>
            <p>Track your purchase history</p>
        </div>
    </div>
</div>

</body>
</html>