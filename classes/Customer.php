<?php

class Customer {

    // SAVE OR UPDATE CUSTOMER PROFILE

    public function saveCustomerProfile($pdo, $account_id, $firstname, $surname, $phone){

        $checkSql = "SELECT * FROM customers WHERE account_id = ?";

        $checkStmt = $pdo->prepare($checkSql);

        $checkStmt->execute([$account_id]);

        if($checkStmt->rowCount() > 0){

            $updateSql = "UPDATE customers
                          SET first_name = ?, surname = ?, phone = ?
                          WHERE account_id = ?";

            $updateStmt = $pdo->prepare($updateSql);

            return $updateStmt->execute([
                $firstname,
                $surname,
                $phone,
                $account_id
            ]);

        } else {

            $insertSql = "INSERT INTO customers(account_id, first_name, surname, phone)
                          VALUES(?, ?, ?, ?)";

            $insertStmt = $pdo->prepare($insertSql);

            return $insertStmt->execute([
                $account_id,
                $firstname,
                $surname,
                $phone
            ]);
        }
    }



    // GET CUSTOMER PROFILE

    public function getCustomerProfile($pdo, $account_id){

        $sql = "SELECT * FROM customers WHERE account_id = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$account_id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>