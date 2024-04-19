<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "id21385275_root";
$password = "Minor@2023";
$dbname = "id21385275_studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the message text from the POST data
    $messageText = $_POST['messageText'];

    // Update the message in the database
    $sql = "UPDATE message SET message = '$messageText' WHERE id = 1";

    if ($conn->query($sql) === TRUE) {
        echo "Message updated successfully";
    } else {
        echo "Error updating message: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
