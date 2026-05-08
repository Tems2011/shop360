<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_SESSION["success"])){
    echo $_SESSION["success"];
    unset ($_SESSION["success"]);
}
?>
<h3 class='text-primary text-center'>Login</h3>
    <form action="processes/login-processes.php" method="POST">
    <div class="container">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control mb-3" name="email" required>

        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control mb-3" name="password" required>

        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>