<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header -->

    <header>
        <p class="logo"><img src="images/logo.png"></p>
        <a href="registration.html">Sign up</a>
        <a href="">About us</a>
    </header>

    <!-- flex -->

<div class="flex">

    <!-- left column -->

    <div class="left">
        <p style="color:white; font-size: 20px;text-align: center;">Space for Image</p>
        <img src="images/cs.jpg">
    </div>

    <!-- right column -->

    <div class="right">
        <form action="post">

            <!-- textbox -->
        <div class="textbox">
            <h1>Login</h1>

            <!-- username -->
            <div class="uname">
                <h4><i class="fas fa-user"></i> Username</h4>
            </div>
            <input type="text" name="Uname" placeholder="Example: Johndew@gmail.com" required><br>

        <!-- passwrod -->
            <div class="uname">
                <h4> <i class="fas fa-unlock-alt"></i> Password</h4>
            </div>
            <input type="password" name="password" placeholder="Example:12345" required><br>
            <div class="fyp">
            <a href="" style="text-decoration: none;color:blue;">Forgot your password?</a>
            </div>

            <!-- submit -->
            <input class="next" type="submit" Value="Login">
            <div class="su"><p>Don't have account? <a href="registration.html" style="text-decoration: none;">SignUp</a></p></div>
        </div>
        </form>
    </div>
</div>

<!-- footer -->
<footer>
    <a href="">© Educortex</a>
</footer>
</body>
</html>