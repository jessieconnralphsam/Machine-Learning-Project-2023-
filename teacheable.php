<?php
// Get the predictedWord value from the query string
$predictedname = isset($_GET['predictedname']) ? $_GET['predictedname'] : '';
$predicteddisease = isset($_GET['predicteddisease']) ? $_GET['predicteddisease'] : '';
$predicteddescription = isset($_GET['predicteddescription']) ? $_GET['predicteddescription'] : '';
$predictedeffects = isset($_GET['predictedeffects']) ? $_GET['predictedeffects'] : '';
$predictedcause = isset($_GET['predictedcause']) ? $_GET['predictedcause'] : '';
$predictedmedicine = isset($_GET['predictedmedicine']) ? $_GET['predictedmedicine'] : '';
$predictedprevention = isset($_GET['predictedprevention']) ? $_GET['predictedprevention'] : '';
$predictedlink = isset($_GET['predictedlink']) ? $_GET['predictedlink'] : '';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO `prediction` (`name`,`description`,`effects`,`cause`,`medicine`,`prevention`,`link`,`disease`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind the values to the prepared statement
    $stmt->bind_param("ssssssss", $predictedname, $predicteddescription, $predictedeffects, $predictedcause, $predictedmedicine, $predictedprevention, $predictedlink, $predicteddisease);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>
