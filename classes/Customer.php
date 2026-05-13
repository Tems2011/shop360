<?php

class Customer{

    private $pdo;

    public function __construct($pdo){

        $this->pdo = $pdo;
    }

    public function createProfile(
        $user_id,
        $firstname,
        $surname,
        $phone
    ){

        $sql = "INSERT INTO customers
                (user_id, firstname, surname, phone)
                VALUES
                (:user_id, :firstname, :surname, :phone)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([

            ':user_id'   => $user_id,
            ':firstname' => $firstname,
            ':surname'   => $surname,
            ':phone'     => $phone

        ]);
    }
}
?>