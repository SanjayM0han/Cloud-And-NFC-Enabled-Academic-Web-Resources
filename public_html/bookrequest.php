<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Request Form</title>
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

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        button {
            background-color: #3498db;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Book Request Form</h1>

    <form action="#" method="post">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>

        <label for="rollNo">Roll No:</label>
        <input type="text" id="rollNo" name="rollNo" required>

        <label for="semester">Semester:</label>
        <select id="semester" name="semester" required>
            <option value=""></option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <option value="S4">S4</option>
            <option value="S5">S5</option>
            <option value="S6">S6</option>
            <option value="S7">S7</option>
            <option value="S8">S8</option>
            <!-- Add more options as needed -->
        </select>

        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required>

        <label for="facultyName">Faculty Name:</label>
        <input type="text" id="facultyName" name="facultyName" required>

        <label for="additionalInfo">Additional Information:</label>
        <textarea id="additionalInfo" name="additionalInfo" rows="4"></textarea>

        <button type="submit">Submit Request</button>
    </form>



    <?php
// Establish a database connection
$conn = mysqli_connect("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = mysqli_real_escape_string($conn, $_POST["studentName"]);
    $rollNo = mysqli_real_escape_string($conn, $_POST["rollNo"]);
    $semester = mysqli_real_escape_string($conn, $_POST["semester"]);
    $bookName = mysqli_real_escape_string($conn, $_POST["bookName"]);
    $facultyName = mysqli_real_escape_string($conn, $_POST["facultyName"]);
    $additionalInfo = mysqli_real_escape_string($conn, $_POST["additionalInfo"]);

    $sql = "INSERT INTO book_requests (student_name, roll_no, semester, book_name, faculty_name, additional_info) 
            VALUES ('$studentName', '$rollNo', '$semester', '$bookName', '$facultyName', '$additionalInfo')";

    if (mysqli_query($conn, $sql)) {
        echo "Book request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>
