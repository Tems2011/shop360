<?php
// footer.php
?>
<!-- ==================== FOOTER ==================== -->
<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row g-5">
            
            <!-- Brand -->
            <div class="col-lg-4 col-md-6">
                <img src="assets/images/logo.png" class="footer-logo mb-3" alt="VELVET STREET" width="110">
                <p class="footer-text text-light-emphasis">
                    VELVET STREET is a luxury fashion brand focused on modern streetwear, premium quality, and timeless elegance.
                </p>
                <div class="mt-3">
                    <a href="#" class="me-3 text-light"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="me-3 text-light"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-tiktok fs-4"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title mb-3 text-gold">Quick Links</h5>
                <div class="footer-links d-flex flex-column gap-2">
                    <a href="index.php" class="text-light text-decoration-none">Home</a>
                    <a href="products.php" class="text-light text-decoration-none">Shop</a>
                    <a href="logout.php" class="text-light text-decoration-none">Logout</a>
                    <a href="about.php" class="text-light text-decoration-none">About Us</a>
                    <a href="contact.php" class="text-light text-decoration-none">Contact</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-3 text-gold">Contact Us</h5>
                <p class="mb-2"><i class="bi bi-envelope"></i> support@velvetstreet.com</p>
                <p class="mb-2"><i class="bi bi-telephone"></i> +234 000 000 0000</p>
                <p><i class="bi bi-geo-alt"></i> Lagos, Nigeria</p>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-3 text-gold">Stay Updated</h5>
                <p class="small mb-3">Get early access to new drops and exclusive offers.</p>
                <div class="newsletter d-flex">
                    <input type="email" class="form-control bg-transparent text-light border-secondary" placeholder="Your email">
                    <button class="btn btn-gold ms-2">Subscribe</button>
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">
        
        <div class="footer-bottom text-center text-light-emphasis small">
            © <?= date("Y") ?> VELVET STREET. All Rights Reserved. | Crafted with <span style="color:#d4af37">♥</span> in Lagos
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>