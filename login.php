<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CirCol</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                        <div class="login-box">
                            <h5>Welcome Back!</h5>

                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="login-row row no-margin">
                                    <label for=""><i class="fas fa-envelope"></i> Email Address</label>
                                    <input type="text" class="form-control form-control-sm" name="email">
                                </div>

                                <div class="login-row row no-margin">
                                    <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>

                                <div class="login-row row forrr no-margin">
                                    <p><input type="checkbox" name="remember"> Remember Me</p>
                                    <p><a href="#">Forgot Password?</a></p>
                                </div>

                                <div class="login-row btnroo row no-margin">
                                    <button type="submit" class="btn btn-primary btn-sm" name="signin"> Sign In</button>
                                    <button class="btn btn-light  btn-sm"> Create Account</button>
                                </div>
                                <div class="login-row donroo row no-margin">
                                    <p>Don't have an Account? <a href="#">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "CirCol";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_POST['signin'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to fetch user from database
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password correct, redirect to dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // Password incorrect
            echo "<p>Password incorrect</p>";
        }
    } else {
        // User not found
        echo "<p>User not found</p>";
    }
}
?>

<!-- JavaScript for redirection -->
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get the sign-in button element
        var signInButton = document.querySelector("button[name='signin']");

        // Add click event listener to the sign-in button
        signInButton.addEventListener("click", function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Redirect to dashboard.php
            window.location.href = "dashboard.php";
        });
    });
</script>

</body>
</html>
