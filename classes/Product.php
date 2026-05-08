<?php

class Product {
    public function displayProducts($pdo) {
        $sql = "SELECT * FROM products";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->FetchAll(PDO::FETCH_ASSOC);
        return $products;
    }


    public function getProductById($pdo, $id) {
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    return $product;
    }
}