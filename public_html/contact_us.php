<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
           color: #333;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        p {
            color: #555;
            text-align: center;
            max-width: 600px;
            margin: 0 auto 20px;
            font-size: 16px;
            line-height: 1.5;
        }

        div {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        h3 {
            color: #333;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

 <h2 style="color: #fff;; font-size: 32px; font-style: italic;">Contact Us</h2>

    <p style="color: #fff;; font-weight: bold;">If you have any questions or need support, feel free to contact us:</p>

    <div>
        <h3>Creator Details</h3>
        <p>
            Name: Nishad S<br>
            Mobile No: 7356844788<br>
            <a href="mailto:amscu3csc21044@am.students.amrita.edu">Email:amscu3csc21044@am.students.amrita.edu</a>
        </p>
        <p>
            Name: Emmanuel Jean Joseph<br>
            Mobile No: 7559905614<br>
            <a href="mailto:amscu3csc21023@am.students.amrita.edu">Email:amscu3csc21023@am.students.amrita.edu</a>
        </p>
        <p>
            Name: Sanjay Mohan<br>
            Mobile No: 7306191986<br>
            <a href="mailto:amscu3csc21050@am.students.amrita.edu">Email:amscu3csc21050@am.students.amrita.edu</a>
        </p>
        <p>
            Name: Kalidas S<br>
            Mobile No: 8129388936<br>
            <a href="mailto:amscu3csc21029@am.students.amrita.edu">Email:amscu3csc21029@am.students.amrita.edu</a>
        </p>
    </div>

    <div>
        <h3>Support</h3>
        <p>
            For general inquiries and support, please email us at:
            <a href="mailto:support@amritaacademicwebresources.com">support@amritaacademicwebresources.com</a>
        </p>
    </div>

    <!-- Add more HTML or PHP code for your contact page -->

</body>
</html>