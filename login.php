<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mavs</title>

    <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" id="username" name="username" class="username" />
                <input type="password" placeholder="Password" id="password" name="password" class="password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="config.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="username" placeholder="Username" id="username" name="username" class="username" />
                <input type="password" placeholder="Password" id="password" name="password" class="password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Copyright &copy; 2020 <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://www.facebook.com/JhnMvrc1997/">John Maveric Cabalic</a>
            All Rights Reserved
        </p>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        (function($) {
            $(function() {
                /* Login */
                const signUpButton = document.getElementById("signUp");
                const signInButton = document.getElementById("signIn");
                const container = document.getElementById("container");

                signUpButton.addEventListener("click", () => {
                    container.classList.add("right-panel-active");
                });

                signInButton.addEventListener("click", () => {
                    container.classList.remove("right-panel-active");
                });
            });
        })(jQuery);
    </script>
</body>

</html>