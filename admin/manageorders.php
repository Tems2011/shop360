<?php

session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include '../config/db_connect.php';
include '../classes/Order.php';

$orderInstance = new Order();
$orders = $orderInstance-> getAllOrders($pdo);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-content">

    <h1>Manage Orders</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Update</th>
        </tr>

        <?php foreach($orders as $order){ ?>

        <tr>

            <td><?php echo $order['id']; ?></td>

            <td><?php echo $order['status']; ?></td>

            <td>

                <form action="../processes/adminprocess.php" method="POST">

                    <input type="hidden" name="order_id"
                    value="<?php echo $order['id']; ?>">

                    <select name="status">
                        <option>Pending</option>
                        <option>Processing</option>
                        <option>Delivered</option>
                    </select>

                    <button type="submit" name="update_status">
                        Update
                    </button>

                </form>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html> 
