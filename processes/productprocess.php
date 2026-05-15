<?php

require '../config/db_connect.php';

if(isset($_POST['update_product'])){

    $id = $_POST['id'];

    $name = $_POST['product_name'];

    $price = $_POST['product_price'];

    $category = $_POST['product_category'];

    $description = $_POST['product_description'];

    $stock = $_POST['in_stock'];

    $sql = "UPDATE products
            SET product_name = ?,
                product_price = ?,
                product_category = ?,
                product_description = ?,
                in_stock = ?
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $name,
        $price,
        $category,
        $description,
        $stock,
        $id
    ]);

    header("Location: ../admin/admindashboard.php");
}

?> 
