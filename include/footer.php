<!-- includes/sidebar.php -->
<div class="sidebar" id="sidebar">
    <div class="logo text-center">VELVET STREET</div>
    
    <div class="p-3">
        <a href="dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
            <i class="fas fa-home me-2"></i> Dashboard
        </a>
        <a href="customer-profile.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'customer-profile.php' ? 'active' : '' ?>">
            <i class="fas fa-user me-2"></i> My Profile
        </a>
        <a href="orders.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'orders.php' ? 'active' : '' ?>">
            <i class="fas fa-shopping-bag me-2"></i> My Orders
        </a>
        <a href="wishlist.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? 'active' : '' ?>">
            <i class="fas fa-heart me-2"></i> Wishlist
        </a>
        <a href="cart.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'cart.php' ? 'active' : '' ?>">
            <i class="fas fa-cart-shopping me-2"></i> Cart
        </a>
        <a href="addresses.php" class="nav-link">
            <i class="fas fa-map-marker-alt me-2"></i> Addresses
        </a>
        
        <hr class="my-4 mx-3 text-secondary">
        
        <a href="logout.php" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>
</div>

<!-- Mobile Toggle Button -->
<button class="btn btn-dark position-fixed top-3 start-3 d-lg-none" onclick="toggleSidebar()" style="z-index: 1100;">
    <i class="fas fa-bars"></i>
</button>