<?php

class admin {

    // GET ALL CUSTOMERS

    public function getAllCustomers($pdo){

        $sql = "SELECT * FROM customers ORDER BY id DESC";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>