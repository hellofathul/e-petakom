<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <!-- MATERIAL ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0" />
    <!-- GOOGLE FONTS - POPPINS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <h4>Matric ID</h4>
                    <input type="text" placeholder="XX12345">
                </div>
                <div class="input-field">
                    <h4>Password</h4>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn-login">
                <p class="account-text">Not register yet? <a href="#" id="sign-up-btn2">Create Account</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <p class="account-text">Have an account? <a href="#" id="sign-in-btn2">Login</a></p>
                <div class="dropdown">
                    <h4>User Type</h4>
                    <div class="select">
                        <span class="selected">Student</span>
                        <!-- ARROW DOWN-->
                        <div class="caret"></div>
                    </div>
                    <ul class="menu">
                        <li>Dean</li>
                        <li>Lecturer</li>
                        <li class="active">Student</li>
                        <li>PETAKOM Committee</li>
                        <li>PETAKOM Coordinator</li>
                    </ul>
                </div>
                <div class="input-field">
                    <h4>Matric ID</h4>
                    <input type="text" placeholder="XX12345">
                </div>
                <div class="input-field">
                    <h4>Password</h4>
                    <input type="password">
                </div>
                <div class="input-field">
                    <h4>Mobile Number</h4>
                    <input type="mobileno" placeholder="01XXXXXXXXX">
                </div>
                <div class="input-field">
                    <h4>Email</h4>
                    <input type="email" placeholder="example@address.com">
                </div>
                <input type="submit" value="Create Account" class="btn-signup">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Persatuan Teknologi Komputer</h3>
                    <p>Test</p>
                    <button class="btn-login-panel" id="sign-in-btn">Login</button>
                </div>
                <img src="./images/faculty-outline.svg" alt="./images/faculty-outline.svg" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Persatuan Teknologi Komputer</h3>
                    <p>Test</p>
                    <button class="btn-signup-panel" id="sign-up-btn">Create Account</button>
                </div>
                <img src="./images/faculty-outline.svg" alt="./images/faculty-outline.svg" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script src = "script.js"> </script>
</body>

</html>