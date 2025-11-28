<?php
include 'config.php';

if (!isset($_GET['id'])) {
    header("Location: customers.php");
    exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM customers WHERE id=$id");
$customer = $result->fetch_assoc();

if (!$customer) {
    echo "<h2 class='text-center mt-5'>Customer not found.</h2>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $customer['name'] ?> - Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div class="container mt-5">
        <div class="profile-card">
            <!-- Placeholder avatar -->
            <img src="https://i.pravatar.cc/150?u=<?= $customer['id'] ?>" alt="Profile Picture">
            <h3><?= $customer['name'] ?></h3>
            <p><strong>Email:</strong> <?= $customer['email'] ?></p>
            <p><strong>Phone:</strong> <?= $customer['phone'] ?></p>

            <div class="d-flex justify-content-center mt-4">
                <a href="edit.php?id=<?= $customer['id'] ?>" class="btn btn-warning btn-profile me-2">Edit</a>
                <a href="customers.php" class="btn btn-secondary btn-profile">Back</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>