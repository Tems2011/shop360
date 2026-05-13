<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Street | Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php include_once "nav.php"; 
?>

<div class="auth-box">

    <div class="brand">
        <h1>VELVET STREET</h1>
        <p>Luxury fashion • Street style • Confidence</p>
    </div>

    <div class="page-title">
        <h3>Login</h3>
    </div>

    <?php
    if (isset($_SESSION["success"])) {
        echo "<div class='message'>" . $_SESSION["success"] . "</div>";
        unset($_SESSION["success"]);
    }
    ?>

    <form action="processes/login-processes.php" method="POST">

        <label class="form-label">Email</label>
        <input type="email" class="form-control mb-3" name="email" required>

        <label class="form-label">Password</label>
        <input type="password" class="form-control mb-3" name="password" required>

        <button type="submit" class="btn btn-primary w-100">Login</button>

    </form>

    <div class="register-link">
        Don't have an account? <a href="registration.php">Create Account</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>