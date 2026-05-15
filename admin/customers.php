<?php

session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include '../config/db_connect.php';
include '../classes/admin.php';

$admin = new Admin();
$customers = $admin->getAllCustomers($pdo);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-content">

    <h1>Customers</h1>

    <table>

        <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Phone</th>
        </tr>

        <?php foreach($customers as $customer){ ?>

        <tr>

            <td><?php echo $customer['first_name']; ?></td>

            <td><?php echo $customer['surname']; ?></td>

            <td><?php echo $customer['phone']; ?></td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html> 
