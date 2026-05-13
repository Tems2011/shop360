<?php
session_start();

if (isset($_GET['key'])) {
    $key = (int)$_GET['key'];
    
    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
        // Re-index array to prevent gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

header("Location: ../cart.php");
exit();
?>