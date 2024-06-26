<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CirCol</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 login-container">
                <div class="row">
                    <div class="col-lg-7 img-box">
                        <img src="images/login-banner.png" alt="">
                    </div>
                    <div class="col-lg-5 no-padding">
                        <div class="signup login-box">
                            <h5>Password Reset</h5>

                            
                            <div class="login-row row no-margin signup">
                                <label for=""><i class="fas fa-envelope"></i>Enter Email</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>

                            <div class="login-row btnroo row no-margin signup">
                                <a id="signin-btn" class="btn btn-primary btn-sm" href="new_password.php">Verify</a>
                                <button class="login btn-light btn-sm" onclick="window.location.href='login.php';">Cancel</button>
                            </div>
                            <div class="login-row donroo row no-margin signup">
                                <p>Do you have an Account? <a href="login.php">Log in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for redirection -->
    <script>
        // Wait for the document to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Get the sign-in button element
            var signInButton = document.getElementById("signin-btn");

            // Add click event listener to the sign-in button
            signInButton.addEventListener("click", function() {
                // Redirect to dashboard.php
                window.location.href = "login.php";
            });
        });
    </script>
</body>
</html>