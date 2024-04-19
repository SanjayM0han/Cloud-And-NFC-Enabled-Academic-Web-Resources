<?php
// Get the search query from the URL parameter
$query = $_GET['q'];


// Create connection
$c = mysqli_connect("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming 'type' is either 'books' or 'authors'
$type = $_GET['type'];

// Assuming 'semester' is the target semester
$semester = 'S1';

// SQL query to fetch search suggestions
if ($type === 'books') {
    $sql = "SELECT DISTINCT book_name FROM bca_ds WHERE semester = '$semester' AND book_name LIKE '%$query%'";
} elseif ($type === 'authors') {
    $sql = "SELECT DISTINCT author FROM bca_ds WHERE semester = '$semester' AND author LIKE '%$query%'";
} else {
    // Handle other types if needed
    $sql = "";
}

$result = $conn->query($sql);

// Fetch the results into an array
$results = array();
while ($row = $result->fetch_assoc()) {
    $results[] = $row[$type];
}

// Return the results as JSON
echo json_encode(array($type => $results));

// Close connection
$conn->close();
?>