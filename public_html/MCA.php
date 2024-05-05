<!-- BCA.php -->

<?php
$c = mysqli_connect("localhost", "id21385275_root", "Minor@2023", "id21385275_studentdb");

// Check connection
if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #ecf0f1;
            text-align: center;
        }

        h1 {
            color: #ecf0f1;
        }

        button {
            background: linear-gradient(to right, #2c3e50, #34495e);
            margin: 5px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            font-size: 18px;
            width: 150px; /* Adjust the width as needed */
        }

        button:hover {
            transform: scale(1.03);
        }

        button:nth-child(odd) {
            background: linear-gradient(to right, #3498db, #2c3e50);
        }

        button:nth-child(even) {
            background: linear-gradient(to right, #2c3e50, #3498db);
        }

        script {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>MCA</h1>

    <button onclick="redirectTo('S1_MCA.php')">S1</button>
    <button onclick="redirectTo('S2_MCA.php')">S2</button>
    <button onclick="redirectTo('S3_MCA.php')">S3</button>
    <button onclick="redirectTo('S4_MCA.php')">S4</button>
   

    <script>
        function redirectTo(targetPage) {
            window.location.href = targetPage;
        }
    </script>

</body>
</html>

<?php
$c->close(); 
?>
