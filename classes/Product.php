<?php

class Product {
    public function displayProducts($pdo) {
        $sql = "SELECT * FROM products";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }
}