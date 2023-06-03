<?php
require_once 'connection.php';

$getMesg = $_POST['text'];

// Checking user query against database query
$check_query = ""; //query here
$stmt = $conn->prepare($check_query);
$stmt->bindValue(':getMesg', '%' . $getMesg . '%', PDO::PARAM_STR);
$stmt->execute();

// If user query matches a database query, show the reply. Otherwise, display an error message.
if ($stmt->rowCount() > 0) {
    // Fetching reply from the database according to the user query
    $fetch_data = $stmt->fetch(PDO::FETCH_ASSOC);
    // Storing reply in a variable to send back via Ajax
    $reply = $fetch_data['replies'];
    echo $reply;
} else {
    echo "error message here";
}
?>