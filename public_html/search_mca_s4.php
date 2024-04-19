<?php
// search.php

// Connect to the database
$c = mysqli_connect("localhost", "id21385275_root", "Minor@2023", "id21385275_studentdb");

// Get the search query from the URL parameter 'q'
$searchQuery = mysqli_real_escape_string($c, $_GET['q']);
$semester = "S4";
// Fetch book names based on the search query
$q_books = "SELECT DISTINCT book_name FROM mca WHERE book_name LIKE '%$searchQuery%' and semester = '$semester'";
$p_books = mysqli_query($c, $q_books);

// Fetch author names based on the search query
$q_authors = "SELECT DISTINCT author FROM mca WHERE author LIKE '%$searchQuery%' and semester = '$semester'";
$p_authors = mysqli_query($c, $q_authors);

// Combine and display the results
$combinedResults = array();

while ($book_row = mysqli_fetch_assoc($p_books)) {
    $combinedResults['books'][] = $book_row['book_name'];
}

while ($author_row = mysqli_fetch_assoc($p_authors)) {
    $combinedResults['authors'][] = $author_row['author'];
}

// Output the results as JSON
echo json_encode($combinedResults);

// Close the database connection
mysqli_close($c);
?>
