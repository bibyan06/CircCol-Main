<?php
// Establish connection to the database
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "CirCol"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process each form field and save it to variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Make sure to hash this password before storing it in the database

    // Prepare SQL statement to insert data into the login table
    $sql = "INSERT INTO login (first_name, last_name, age, phone_number, address, email, username, password) 
            VALUES ('$first_name', '$last_name', '$age', '$phone_number', '$address', '$email', '$username', '$password')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to dashboard.php after successful sign-up
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>


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
                        <div class="signup login-box">
                            <h5>Welcome Back!</h5>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> First Name</label>
                                    <input type="text" name="first_name" class="form-control form-control-sm">
                                </div>
                                
                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Last Name</label>
                                    <input type="text" name="last_name" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Age</label>
                                    <input type="text" name="age" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Address</label>
                                    <input type="text" name="address" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Email</label>
                                    <input type="text" name="email" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-envelope"></i> Username</label>
                                    <input type="text" name="username" class="form-control form-control-sm">
                                </div>

                                <div class="login-row row no-margin signup">
                                    <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                                    <input type="password" name="password" class="form-control form-control-sm">
                                </div>

                                
                                <div class="login-row btnroo row no-margin signup">
                                    <button type="submit" class="btn btn-primary btn-sm" name="signup"> Sign Up</button> <!-- Added name attribute -->
                                    <button type="button" class="login btn-light btn-sm"> Login Account</button>
                                </div>
                            </form>
                            <div class="login-row donroo row no-margin signup">
                                <p>Do you have an Account? <a href="login.php">Log in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>
