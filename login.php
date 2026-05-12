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

    <style>
        body {
            background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.85)),
            url('https://images.unsplash.com/photo-1520975916090-3105956dac38?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .auth-box {
            width: 100%;
            max-width: 420px;
            background: #111;
            border: 1px solid #2a2a2a;
            border-radius: 14px;
            padding: 35px;
            color: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
        }

        .brand {
            text-align: center;
            margin-bottom: 15px;
        }

        .brand h1 {
            font-size: 28px;
            color: gold;
            letter-spacing: 3px;
            margin-bottom: 5px;
        }

        .brand p {
            font-size: 13px;
            color: #aaa;
        }

        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .page-title h3 {
            color: #fff;
            font-weight: bold;
        }

        .form-control {
            background: #1b1b1b;
            border: 1px solid #333;
            color: #fff;
        }

        .form-control:focus {
            border-color: gold;
            box-shadow: none;
        }

        .btn-primary {
            background: gold;
            border: none;
            color: #000;
            font-weight: bold;
            padding: 10px;
        }

        .btn-primary:hover {
            background: #d4af37;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            color: lightgreen;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: gold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

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
        Don’t have an account? <a href="registration.php">Create Account</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>