<?php

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include '../config/db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="form-container">

    <h1>Edit Product</h1>

    <form action="../processes/productprocess.php" method="POST">

        <input type="hidden" name="id"
        value="<?php echo $product['id']; ?>">

        <input type="text" name="product_name"
        value="<?php echo $product['product_name']; ?>">

        <input type="number" name="product_price"
        value="<?php echo $product['product_price']; ?>">

        <input type="text" name="product_category"
        value="<?php echo $product['product_category']; ?>">

        <textarea name="product_description"><?php echo $product['product_description']; ?></textarea>

        <input type="number" name="in_stock"
        value="<?php echo $product['in_stock']; ?>">

        <button type="submit" name="update_product">
            Update Product
        </button>

    </form>

</div>

</body>
</html> 
