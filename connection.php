<?php
$host = 'localhost';
$dbname = 'database_name';
$username = 'your_username';
$password = 'your_password';

//connection using pdo
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    // Display a success message
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Display an error message
    echo "Connection failed: " . $e->getMessage();
}
