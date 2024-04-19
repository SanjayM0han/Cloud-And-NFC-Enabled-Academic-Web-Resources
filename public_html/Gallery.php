<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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

.image-container img {
            width: 300px; /* Set the desired width */
            height: 400px; /* Set the desired height */
            object-fit: cover; /* Maintain aspect ratio and cover container */
            margin: 5px; /* Add margin between images */
        }
    </style>
</head>
<body>

    <!-- Add your gallery images and HTML structure here -->
    <h2>Gallery</h2>

    <!-- Example: Displaying images -->
    <div class="image-container">
        <a href="https://www.mta.ca/~rrosebru/oldcourse/263114/Dsa.pdf"> <img src="1.jpg" alt="one"> </a>
        <a href="https://greenteapress.com/thinkdast/thinkdast.pdf"> <img src="2.png" alt="one"> </a>
        <a href="https://greenteapress.com/thinkpython2/thinkpython2.pdf"> <img src="3.jpeg" alt="one"></a>
        <a href="https://www.cs.bham.ac.uk/~jxb/DSA/dsa.pdf"><img src="4.jpeg" alt="one"></a>
        <a href="https://cdn.ttgtmedia.com/rms/pdf/B15676_Mastering_Python_for_Networking_and_Security_eBook_Ch_3.pdf"><img src="5.jpeg" alt="one"></a>
        <a href="hhttps://www.vssut.ac.in/lecture_notes/lecture1423905560.pdf"><img src="6.jpeg" alt="one"></a>
        <a href="https://greenteapress.com/thinkpython2/thinkpython2.pdf"><img src="7.jpeg" alt="one"></a>
        <a href="https://www.iitk.ac.in/esc101/share/downloads/javanotes5.pdf"><img src="8.jpeg" alt="one"></a>
        <a href="https://www.andrew.cmu.edu/user/kk3n/homepage/prasanta10.pdf"><img src="9.jpeg" alt="one"></a>
        <!-- Add more images as needed -->
    </div>

    <!-- Add more HTML or PHP code for your gallery page -->

</body>
</html>