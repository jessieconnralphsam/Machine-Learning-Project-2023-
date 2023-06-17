

<?php
// Get the predictedWord value from the query string
$predictedname = $_GET['predictedname'];
$predicteddisease = $_GET['predicteddisease'];
$predicteddescription = $_GET['predicteddescription'];
$predictedeffects = $_GET['predictedeffects'];
$predictedcause = $_GET['predictedcause'];
$predictedmedicine = $_GET['predictedmedicine'];
$predictedprevention = $_GET['predictedprevention'];
$predictedlink = $_GET['predictedlink'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `prediction` (`name`,`description`,`effects`,`cause`,`medicine`,`prevention`,`link`,`disease`) VALUES ('$predictedname','$predicteddescription','$predictedeffects','$predictedcause','$predictedmedicine','$predictedprevention','$predictedlink','$predicteddisease')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>
