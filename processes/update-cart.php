<?php
session_start();

if (isset($_GET['key']) && isset($_GET['qty'])) {
    $key = (int)$_GET['key'];
    $qty = max(1, (int)$_GET['qty']);

    if (isset($_SESSION['cart'][$key])) {
        $_SESSION['cart'][$key]['quantity'] = $qty;
    }
}

header("Location: ../cart.php");
exit();
?>