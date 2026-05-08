<?php

class Validate {
     public function validateEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return "Invalid email format";
        }
    }

    public function validatePassword($password, $confirm_password) {
        if($password !== $confirm_password){
        return 'Password does not match Confirm password';
        }}
        public function validatePasswordStrength($password){
        if(strlen($password) < 8 || strlen($password) > 15){
            return "Password characters must be greater than 8 and less than 15";
        }}
    
}