<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')");

    // Use header + JS to show alert
    echo "<script>
            alert('Customer \"$name\" added successfully!');
            window.location.href='customers.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Add Customer</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control rounded-pill">
            </div>
            <button type="submit" name="submit" class="btn btn-success me-2">Add Customer</button>
            <a href="customers.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>