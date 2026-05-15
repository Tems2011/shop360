<?php

session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

require_once "../config/db_connect.php";
require_once "../classes/Product.php";

$productInstance = new Product();

/*
-----------------------------------
GET ALL PRODUCTS
-----------------------------------
*/
$products = $productInstance->getAllProducts($pdo);

/*
-----------------------------------
ADD PRODUCT
-----------------------------------
*/
if (isset($_POST['add_product'])) {

    $productInstance->addProduct(
        $pdo,
        $_POST['product_name'],
        $_POST['product_price'],
        $_POST['product_category'],
        $_POST['product_description'],
        $_POST['in_stock']
    );

    header("Location: products.php");
    exit();
}

/*
-----------------------------------
UPDATE PRODUCT
-----------------------------------
*/
if (isset($_POST['update_product'])) {

    $productInstance->updateProduct(
        $pdo,
        $_POST['id'],
        $_POST['product_name'],
        $_POST['product_price'],
        $_POST['product_category'],
        $_POST['product_description'],
        $_POST['in_stock']
    );

    header("Location: products.php");
    exit();
}

/*
-----------------------------------
EDIT MODE CHECK
-----------------------------------
*/$editProduct = null;

if (isset($_GET['id'])) {

    $editProduct = $productInstance->getProductById($pdo, $_GET['id']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-content">

    <h1>Products Management</h1>

    <!-- =========================
         ADD PRODUCT SECTION
    ========================== -->
    <h2>Add Product</h2>

    <form method="POST">

        <input type="text" name="product_name" placeholder="Product Name" required>
        <br><br>

        <input type="number" name="product_price" placeholder="Price" required>
        <br><br>

        <input type="text" name="product_category" placeholder="Category" required>
        <br><br>

        <textarea name="product_description" placeholder="Description"></textarea>
        <br><br>

        <select name="in_stock">
            <option value="1">In Stock</option>
            <option value="0">Out of Stock</option>
        </select>

        <br><br>

        <button type="submit" name="add_product">
            Add Product
        </button>

    </form>

    <hr>

    <!-- =========================
         EDIT PRODUCT SECTION
    ========================== -->
    <?php if ($editProduct) { ?>

        <h2>Edit Product</h2>

        <form method="POST">

            <input type="hidden" name="id"
                   value="<?php echo $editProduct['id']; ?>">

            <input type="text" name="product_name"
                   value="<?php echo $editProduct['product_name']; ?>">

            <br><br>

            <input type="number" name="product_price"
                   value="<?php echo $editProduct['product_price']; ?>">

            <br><br>

            <input type="text" name="product_category"
                   value="<?php echo $editProduct['product_category']; ?>">

            <br><br>

            <textarea name="product_description">
                <?php echo $editProduct['product_description']; ?>
            </textarea>

            <br><br>

            <select name="in_stock">

                <option value="1" <?php if ($editProduct['in_stock'] == 1) echo "selected"; ?>>
                    In Stock
                </option>

                <option value="0" <?php if ($editProduct['in_stock'] == 0) echo "selected"; ?>>
                    Out of Stock
                </option>

            </select>

            <br><br>

            <button type="submit" name="update_product">
                Update Product
            </button>

        </form>

        <hr>

    <?php } ?>

    <!-- =========================
         PRODUCT TABLE
    ========================== -->

    <h2>All Products</h2>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($products as $product) { ?>

        <tr>

            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['product_name']; ?></td>
            <td><?php echo $product['product_price']; ?></td>
            <td><?php echo $product['product_category']; ?></td>

            <td>
                <?php echo ($product['in_stock'] == 1) ? "In Stock" : "Out of Stock"; ?>
            </td>

            <td>

            <a href="editproduct.php?id=<?php echo $product['id']; ?>">

                |Edit
        </a>

                <a href="deleteproduct.php?id=<?php echo $product['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this product?')">
                    Delete
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>