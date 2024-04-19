<?php
// Start the session at the very beginning of the script
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Retrieve user input
    $user_id = $_POST['user_id'];
    $password_input = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM users WHERE user_id = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $user_id, $password_input);

    // Hash the password before checking
    $hashed_password = hash('sha256', $password_input);
    $stmt->execute();

    // Fetch result
    $result = $stmt->get_result();

    // Check if a user with the given credentials exists
    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();

        // Get IP address
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Get local time and UTC time
        $localTime = date("Y-m-d H:i:s");
        $utcTime = gmdate("Y-m-d H:i:s");

        // Insert data into the student_info table
        $sql = "INSERT INTO student_info (user_id, ip_address, time_, date_) VALUES ('$user_id', '$ipAddress', '$localTime', '$utcTime')";

        if ($conn->query($sql) === TRUE) {
            // Store success message in session
            $_SESSION['success_message'] = "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Redirect accordingly after successful login
        if (strpos($row['user_id'], 'AM.SC.U3CSC') === 0) {
            header("Location: https://cloudandnfc.000webhostapp.com/BCA.php");
            exit();
        } elseif (strpos($row['user_id'], 'AM.SC.U3CDS') === 0) {
            header("Location:https://cloudandnfc.000webhostapp.com/BCA_DS.php");
            exit();
        } elseif (strpos($row['user_id'], 'AM.SC.P2MCA') === 0) {
            header("Location:https://cloudandnfc.000webhostapp.com/MCA.php");
            exit();
        }
    } else {
        // Display an error message if credentials are incorrect
        echo "<p>Login failed. Please check your credentials.</p>";
    }

    // Close the statement and connection
    $stmt->close();

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
            text-decoration: none;
        }

        .form {
            width: 720px;
            height: 500px;
            margin: 50px auto;
            padding: 45px 65px;
            background: linear-gradient(to right, #8300cd, #b800c4);
        }

        .form__box {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #fff;
            border-radius: 40px;
        }

        .form__left {
            width: 50%;
        }

        .form__padding {
            width: 210px;
            height: 210px;
            background: #f2f2f2;
            border-radius: 50%;
            margin: 0 auto;
            line-height: 210px;
            position: relative;
        }

        .form__image {
            max-width: 100%;
            width: 90%; /* Adjust this value to make the image smaller */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .form__right {
            line-height: 26px;
            width: 50%;
        }

        .form__padding-right {
            padding: 0 25px;
        }

        .form__title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .form__submit-btn {
            background: #1fcc44;
            cursor: pointer;
        }

        .form__submit-btn:hover {
            background: #ff3f70;
        }

        .form__email {
            position: relative;
        }

        input {
            display: block;
            width: 100%;
            margin-bottom: 25px;
            height: 35px;
            border-radius: 20px;
            border: none;
            background: #f2f2f2;
            padding: 10px;
            font-size: 14px;
            position: relative;
        }

        a {
            color: #71df88;
            position: relative;
        }

        a:hover {
            color: #ff3f70;
        }
    </style>
</head>
<body>

<div class="form">
    <div class="form__box">
        <div class="form__left">
            <div class="form__padding">
                <img class="form__image" src="https://f2.leadsquaredcdn.com/t/amritavishwa/content/common/images/Amritalogo.png"/>
            </div>
        </div>
        <div class="form__right">
            <div class="form__padding-right">
                <form method="POST">
                    <h1 class="form__title">Student Login</h1>
                    <input class="form__email" type="text" name="user_id" placeholder="User ID"/>
                    <input class="form__password" type="password" name="password" placeholder="******"/>
                    <input class="form__submit-btn" type="submit" value="Login"/>
                </form>
                <span>Forgot <a class="form__link" href="#">Username</a><a> / </a><a class="form__link" href="#">Password</a></span>
                <p> <a class="form__link" href="#">Create your account</a></p>
            </div>
        </div>
    </div>
</div>

<?php
// Display success message if set in the session
if (isset($_SESSION['success_message'])) {
    echo "<p>{$_SESSION['success_message']}</p>";
    unset($_SESSION['success_message']); // Clear the session variable
}
?>

</body>
</html>
