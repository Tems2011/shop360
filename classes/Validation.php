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

        function checkEmpty($input) {
            if (empty($input)) {
                return "All fields are required";
            }
        }

        function validatePhone($phone) {
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                return "Invalid phone number format. It should be 10 digits.";
            }
        }
    }