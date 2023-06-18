<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_db";

// Create a connection to the database
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the submitted username
$username = $_POST['username'];

// Perform a query to check if the username already exists in the database
$query = "SELECT COUNT(*) as count FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Send the response back to the client
if ($count > 0) {
    echo 'taken';
} else {
    echo 'available';
}
?>
