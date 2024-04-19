<!DOCTYPE html>
<html lang="en">
<title>Upload</title>
<head>
    <link rel="stylesheet" type="text/css" href="uploadcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FEBADE; /* Light background color similar to Amrita University website */
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
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
.celebration-box {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            display: none;
        }

        /* Add styles for error message box */
        .error-box {
            background-color: #FF5733;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            display: none;
        }
    </style>
</head>

<body>
<header>
        <img src="https://dt19wmazj2dns.cloudfront.net/wp-content/uploads/2023/10/logo-colored.svg" alt="Logo">
    </header>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form action="" method="post" enctype="multipart/form-data">

    <h3 style="color: white;"><b>Books</b></h3>

        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" placeholder="Enter book name" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Enter author" required>

        <label for="publication">Publication:</label>
        <input type="text" id="publication" name="publication" placeholder="Enter publication" required>

        <label for="file">Upload File:</label>
<input type="file" id="file" name="file" accept=".pdf" onchange="updateFileSize()" required>
<span id="fileSizeInfo" style="margin-top: 8px; display: block; font-size: 14px; color: #080710;"></span>


        <label for="table_name">Select Batch:</label>
        <select id="table_name" name="table_name" required>
            <option value="bca">BCA</option>
            <option value="bca_ds">BCA_DS</option>
            <option value="mca">MCA</option>
        </select>

        <label for="semester">Select Semester:</label>
        <select id="semester" name="semester" required>
            <option value="S1">Semester 1</option>
            <option value="S2">Semester 2</option>
            <option value="S3">Semester 3</option>
            <option value="S4">Semester 4</option>
            <option value="S5">Semester 5</option>
            <option value="S6">Semester 6</option>
        </select>

        <label for="course_name">Select Course Name:</label>
        <select id="course_name" name="course_name" required>
            <option value="COMPUTER NETWORKS">COMPUTER NETWORKS</option>
            <option value="Curriculum">CURRICULUM </option>
            <option value="SOFTWARE ENGINEERING">SOFTWARE ENGINEERING</option>
            <option value="MATHEMATICAL FOUNDATIONS FOR COMPUTER APPLICATIONS">MATHEMATICAL FOUNDATIONS FOR COMPUTER APPLICATIONS</option>
            <option value="Operating Systems">ADVANCED OPERATING SYSTEMS</option>
            <option value="DATA STRUCTURES AND ALGORITHMS">DATA STRUCTURES AND ALGORITHMS</option>
            <option value="Java">OBJECT ORIENTED PROGRAMMING USING JAVA</option>
            <option value="System Administartion">SYSTEM ADMINISTRATION </option>
            <option value="ADVANCED WEBTECHNOLOGIES AND MEAN STACK">ADVANCED WEBTECHNOLOGIES AND MEAN STACK</option>
            <option value="DATA MINING AND APPLICATIONS">DATA MINING AND APPLICATIONS</option>
            <option value="MACHINE LEARNING">MACHINE LEARNING</option>
            <option value="SOFTWARE ENGINEERING AND DESIGN PATTERNS">SOFTWARE ENGINEERING AND DESIGN PATTERNS</option>
            <option value="Mobile Application and Development">MOBILE APPLICATION AND DEVELOPMENT </option>
            <option value="CRYPTOGRAPHY">CRYPTOGRAPHY</option>
            <option value="COMPUTER ESSENTIALS FOR DATA SCIENCE">COMPUTER ESSENTIALS FOR DATA SCIENCE</option>
            <option value="PROBLEM SOLVING AND PROGRAMMING IN C">PROBLEM SOLVING AND PROGRAMMING IN C</option>
            <option value="Database Management System">DATABASE MANAGEMENT SYSTEM </option>
            <option value="OPERATING SYSTEMS">OPERATING SYSTEMS</option>
            <option value="DATA MINING">DATA MINING</option>
            <option value="R Programming for Data Sciences">R PROGRAMMING </option>
            <option value="WEB TECHNOLOGIES">WEB TECHNOLOGIES</option>
            <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
            <option value="CLOUD COMPUTING">CLOUD COMPUTING</option>
            <option value="BIG DATA ANALYTICS AND VISUALIZATION">BIG DATA ANALYTICS AND VISUALIZATION</option>
            <option value="COMPUTER ESSENTIALS">COMPUTER ESSENTIALS</option>
            <option value="PROBLEM SOLVING AND ALGORITHMIC THINKING">PROBLEM SOLVING AND ALGORITHMIC THINKING</option>
            <option value="COMPUTER ORGANIZATION">COMPUTER ORGANIZATION</option>
            <option value="ADVANCED JAVA AND J2EE">ADVANCED JAVA AND J2EE</option>
            <option value="C# AND .NET FRAMEWORK">C# AND .NET FRAMEWORK</option>
            <option value="CRYPTOGRAPHY AND CYBER SECURITY">CRYPTOGRAPHY AND CYBER SECURITY</option>
            <option value="STATISTICS AND PROBABLILITY">STATISTICS AND PROBABLILITY</option>
            
            
            <!-- Add more course names as needed -->
        </select>

        <button type="submit" id="addBookButton" disabled>Add Book</button>

    </form>

    <script>
        function updateFileSize() {
            var input = document.getElementById('file');
            var fileSizeInfo = document.getElementById('fileSizeInfo');
            var addButton = document.getElementById('addBookButton');

            if (input.files.length > 0) {
                var fileSizeInBytes = input.files[0].size;
                var fileSizeInKB = fileSizeInBytes / 1024;

                fileSizeInfo.innerText = 'File Size: ' + fileSizeInKB.toFixed(2) + ' KB';

                // Enable or disable the "Add Book" button based on file size
                addButton.disabled = (fileSizeInBytes > 1024 * 1024);

                // Show celebration box if file size is less than or equal to 1 MB
                if (fileSizeInBytes <= 1024 * 1024) {
                    document.getElementById('celebrationBox').style.display = 'block';
                    document.getElementById('errorBox').style.display = 'none';
                } else {
                    document.getElementById('celebrationBox').style.display = 'none';
                    document.getElementById('errorBox').style.display = 'block';
                }
            } else {
                fileSizeInfo.innerText = '';
            }
        }
    </script>

    <!-- Celebration Box -->
    <div id="celebrationBox" class="celebration-box">
        <i class="fas fa-check-circle"></i>
        <p>file size is lesser!</p>
    </div>

    <!-- Error Box -->
    <div id="errorBox" class="error-box">
        <i class="fas fa-exclamation-triangle"></i>
        <p>File size should be less than 1 MB. Please upload a smaller file.</p>
    </div>



<?php

$servername = "localhost";
$username = "id21385275_root";
$password = "Minor@2023";
$dbname = "id21385275_studentdb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $fileSize = $_FILES["file"]["size"];

        // Check if the file size is greater than 1 MB
        if ($fileSize > 1024 * 1024) {
            echo '<p style="font-style: italic; color: red;">File size should be less than 1 MB. Please upload a smaller file.</p>';
        } else {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            $targetFile = $targetDir . basename($_FILES["file"]["name"]);

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                $fileContent = file_get_contents($targetFile);
                $base64Content = base64_encode($fileContent);

                $bookName = $_POST["book_name"];
                $author = $_POST["author"];
                $publication = $_POST["publication"];
                $selectedTable = $_POST["table_name"];
                $semester = $_POST["semester"];
                $courseName = str_replace("_", " ", $_POST["course_name"]);

                $stmt = $conn->prepare("INSERT INTO $selectedTable (book_name, author, publication, pdf, semester, course_name) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $bookName, $author, $publication, $base64Content, $semester, $courseName);

                if ($stmt->execute()) {
                    echo "File uploaded successfully and book data inserted into the $selectedTable table.";
                } else {
                    echo "Error inserting record: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo '<p style="font-style: italic; color: white;">Upload a file to the corresponding batches.</p>';
    }
}

$conn->close();
?>


</body>

</html>