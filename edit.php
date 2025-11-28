<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM customers WHERE id=$id");
$customer = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    $successMessage = "Customer '$name' updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Customer</h2>

        <?php if (isset($successMessage)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $successMessage ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control rounded-pill" value="<?= $customer['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control rounded-pill" value="<?= $customer['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control rounded-pill" value="<?= $customer['phone'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-success me-2">Update Customer</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>