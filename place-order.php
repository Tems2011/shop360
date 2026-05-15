<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
}

include 'config/db_connect.php';
include 'classes/Product.php';

if (!isset($_GET['id'])) {
    header("Location: customerdashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="form-container">

    <h1>Place Order</h1>

    <form action="processes/orderprocess.php" method="POST">

        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">

        <input type="number" name="quantity" placeholder="Quantity">

        <input type="text" name="address" placeholder="Shipping Address">

        <select name="payment">
            <option>Transfer</option>
            <option>Cash On Delivery</option>
        </select>

        <button type="submit" name="place_order">
            Confirm Order
        </button>

    </form>

</div>

</body>
</html> 
