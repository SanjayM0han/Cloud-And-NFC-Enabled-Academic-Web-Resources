<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S5 BCA DS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style>
        @keyframes highlighted {
    from {
        background-color: yellow;
    }
    to {
        background-color: #2c3e50;
    }
}
@keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
html{
    overflow-y: scroll;
}
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
.course-name{
    background: linear-gradient(to right, #2c3e50, #34495e);
    margin: 5px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}
.course-name:hover {
    transform: scale(1.03);
}
.course-item {
    background: linear-gradient(to right, #2c3e50, #34495e);
    margin: 5px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.course-item:hover {
    transform: scale(1.03);
}

.highlight {
    animation: highlighted 2s forwards;
}

a {
    text-decoration: none;
    color: #ecf0f1;
    font-weight: bold;
}

a:hover {
    color: #3498db;
}

.search-container {
    display: flex;
    justify-content: space-around; /* or space-evenly */
    margin-bottom: 20px;
}


.search-bar {
            padding: 10px;
            width:100%; /* Set the desired width, adjust as needed */
            border: none;
            border-radius: 4px;
            outline: none;
    }

    .search-results {
        display: none;
        position: absolute;
        background: #fff;
        z-index: 1;
        width: 40%; /* Set the desired width, adjust as needed */
        max-height: 150px;
        overflow-y: auto;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        color: #000;
        margin-top: 10px; /* Add margin for better spacing */
        animation: fadeIn 0.5s ease-in-out; /* Add fade-in animation */
    }

    .result-item {
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out; /* Add color transition */
    }

    .result-item:hover {
        background-color: #f2f2f2;
        color: #3498db; /* Change color on hover */
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
    border-radius: 8px;
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
               <a href="bookrequest.php" class="dropbtn">Request Book</a>
            </li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            
        </ul>
    </div>
</nav>
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
    <h1>Contents</h1>

    <!-- Search bar for book names -->
    <div class="search-container">
        <div>
            <input type="text" class="search-bar" id="bookSearchInput" placeholder="Search by book name">
            <div class="search-results" id="bookSearchResults"></div>
        </div>
        <div>
            <input type="text" class="search-bar" id="authorSearchInput" placeholder="Search by author name">
            <div class="search-results" id="authorSearchResults"></div>
        </div>
    </div>
    <ul class="course">
        <?php
        // Connect to the database
        $c = mysqli_connect("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

        // Fetch all distinct course names for S5 BCA
        $q_courses = "SELECT DISTINCT course_name FROM bca_ds WHERE semester = 'S5'";
        $p_courses = mysqli_query($c, $q_courses);

        // Loop through each course
        while ($course_row = mysqli_fetch_assoc($p_courses)) {
            $courseName = $course_row['course_name'];

            // Fetch PDFs for the current course and semester
            $q_pdfs = "SELECT * FROM bca_ds WHERE course_name = '$courseName' AND semester = 'S5'";
            $p_pdfs = mysqli_query($c, $q_pdfs);

            // Check if there are PDFs for the course and semester
            if (mysqli_num_rows($p_pdfs) > 0) {
                // Display the course name
                echo '<li class = "course-name">' . $courseName . '<ul>';

                // Loop through each PDF for the current course and semester
                while ($pdf_row = mysqli_fetch_assoc($p_pdfs)) {
                    // Display PDF links
                    echo '<li class="course-item"><a href="#" data-book="' . $pdf_row['book_name'] . '" data-author="' . $pdf_row['author'] . '" onclick="openPdf(\'' . $pdf_row['pdf'] . '\')">' . $pdf_row['book_name'] . '</a></li>';
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
    document.addEventListener("DOMContentLoaded", function () {
    const bookSearchInput = document.getElementById("bookSearchInput");
    const bookSearchResults = document.getElementById("bookSearchResults");
    const authorSearchInput = document.getElementById("authorSearchInput");
    const authorSearchResults = document.getElementById("authorSearchResults");

    bookSearchInput.addEventListener("input", function () {
        performSearch(bookSearchInput.value, 'books', bookSearchResults);
    });

    authorSearchInput.addEventListener("input", function () {
        performSearch(authorSearchInput.value, 'authors', authorSearchResults);
    });

   function performSearch(query, type, resultsContainer) {
    if (query.trim() !== "") {
        // Perform AJAX request to fetch search results
        fetch("search_bca_ds_s5.php?q=" + query + "&type=" + type)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                try {
                    const jsonData = JSON.parse(data);
                    // Filter results based on the type of search
                    const filteredResults = type === 'books' ? jsonData.books : jsonData.authors;
                    displaySearchResults(filteredResults, resultsContainer);
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            })
            .catch(error => console.error("Error fetching search results:", error));
    } else {
        // Clear search results if the input is empty
        resultsContainer.style.display = "none";
        resultsContainer.innerHTML = "";
    }
}



    function displaySearchResults(results, resultsContainer) {
        resultsContainer.innerHTML = "";
        resultsContainer.style.display = "block";

        const dropdownList = document.createElement("ul");
        dropdownList.className = "dropdown-list";

        results.forEach(result => {
            const resultItem = document.createElement("li");
            resultItem.className = "result-item";
            resultItem.textContent = result;
            resultItem.addEventListener("click", function () {
                if (resultsContainer === bookSearchResults) {
                    bookSearchInput.value = result;
                } else if (resultsContainer === authorSearchResults) {
                    authorSearchInput.value = result;
                }
                resultsContainer.style.display = "none";

                // Highlight and scroll to the selected item
                const selectedBookItem = document.querySelector('.course-item a[data-book="' + result + '"]');
                const selectedAuthorItem = document.querySelector('.course-item a[data-author="' + result + '"]');

                if (selectedBookItem || selectedAuthorItem) {
                    const selectedItem = selectedBookItem || selectedAuthorItem;
                    const isHighlighted = selectedItem.classList.contains("highlight");

                    // Remove the highlight class from all items
                    const items = document.querySelectorAll(".course-item");
                    items.forEach(item => item.classList.remove("highlight"));

                    if (!isHighlighted) {
                        selectedItem.scrollIntoView({ behavior: 'smooth' });
                        selectedItem.classList.add("highlight");
                        selectedItem.style.animationName = 'highlighted';
                        selectedItem.style.animationDuration = '2s';
                    } else {
                        selectedItem.scrollIntoView({ behavior: 'smooth' });
                    }
                } else {
                    console.log("Item not found");
                }
            });
            dropdownList.appendChild(resultItem);
        });

        resultsContainer.appendChild(dropdownList);
    }
});

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
