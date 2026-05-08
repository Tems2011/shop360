<?php

require_once "classes/Customer.php";

$customerinstance = new Customer();;
$customers = $customerinstance->getCustomers();

foreach ($customers as $customer){
    echo $customer["name"] . "<br>";
    echo $customer["email"] . "<br>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="registration.php">REGISTER HERE</a>
</body>
</html>