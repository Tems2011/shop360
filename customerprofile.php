<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();
}

include 'config/db_connect.php';

include 'classes/Customer.php';


$customer = new Customer();

$profile = $customer->getCustomerProfile($pdo, $_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Customer Profile</title>

    <link rel="stylesheet" href="assets/css/customer.css">

</head>

<body>

<div class="form-container">

    <h1>Customer Profile</h1>


    <?php

    if(isset($_SESSION['error'])){

        echo "

        <div class='error-message'>

            ".$_SESSION['error']."

        </div>

        ";

        unset($_SESSION['error']);
    }

    ?>


    <form action="processes/profileprocesses.php" method="POST">

        <input 
        type="text" 
        name="firstname" 
        placeholder="First Name"
        value="<?php echo $profile['first_name'] ?? ''; ?>">


        <input 
        type="text" 
        name="surname" 
        placeholder="Surname"
        value="<?php echo $profile['surname'] ?? ''; ?>">


        <input 
        type="text" 
        name="phone" 
        placeholder="Phone Number"
        value="<?php echo $profile['phone'] ?? ''; ?>">


        <button type="submit" name="save_profile">

            Save Profile

        </button>

    </form>

</div>

</body>
</html>