<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1 BCA</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- IP ADDRESS AND DATE & TIME SCRIPT ------------------------------------>
    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
    function getIPAddress() {
        $.getJSON("https://api.ipify.org?format=json", function(data) {
            $("#ipAddress").html(data.ip);
        });
    }

    function displayDateTime() {
        now = new Date();
        localtime = now.toString();
        utctime = now.toUTCString();
        document.getElementById("dateTime").innerHTML = "<span>Your local time is:</span> " + localtime + "<br><br><span>UTC time (Actual) is:</span> " + utctime;
    }

    function saveToDatabase() {
        $.ajax({
            type: "POST",
            url: "index.php", // Adjust the file name if necessary
            data: {},
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error("Error saving data: ", error);
            }
        });
    }

    // Execute functions on page load
    $(document).ready(function() {
        getIPAddress();
        displayDateTime();
        saveToDatabase();
    });
</script>

<!-- getting ip and time from user-------------------------------------------------------------------------------------------->

<!-- modified by nishad-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #ecf0f1;
        }

        h1 {
            color: #ecf0f1;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: linear-gradient(to right, #2c3e50, #34495e);
            margin: 5px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        li:hover {
            transform: scale(1.03);
        }

        a {
            text-decoration: none;
            color: #ecf0f1;
            font-weight: bold;
        }

        a:hover {
            color: #3498db;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #ff4d94;
            border-radius: 25px; /* Adjust the value as needed */
}

        .navbar h1 {
            margin: 0;
        }

        .right {
            display: flex;
            align-items: center;
        }

        .checkBtn {
            font-size: 30px;
            cursor: pointer;
            display: none;
        }

        .list {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .list li {
            margin: 0 15px;
        }

        @media (max-width: 768px) {
            .list {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #333;
                z-index: 1;
            }

            .list.show {
                display: flex;
            }

            .list li {
                margin: 10px 0;
            }

            .checkBtn {
                display: block;
            }
        }
        /* ... (your existing styles) */

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    padding: 15px;
    background: linear-gradient(to right, #2c3e50, #34495e);
    border-radius: 8px;
    color: #ecf0f1;
    text-decoration: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 1;
    border-radius: 8px;
}

.dropdown-content a {
    color: #ecf0f1;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #2c3e50;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* ... (rest of your existing styles) */

    </style>
</head>
<body>
<nav class="navbar">
    <div class="left">
        <h1>AMRITA BOOKS</h1>
    </div>
    <div class="right">
        <label for="check" class="checkBtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul class="list">
            <li><a href="#">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Services</a>
                <div class="dropdown-content">
                    <a href="bookrequest.php">Request Book</a>
                    <a href="#">Service 2</a>
                    <a href="#">Service 3</a>
                </div>
            </li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            
        </ul>
    </div>
</nav>

<!-- get message from message table where id= 1 and a message------------------------------------------------------------------------------->
<!-- 2 columns : id , message-->
<!-- id=1 -->
<!-- message ="anything-->
<!-- modified by nishad-->
<!-- php to get msg-->


<?php
// Replace these variables with your database credentials
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

// ID to retrieve
$id = 1;

// SQL query to retrieve message
$sql = "SELECT message FROM message WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $message = $row["message"];
    }
} else {
    $message = "No message found for ID $id";
}

// Close the connection
$conn->close();
?>
<p><?php echo $message; ?></p>


<!--msg php closing  by nishad------------------------------------------------------------------------------------------------------->



    <h1>Contents</h1>
    <ul>
        <?php
            // Connect to the database
            $c = mysqli_connect("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

            // Fetch all distinct course names for S1 BCA
            $q_courses = "SELECT DISTINCT course_name FROM bca WHERE semester = 'S1'";
            $p_courses = mysqli_query($c, $q_courses);

            // Loop through each course
            while ($course_row = mysqli_fetch_assoc($p_courses)) {
                $courseName = $course_row['course_name'];

                // Fetch PDFs for the current course and semester
                $q_pdfs = "SELECT * FROM bca WHERE course_name = '$courseName' AND semester = 'S1'";
                $p_pdfs = mysqli_query($c, $q_pdfs);

                // Check if there are PDFs for the course and semester
                if (mysqli_num_rows($p_pdfs) > 0) {
                    // Display the course name
                    echo '<li>' . $courseName . '<ul>';

                    // Loop through each PDF for the current course and semester
                    while ($pdf_row = mysqli_fetch_assoc($p_pdfs)) {
                        // Display PDF links
                        echo '<li><a href="#" onclick="openPdf(\'' . $pdf_row['pdf'] . '\')">' . $pdf_row['book_name'] . '</a></li>';
                    }

                    // Close the nested ul for the current course
                    echo '</ul></li>';
                }
            }

            // Close the database connection
            mysqli_close($c);
        ?>
    </ul>


    <script>
    function openPdf(pdfData) {
        // Decode base64-encoded PDF data
        var binaryPdf = atob(pdfData);

        // Convert binary PDF data to Uint8Array
        var pdfBytes = new Uint8Array(binaryPdf.length);
        for (var i = 0; i < binaryPdf.length; i++) {
            pdfBytes[i] = binaryPdf.charCodeAt(i);
        }

        // Create a Blob from the Uint8Array
        var blob = new Blob([pdfBytes], { type: 'application/pdf' });

        // Create a data URL from the Blob
        var url = URL.createObjectURL(blob);

        // Open the PDF in a new tab
        window.open(url, '_blank');
    }
   </script>


<!-- ip address and timeeeeeeeeeeeeeeee  -->
<!-- ip address and timeeeeeeeeeeeeeeee  -->
<!-- modified by nishad  -->

<?php
    // Database configuration
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

    // Get IP address
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Get local time and UTC time
    $localTime = date("Y-m-d H:i:s");
    $utcTime = gmdate("Y-m-d H:i:s");

    // Insert data into the database
    $sql = "INSERT INTO user_details (public_ip, local_time, utctime) VALUES ('$ipAddress', '$localTime', '$utcTime')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
    ?>

<!-- ip address and timeeeeeeeeeeeeeeee  -->
<!-- ip address and timeeeeeeeeeeeeeeee  -->
<!-- closed by nishad  -->
    
</body>
</html>
