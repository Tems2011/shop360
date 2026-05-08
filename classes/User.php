<?php
class User {
    public function existingEmail($pdo, $email){
        $sql = "SELECT email FROM account WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        return $account;
    }


public function createAccount($pdo, $email, $password){
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO account (email,password)
    VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$email,$hashedPassword]);
    return $result;
    }
    public function login($pdo, $email, $password){
        $sql = "
        SELECT * FROM account WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($account && password_verify($password, $account['password'])){
            return $account;
        }else{
            return false;
        }
    }
}