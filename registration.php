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
if(isset($_SESSION["error"])){
    echo $_SESSION["error"];
    unset ($_SESSION["error"]);
}
?>

<h3 class="alert alert-primary">Registration Form</h3>
  
<form action="processes/register_processes.php" method="POST">
    <div class="container">

    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control mb-3" name="email" required>

    <label for="password">Password:</label>
    <input type="password" class="form-control mb-3" name="password" required>

    <label for="confirm_password">Confirm password:</label>
    <input type="password" class="form-control mb-3" name="confirm_password" required>
<button type = "submit" class="btn btn-primary"> Submit</button>
    </div>
   
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>