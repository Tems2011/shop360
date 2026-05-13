<?php
session_start();

/* Protect page */
if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Customer Profile - VELVET STREET</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="assets/css/profile.css">
</head>
<body>

    <div class="profile-box">

        <h2>Customer Profile</h2>

        <!-- Success Message -->
        <?php
            if(isset($_SESSION['success'])){
        ?>

            <div class="alert alert-success">

                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>

            </div>

        <?php } ?>

        <!-- Error Message -->
        <?php
            if(isset($_SESSION['error'])){
        ?>

            <div class="alert alert-danger">

                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>

            </div>

        <?php } ?>

        <form action="processes/profileprocesses.php"
              method="POST">

              <label for="firstname" class="form-label">First Name:</label>
            <input type="text"
                   name="firstname"
                   class="form-control"
                   placeholder="First Name"
                   required>
            <label for="surname" class="form-label">Surname:</label>
            <input type="text"
                   name="surname"
                   class="form-control"
                   placeholder="Surname"
                   required>
            <label for="phone" class="form-label">Phone:</label>
            <input type="text"
                   name="phone"
                   class="form-control"
                   placeholder="Phone Number"
                   required>

            <button type="submit"
                    name="save_profile"
                    class="btn btn-save">

                    Save Profile

            </button>

        </form>

    </div>

</body>
</html>