<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
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
                <form id="loginForm">
                    <h1 class="form__title">Admin Login</h1>
                    <input class="form__email" type="text" id="user_id" name="user_id" placeholder="User ID" value="admin" readonly/>
                    <input class="form__password" type="password" id="password" name="password" placeholder="******" value="amma" readonly/>
                    <input class="form__submit-btn" type="button" value="Login" onclick="checkLogin()"/>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkLogin() {
        var username = document.getElementById('user_id').value;
        var password = document.getElementById('password').value;

        // Check if the username and password match the expected values
        if (username === 'admin' && password === 'amma') {
            // Redirect to the adminlogin page
            window.location.href = 'adminlogin.php';
        } else {
            alert('Incorrect username or password. Please try again.');
        }
    }
</script>

</body>
</html>
