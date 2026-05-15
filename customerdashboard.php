<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();
}

include 'config/db_connect.php';

include 'classes/Customer.php';


$customerClass = new Customer();

$customer = $customerClass->getCustomerProfile($pdo, $_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Customer Dashboard</title>

    <link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<div class="dashboard-layout">


    <!-- SIDEBAR -->

    <div class="customer-sidebar">

        <div class="sidebar-logo">

            <h1>Velvet Street</h1>

        </div>


        <div class="sidebar-links">

            <a href="customerdashboard.php">
                Dashboard
            </a>

            <a href="customerprofile.php">
                My Profile
            </a>

            <a href="products.php">
                Products
            </a>

            <a href="place-order.php">
                My Orders
            </a>

            <a href="logout.php">
                Logout
            </a>

        </div>

    </div>



    <!-- MAIN CONTENT -->

    <div class="dashboard-content">


        <!-- TOP BAR -->

        <div class="dashboard-topbar">

            <h1>
                Welcome,
                <?php echo $customer['first_name'] ?? 'Customer'; ?>
            </h1>

        </div>



        <!-- SUCCESS MESSAGE -->

        <?php

        if(isset($_SESSION['success'])){

            echo "

            <div class='success-message'>

                ".$_SESSION['success']."

            </div>

            ";

            unset($_SESSION['success']);
        }

        ?>



        <!-- DASHBOARD BOXES -->

        <div class="dashboard-boxes">


            <!-- PROFILE -->

            <a href="customerprofile.php"
            class="dashboard-box">

                <h2>My Profile</h2>

                <p>
                    Update your personal details
                </p>

            </a>



            <!-- PRODUCTS -->

            <a href="products.php"
            class="dashboard-box">

                <h2>Products</h2>

                <p>
                    Browse fashion collections
                </p>

            </a>



            <!-- ORDERS -->

            <a href="place-order.php"
            class="dashboard-box">

                <h2>My Orders</h2>

                <p>
                    Track placed orders
                </p>

            </a>

        </div>



        <!-- QUICK INFO -->

        <div class="dashboard-info">


            <div class="info-card">

                <h2>Firstname</h2>

                <p>
                    <?php echo $customer['first_name'] ?? 'No firstname Added'; ?>
                </p>

            </div>



            <div class="info-card">

                <h2>Surname</h2>

                <p>
                    <?php echo $customer['surname'] ?? 'No surname added'; ?>
                </p>

            </div>



            <div class="info-card">

                <h2>Phone</h2>

                <p>
                    <?php echo $customer['phone'] ?? 'No Phone Added'; ?>
                </p>

            </div>

        </div>


    </div>

</div>

</body>
</html>