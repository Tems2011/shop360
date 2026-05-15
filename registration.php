<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Street | Create Account</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "assets/css/registration.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

       
</head>

<body>
    

<div class="auth-box">

    <div class="brand">
        <h1>VELVET STREET</h1>
        <p>Luxury fashion • Street style • Confidence</p>
    </div>

    <div class="page-title">
        <h3>Create Account</h3>
    </div>

    <?php
    if (isset($_SESSION["error"])) {
        echo "<div class='error'>" . $_SESSION["error"] . "</div>";
        unset($_SESSION["error"]);
    }
    ?>

    <form action="processes/register_processes.php" method="POST">

        <label class="form-label">Email</label>
        <input type="email" class="form-control mb-3" name="email" required>

        <label class="form-label">Password</label>
        <input type="password" class="form-control mb-3" name="password" required>

        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control mb-3" name="confirm_password" required>

        <button type="submit" class="btn btn-primary w-100">Create Account</button>

    </form>

    <div class="login-link">
        Already have an account? <a href="login.php">Login</a>
    </div>

    <div class="login-link">
       <a href="index.php">Home</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>