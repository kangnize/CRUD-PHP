<?php
$host = 'localhost';
$db = 'customer_db';
$user = 'root';
$pass = '12Kazungu.';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
