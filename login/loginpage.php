<?php
include '../database/register.php';
include '../database/login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign In/Up Page </title>

    <!-- bootstrab -->
    <link rel="stylesheet" href="bootstrab/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrab/bootstrap.bundle.js">

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginpage.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="login-form " id="loginForm">
            <h1 data-tra="signInHeader">Sign In</h1>
            <form action="" method="post">
                <input type="email" placeholder="Email" name="email" required data-tra="emailPlaceholder">
                <input type="password" placeholder="Password" name="password" required data-tra="passwordPlaceholder">
                <button name="login" class="bg-primary" data-tra="loginButton">Login</button>
                <a href="#" data-tra="forgotPasswordLink">Forgot Your Password?</a>
            </form>

            <p data-tra="noAccountText">Don't have an account? <a href="#" id="showSignup" onclick="signup()" data-tra="signupLink">signup</a></p>
        </div>
        <div class="signup-form hidden" id="signupForm">
            <h1 data-tra="createAccountHeader">Create An Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class='bx bxl-google-plus'></i></a>
                <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="icon"><i class='bx bxl-github'></i></a>
                <a href="#" class="icon"><i class='bx bxl-linkedin'></i></a>
            </div>
            <div class="form-message-container">
                <span data-tra="orUseEmailText">Or use your email for registration</span>
            </div>

            <form action="" method="post">
                <input type="text" placeholder="Name" name="username" data-tra="namePlaceholder">
                <input type="email" placeholder="Email" name="email" data-tra="emailPlaceholder">
                <input type="password" placeholder="Password" name="password" data-tra="passwordPlaceholder">
                <button name="signup" data-tra="signUpButton">Sign Up</button>
                <a class="button" href="loginpage.php" data-tra="signUpLink">Sign Up</a>
            </form>
            <p data-tra="alreadyHaveAccountText">Already have an account? <a href="#" id="showLogin" onclick="login()" data-tra="signInLink">Sign In</a></p>
        </div>
    </div>
    <script>
        function signup() {


            var log = document.getElementById('loginForm');
            var sign = document.getElementById('signupForm');

            log.style.display = "none";
            sign.style.display = "block";
        }

        function login() {

            var log = document.getElementById('loginForm');
            var sign = document.getElementById('signupForm');

            log.style.display = " block";
            sign.style.display = "none";
        }
    </script>
</body>
</html>