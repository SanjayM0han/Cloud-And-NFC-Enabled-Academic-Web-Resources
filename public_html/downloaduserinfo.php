<?php
require('fpdf.php'); // Include FPDF library

// Check if the download button is clicked
if(isset($_GET['download'])) {
    // Connect to your MySQL database
    $servername = "localhost";
$username = "id21385275_root";
$password = "Minor@2023";
$dbname = "id21385275_studentdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the user_details table
    $sql = "SELECT * FROM user_details";
    $result = $conn->query($sql);

    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);

    // Add table headers
    $pdf->Cell(30, 10, 'ID', 1);
    $pdf->Cell(50, 10, 'Public IP', 1);
    $pdf->Cell(40, 10, 'Local Time', 1);
    $pdf->Cell(40, 10, 'UTC Time', 1);
    $pdf->Ln();

    // Add table data
    while($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, $row['id'], 1);
        $pdf->Cell(50, 10, $row['public_ip'], 1);
        $pdf->Cell(40, 10, $row['local_time'], 1);
        $pdf->Cell(40, 10, $row['utctime'], 1);
        $pdf->Ln();
    }

    // Output PDF to browser
    $pdf->Output('D', 'user_details.pdf');

    // Close database connection
    $conn->close();
    exit; // Stop further execution to prevent re-submission
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download PDF</title>
    <script>
        // Show a confirmation alert when the website is opened
        window.onload = function() {
            if (confirm('Do you want to download the PDF?')) {
                window.location.href = '?download=1';
            }
        };
    </script>
    <style>
        body {
            /* Set the background image and specify its path */
            background: url('https://cdn.dribbble.com/users/3402363/screenshots/13988778/media/b9393c8c9ce88420a6000b217bcf4731.gif') no-repeat center center fixed;
            /* Adjust background size to cover the entire viewport */
            background-size: cover;
            /* Set background attachment to fixed if you want it to remain fixed while scrolling */
            background-attachment: fixed;
            /* Add any additional styling for the body */
            /* For example, you can set the font family and color */
            font-family: 'Arial', sans-serif;
            color: #333;
        }
    </style>
</head>
<body >
    <!-- Add your sidebar content here -->
   <div>click here to download <button id="downloadButton">Download PDF</button>

    <script>
        document.getElementById('downloadButton').addEventListener('click', function() {
            // Show a confirmation alert before triggering the download
            if (confirm('Are you sure you want to download the PDF?')) {
                window.location.href = '?download=1';
            }
        });
    </script>
</body>
</html>
