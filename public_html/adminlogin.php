<?php
// Include the FPDF library
require('fpdf.php');

// Function to generate PDF from database
function downloadStudentInfo() {
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

    // Fetch data from the database
    $sql = "SELECT user_id, ip_address, time_, date_ FROM student_info";
    $result = $conn->query($sql);

    // Create a PDF document
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'User ID');
    $pdf->Cell(40, 10, 'IP Address');
    $pdf->Cell(40, 10, 'Time');
    $pdf->Cell(40, 10, 'Date');
    $pdf->Ln();

    // Populate PDF with data
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row['user_id']);
        $pdf->Cell(40, 10, $row['ip_address']);
        $pdf->Cell(40, 10, $row['time_']);
        $pdf->Cell(40, 10, $row['date_']);
        $pdf->Ln();
    }

    // Save PDF to a file
    $pdf->Output('student_info.pdf', 'D');

    // Close connection
    $conn->close();
}

// Call the function when the link is clicked
if (isset($_GET['download'])) {
    downloadStudentInfo();
}
?>


<?php
// Database connection parameters
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

// Check if delete button is clicked
if (isset($_GET['delete_id'])) {
    $id_to_delete = $_GET['delete_id'];

    // Display a confirmation dialog
    echo "<script>
            var confirmed = confirm('Are you sure you want to delete this record?');
            if (confirmed) {
                window.location.href='adminlogin.php?confirmed_delete_id={$id_to_delete}';
            }
          </script>";
}

// Check if confirmed delete ID is set
if (isset($_GET['confirmed_delete_id'])) {
    $confirmed_id_to_delete = $_GET['confirmed_delete_id'];

    // SQL query to delete the record with the specified ID
    $sql = "DELETE FROM book_requests WHERE id = $confirmed_id_to_delete";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href='adminlogin.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if delete all button is clicked
if (isset($_GET['delete_all'])) {
    // SQL query to delete all records from the book_requests table
    $sql_delete_all = "DELETE FROM book_requests";

    // Execute the query
    if ($conn->query($sql_delete_all) === TRUE) {
        echo "<script>alert('All records deleted successfully'); window.location.href='adminlogin.php';</script>";
    } else {
        echo "Error deleting all records: " . $conn->error;
    }
}

// Query to fetch all records from the book_requests table
$sql = "SELECT * FROM book_requests";
$result = $conn->query($sql);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>admin login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        /* Styles go here */
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #cc0052;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }


        header {
            width: 100%;
            background-color: #ffffff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Box shadow similar to Amrita University website */
        }

        header img {
            height: 60px; /* Adjust the height of the logo */
        }

        .background {
            width: 100%;
            max-width: 1200px; /* Set a max-width similar to Amrita University website */
            margin: 20px 0; /* Add margin similar to Amrita University website */
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Box shadow similar to Amrita University website */
            overflow: hidden; /* Hide overflow to round corners */
        }

        .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(#1845ad, #23a2f6);
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            margin-top: 20px;
            width: 80%;
            max-width: 500px; /* Set a max-width similar to Amrita University website */
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Box shadow similar to Amrita University website */
            padding: 20px;
            color: #080710;
        }
form * {
    outline: none;
    border: none;
}

form h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color: #080710;
}

label {
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: bold;
    color: #080710;
}

input,
select,
button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}

input,
select {
    background-color: rgba(255, 255, 255, 0.07);
    border-radius: 3px;
}

::placeholder {
    color: #080710;
}

button {
    margin-top: 50px;
    background-color: #b3b3ff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

table {
    width: 100%;
    margin-top: 30px;
    border-collapse: collapse;
    color: #080710;
}

table,
th,
td {
    border: 1px solid #080710;
}

th {
    background-color: #23a2f6;
    color: #080710;
}
/* Top Bar Styles */
header {
    width: 100%;
    background-color: #ffffff; /* Lighter pink color for top bar */
    padding: 15px;
    text-align: center;
}

header img {
    height: 100px; /* Adjust the height of the logo */
}

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        .book-request-placeholder {
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: calc(50% - 500px);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            display: none;
        }

        .fac {
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: calc(50% - 500px);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            display: none;
        }

        form * {
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input,
        select {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: blue;
            color: black;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

        form label,
        form input,
        form select,
        form button {
            display: block;
            margin: 7px auto;
            /* Adjust the margin as needed */
            width: 80%;
            /* Adjust the width of the form elements */
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-radius: 0;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            /* Set border-radius to 0 for rectangular shape */
            border-radius: 0;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }





        .close-btn {
            position: right;
            top: 100px;
            right: 10px;
            font-size: 24px;
            color: #fff;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .close-btn:hover {
            color: #ccc;
        }

        .update-messages {
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: calc(50% - 500px);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 20px;
            /* Adjust the padding as needed */
            display: none;
        }

        .update-messages textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            font-weight: 300;
            color: #ffffff;
            resize: none;
        
            border: 1px solid #ccc;
            /* Add a border */
        }

        .update-messages button {
            width: 100%;
            padding: 15px 0;
            background-color: blue;
            color: black;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .update-messages button:hover {
            background-color: #3455a1;
            
        }
        .delete-btn {
    font-size: 14px;  
    padding: 10px;    
    background-color: red;  /* Set your desired background color */
    color: white;  
    border: none;
    border-radius: 5px;  
    cursor: pointer;
}

/* Align the button to the right side */
.delete-btn {
    position: absolute;
    top: 10px;  
    right: 10px;  
}

.delete-btn:hover {
    background-color: darkred;  
}


    </style>
    
    <script>
    function deleteRequest(id) {
        // Confirm with the user before proceeding with the deletion
        var confirmation = confirm("Are you sure you want to delete this request?");
        
        if (confirmation) {
            // Redirect to the delete script with the request ID
            window.location.href = "?request_id=" + id;
        } else {
            // User canceled the deletion
            alert("Deletion canceled.");
        }
    }
</script>




</head>
<body>

<header>
        <img src="https://dt19wmazj2dns.cloudfront.net/wp-content/uploads/2023/10/logo-colored.svg" alt="Logo">
    </header>
    <button style="position: absolute; left: 0; top: 80px; background-color: #111; color: white; border: none; border-radius: 5px; padding: 10px; cursor: pointer; font-size: 18px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); z-index: 999;" onclick="openNav()">
    <i class="fas fa-bars"></i>
</button>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <br>
    <br>
    <br>

    <!-- Sidebar -->
    <div class="sidebar" style="z-index: 1001;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" onclick="showBookRequestForm()">Book Request</a>
        <a href="#" onclick="showfacform()">Faculty</a>
        <a href="#" onclick="showUpdateMessages()">Update messages</a>
        <a href="downloaduserinfo.php">download user info</a>
        <a href="?download=true">Download Student Info</a>
    </div><br>

    <!-- Open sidebar button -->


    <form action="#" method="post">
        <h3>Register</h3>

        <label for="account_type">Select Account Type:</label>
        <select id="account_type" name="account_type" onchange="toggleUserIdField()" required>
            <option style="color: black;" value="user">-select-</option>
            <option style="color: black;" value="user">User</option>
            <option style="color: black;" value="faculty">Faculty</option>
        </select>

        <label for="username">Email</label>
        <input type="text" id="username" name="username" placeholder="Eg: Jone@gmail.com" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <div id="user_id_field" style="display: none;">
            <label for="user_id">User ID</label>
            <input type="text" id="user_id" name="user_id" placeholder="User ID">
        </div>

        <input type="submit" value="create">
    </form>
    

    <!-- Book Request Placeholder -->
    <div class="book-request-placeholder">
        <br>
        <h3>Book Request Form</h3>
        <button class="close-btn" onclick="closeBookRequestForm()">close</button>

<button class="delete-btn" onclick="deleteAllRecords()">Delete All</button>

<table>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Roll No</th>
        <th>Semester</th>
        <th>Book Name</th>
        <th>Faculty Name</th>
        <th>Additional Info</th>
        <th>Action</th>
    </tr>

    <?php
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['student_name']}</td>";
        echo "<td>{$row['roll_no']}</td>";
        echo "<td>{$row['semester']}</td>";
        echo "<td>{$row['book_name']}</td>";
        echo "<td>{$row['faculty_name']}</td>";
        echo "<td>{$row['additional_info']}</td>";
        echo "<td><a href='?delete_id={$row['id']}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>

</table>

<script>
    function deleteAllRecords() {
        var confirmed = confirm('Are you sure you want to delete all records?');
        if (confirmed) {
            window.location.href='?delete_all=1';
        }
    }
</script>

<?php
// Close connection
$conn->close();
?>

        <!-- Additional content in the book request form -->
    </div>

    <script>
        function toggleUserIdField() {
            var accountType = document.getElementById("account_type").value;
            var userIdField = document.getElementById("user_id_field");

            if (accountType === "user") {
                userIdField.style.display = "block";
            } else {
                userIdField.style.display = "none";
            }
        }

        function openNav() {
            document.querySelector('.sidebar').style.width = '250px';
        }

        function closeNav() {
            document.querySelector('.sidebar').style.width = '0';
        }

        // Function to show the book request form
        function showBookRequestForm() {
            var bookRequestForm = document.querySelector('.book-request-placeholder');
            bookRequestForm.style.display = 'block';
        }

        function closeBookRequestForm() {
            var bookRequestForm = document.querySelector('.book-request-placeholder');
            bookRequestForm.style.display = 'none';
        }

        function showfacform() {
            var bookRequestForm = document.querySelector('.fac');
            bookRequestForm.style.display = 'block';
        }

        function closefacform() {
            var bookRequestForm = document.querySelector('.fac');
            bookRequestForm.style.display = 'none';
        }

        function deleteRequest(id) {
            // Implement the logic to delete the request with the given id
            alert("Deleting request with ID: " + id);
        }
    </script>

    <?php
      $servername = "localhost";
      $username = "id21385275_root";
      $password = "Minor@2023";
      $database = "id21385275_studentdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $account_type = $_POST["account_type"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($account_type == "user") {
            // Check if "user_id" is set in the $_POST array
            $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : null;

            // Insert into users table
            $stmt = $conn->prepare("INSERT INTO users (username, password, user_id) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $password, $user_id);
        } elseif ($account_type == "faculty") {
            // Insert into faculty table
            $stmt = $conn->prepare("INSERT INTO faculty (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $password);
        }

        if ($stmt->execute()) {
            echo "Account created successfully!";
        } else {
            echo "Error creating account: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>

    <div class="fac">
        <br>
        <br>
        <br>
        <button class="close-btn" onclick="closefacform()">close</button>
        <h3>Faculty details</h3>

        <?php
       $servername = "localhost";
       $username = "id21385275_root";
       $password = "Minor@2023";
       $database = "id21385275_studentdb";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve faculty email and IDs
        $sql = "SELECT email, faculty_id FROM faculty";
        $result = $conn->query($sql);

        // Check if there are results
        if ($result->num_rows > 0) {
            echo "<p>Faculty Emails and IDs:</p>";
            while ($row = $result->fetch_assoc()) {
                echo "<p>Email: " . $row["email"] . ", ID: " . $row["faculty_id"] . "</p>";
            }
        } else {
            echo "<p>No faculty data available.</p>";
        }

        $conn->close();
        ?>
    </div>

    <!-- message  -->
    <!-- messagee-->
    <!-- message -->

    <div class="update-messages" id="update-messages-container" style="display: none;">
        <div class="close-btn" onclick="hideUpdateMessages()">X</div>
        <textarea id="update-message-textarea" placeholder="Type your message here..."></textarea>
        <button onclick="saveUpdateMessage()">Save</button>
    </div>

    <script>
        function showUpdateMessages() {
            document.getElementById('update-messages-container').style.display = 'block';
        }

        function hideUpdateMessages() {
            document.getElementById('update-messages-container').style.display = 'none';
        }

        function saveUpdateMessage() {
            // Implement logic to save the update message
            var messageTextarea = document.getElementById('update-message-textarea');
            var message = messageTextarea.value;

            // Implement your logic to save the message to the database or perform any other action
            alert("Message saved: " + message);

            // Clear the textarea
            messageTextarea.value = '';
        }
    </script>
<!-- Inside the <head> tag, add the following script for AJAX -->

</body>

</html>