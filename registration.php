<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <scipt src="registration.js"></scipt>
</head>

<body>

    <!-- header -->

    <header>
        <p class="logo"><img src="images/logo.png"></p>
        <a href="login.html">Login up</a>
        <a href="">About us</a>
    </header>

    <!-- flex -->

    <section class="flex">

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
                    <h1>Register</h1>

                    <!-- username -->
                    <div class="uname">
                        <h4><i class="fas fa-user"></i> Username</h4>
                    </div>
                    <input type="text" class="in2" name="Username" placeholder="Example: John Doe" required><br>


                    <!-- mobile -->
                    <div class="mobile">
                        <h4> <i class="fas fa-mobile-alt"></i>Mobile</h4>
                    </div>
                    <input type="mobile" class="in2" name="mobile" placeholder="Example:+911234567" required><br>


                    <!-- email -->

                    <div class="email">
                        <h4><i class="fas fa-envelope-square"></i>E-mail</h4>
                    </div>
                    <input type="email" name="email" class="in2" placeholder="Example: JohnDoe@gmail.com" required><br>

                    <!-- date of birth -->

                    <div class="dob">
                        <h4><i class="far fa-calendar-minus"></i> D.O.B</h4>
                    </div>
                    <input type="date" name="dob" class="in2" placeholder="Example: 01/01/2000" required><br>

                    <!-- gender -->

                    <div class="gender">
                        <h4><i class="fas fa-male"></i> <i class="fas fa-female"></i> Gender</h4>
                    </div>
                    <div class="radin">
                        <div style="display: flex;">
                            <input type="radio" name="Male" placeholder="Example: Male/Female"><br>
                            <label for="">Male</label>
                        </div>

                        <div style="display: flex">
                            <input type="radio" name="Female" placeholder="Example: Male/Female" required><br>
                            <label for="">Female</label>
                        </div>

                        <div style="display: flex;">
                            <input type="radio" name="Other" placeholder="Example: Male/Female" required><br>
                            <label for="">Other</label>
                        </div>


                    </div>


                    <!-- submit -->
                    <input class="next" type="submit" Value="Register">
                    <!-- checkbox -->
                    <input type="checkbox" class="terms" name="terms" value="Terms & conditions" Required
                        style="width=14px;height:14px;position:absolute;margin-left: -320px; margin-top:53px;">
                    <p style="font-size: 10px;">Accept our <a href="" style="text-decoration: none;">Terms &
                            Conditions</a></p>
                    <!-- checkbox -->
                    <div class="su">
                        <p>Already have account? <a href="login.html" style="text-decoration: none;">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <a href="">© Educortex</a>
    </footer>
</body>

</html>