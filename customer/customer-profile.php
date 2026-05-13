<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once "config/db_connect.php";

$user_id = $_SESSION['user_id'];

// Fetch current user data
$sql = "SELECT firstname, surname, phone, email FROM customers WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile - Velvet Street</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .profile-container {
            max-width: 700px;
            margin: 40px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .profile-header {
            background: linear-gradient(135deg, #6f42c1, #9f7aea);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 16px;
        }
        .btn-save {
            background: #6f42c1;
            border: none;
            padding: 12px 40px;
            border-radius: 50px;
            font-weight: 600;
        }
        .hover-shadow:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
            transform: translateY(-3px);
        }
        @media (max-width: 576px) {
            .profile-container {
                margin: 15px;
                border-radius: 12px;
            }
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-header">
        <h3><i class="fas fa-user-circle"></i> My Profile</h3>
    </div>

    <div class="p-4 p-md-5">

        <!-- Success Message -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <?= htmlspecialchars($_SESSION['success']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <!-- Error Message -->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?= htmlspecialchars($_SESSION['error']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <form action="processes/profileprocesses.php" method="POST">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" 
                       value="<?= htmlspecialchars($user['firstname'] ?? '') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input type="text" name="surname" class="form-control" 
                       value="<?= htmlspecialchars($user['surname'] ?? '') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" 
                       value="<?= htmlspecialchars($user['email'] ?? '') ?>" readonly>
            </div>

            <div class="mb-4">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" 
                       value="<?= htmlspecialchars($user['phone'] ?? '') ?>" required>
            </div>

            <div class="d-grid">
                <button type="submit" name="save_profile" class="btn btn-save btn-lg">
                    <i class="fas fa-save"></i> Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>