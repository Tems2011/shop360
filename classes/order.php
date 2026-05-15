<?php

class Order {

    public function getAllOrders($pdo) {

        $sql = "SELECT 
                    orders.*,
                    products.product_name,
                    customers.first_name,
                    customers.surname
                FROM orders
                JOIN products ON orders.product_id = products.id
                JOIN customers ON orders.customer_id = customers.account_id
                ORDER BY orders.created_at DESC";
    
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function placeOrder($pdo, $customer_id, $product_id, $quantity, $total_amount, $shipping_address, $payment_type) {

        $status = "pending";

        $sql = "INSERT INTO orders
            (customer_id, product_id, quantity, total_amount, shipping_address, payment_type, status, created_at)
            VALUES
            (?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            $customer_id,
            $product_id,
            $quantity,
            $total_amount,
            $shipping_address,
            $payment_type,
            $status
        ]);
    }
}