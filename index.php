<?php

require_once "classes/Customer.php";

$customerinstance = new Customer();;
$customers = $customerinstance->getCustomers();

foreach ($customers as $customer){
    echo $customer["name"] . "<br>";
    echo $customer["email"] . "<br>";
} 
