<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CirCol</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/user_bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/user_profile.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<style>
    .container-fluid.pt-4.px-4 {
        max-width: 900px; /* Adjust the max-width as needed */
    }

    .bg-light.rounded.p-4 {
        max-width: 800px; /* Adjust the max-width as needed */
    }

    .user_profile {
        border: 2px solid #1F4690;
        padding: 20px;
        margin-bottom: 25px;
        border-radius: 15px;
    }

    .orders {
        border: 2px solid #1F4690;
        padding: 20px;
        margin-bottom: 25px;
        border-radius: 15px;
    }

    .profile-info {
        display: flex;
        flex-wrap: wrap;
    }

    .profile-info p {
        flex: 1 1 100%;
    }

    @media (min-width: 768px) {
        .profile-info p {
            flex: 1 1 50%;
        }
    }

    .order-info {
        display: flex;
        justify-content: space-between;
    }

    .order-info p {
        margin-bottom: 5px;
    }

    .order-buttons {
        text-align: right;
    }

    .order-buttons button {
        margin-left: 10px;
    }
    .bg-light-orders {
        background-color: #ffffff; /* White background color */
    }
</style>

<body>
     <!-- Sidebar Start -->
     <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="dashboard.php"><img src="images/circol logo.png" alt="#" style="width: 150px; height:10px auto; margin-left:35px; margin-top:10px;"/></a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="ms-3">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="images/profile.jpg" alt="" style="width: 40px; height: 40px; margin-top:20px; margin-left:.2px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item" onclick="toggleSettings()">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="nav-item nav-link nav-link-orders" onclick="toggleOrdersSection()"><i class="fa fa-th me-2"></i>Orders</a>
                <a href="#" class="nav-item nav-link" ><i class="fa fa-table me-2"></i>Wishlist</a>
                <a href="#" class="nav-item nav-link nav-link-settings" onclick="toggleSettings()"><i class="fa fa-keyboard me-2"></i>Settings</a>
                <a href="login.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <header>
            <!-- header inner -->
            <div class="header">
                <div class="header_top d_none1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="conta_icon ">
                                    <a href="#"><img src="images/call.png" alt="#"/>Call us: 0126 - 922 - 0162</a>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="se_fonr1">
                                    <form action="#">
                                        <div class="select-box">
                                            <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                                            <select id="select-box1" class="select">
                                                <option value="Choice 1">English</option>
                                                <option value="Choice 1">Falkla</option>
                                                <option value="Choice 2">Germa</option>
                                                <option value="Choice 3">Neverl</option>
                                            </select>
                                        </div>
                                    </form>
                                    <span class="time_o"> Open hour: 8:00 - 5:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <!-- Profile and Orders Panel -->
         <div class="container-fluid pt-4 px-4">
            <!-- Combined Panel -->
            <div class="bg-light rounded p-4">
                <!-- User Profile Section -->
                <div class="user_profile" id="profileSection">
                    <big>User Profile</big>
                    <!-- User profile information -->
                    <div class="profile-info">
                        <p><strong>Name:</strong> <span id="userName">John Doe Villanueva</span></p>
                        <p><strong>Email:</strong> <span id="userEmail">john@example.com</span></p>
                        <p><strong>Phone Number:</strong> <span id="userPhone">+1234567890</span></p>
                        <p><strong>Address:</strong> <span id="userAddress">123 Main St, City, Country</span></p>
                    </div>
                </div>

                <!-- Your Orders Section -->
                <div class="orders" id="ordersSection"> 
                    <big>Your Orders</big>
                    <!-- Order Information -->
                    <div class="order-info">
                        <div>
                            <p><strong>Order ID:</strong> #12345</p>
                            <p><strong>Status:</strong> Processing</p>
                            <p><strong>Date Ordered:</strong> 01 Jan 2045</p>
                        </div>
                        <!-- Buttons for Order Actions -->
                        <div class="order-buttons">
                            <button class="btn btn-primary">Track Order</button>
                            <button class="btn btn-danger">Cancel Order</button>
                        </div>
                    </div>

                    <hr class="my-4">
                    <!-- Order Details -->
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Order Image -->
                            <img src="path_to_order_image" alt="Order Image" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-9">
                            <!-- Order Information -->
                            <p><strong>Name:</strong> Product Name</p>
                            <p><strong>Quantity:</strong> 1</p>
                            <p><strong>Size:</strong> Large</p>
                            <p><strong>Price:</strong> $50</p>
                        </div>
                    </div>
                </div>
        <!-- Settings Section -->
        <div class="settings" id="settingsSection" style="display: none;">
                    <big>Account Details</big>
                    <!-- User account details -->
                    <div class="profile-info">
                    <p><strong>Name:</strong> <span id="userNamePlaceholder">[Name]</span></p>
                    <p><strong>Email:</strong> <span id="userEmailPlaceholder">[Email]</span></p>
                    <p><strong>Phone Number:</strong> <span id="userPhonePlaceholder">[Phone Number]</span></p>
                    <p><strong>Address:</strong> <span id="userAddressPlaceholder">[Address]</span></p>
                    <p><strong>Password:</strong> <span id="userPasswordPlaceholder">[Password]</span></p>
                    </div>
                    <!-- Edit button -->
                    <div class="text-end">
                        <button class="btn btn-primary" onclick="editProfile()">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <?php       
             // Settings Section
           /* echo "<div class='settings' id='settingsSection' style='display: none;'>
            <big>Account Details</big>
            <!-- User account details -->
            <div class='profile-info'>
                <p><strong>Name:</strong> <span id='userNamePlaceholder'>[Name]</span></p>
                <p><strong>Email:</strong> <span id='userEmailPlaceholder'>[Email]</span></p>
                <p><strong>Phone Number:</strong> <span id='userPhonePlaceholder'>[Phone Number]</span></p>
                <p><strong>Address:</strong> <span id='userAddressPlaceholder'>[Address]</span></p>
                <p><strong>Password:</strong> <span id='userPasswordPlaceholder'>[Password]</span></p>
            </div>
            <!-- Edit button -->
            <div class='text-end'>
                <button class='btn btn-primary' onclick='editProfile()'>Edit</button>
            </div>
            </div>";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            } else {
            echo "User ID not provided.";
            } */
        ?> 
       
                    </div>
                    <!-- Edit button -->
                    <div class="text-end">
                        <button class="btn btn-primary" onclick="editProfile()">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile and Orders Panel End -->

        <!-- Footer Start -->
        <div class="user_profile_footer fixed-bottom">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div>
                        &copy; <a href="#">CirCol</a>, All Right Reserved. 
                    </div>
                </div>
            </div>
            </div>
    </div>
    <!-- Footer End -->
    
    <script>

    function toggleOrdersSection() {
        var profileSection = document.getElementById("profileSection");
        var ordersSection = document.getElementById("ordersSection");
        var settingsSection = document.getElementById("settingsSection");

        // Hide profile and settings sections
        profileSection.style.display = "none";
        settingsSection.style.display = "none";

        // Show orders section
        ordersSection.style.display = "block";

        // Remove 'active' class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add 'active' class to the clicked nav link
        var ordersLink = document.querySelector('.nav-link-orders');
        ordersLink.classList.add('active');

        // Add background color class to orders section
        ordersSection.classList.add('bg-light-orders');
    }

    function toggleSettings() {
        var profileSection = document.getElementById("profileSection");
        var ordersSection = document.getElementById("ordersSection");
        var settingsSection = document.getElementById("settingsSection");

        profileSection.style.display = "none";
        ordersSection.style.display = "none";
        settingsSection.style.display = "block";

        // Remove 'active' class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add 'active' class to the clicked nav link
        var settingsLink = document.querySelector('.nav-link-settings');
        settingsLink.classList.add('active');
    }

        // Function to handle editing the profile
        function editProfile() {
            // Fetch and update user details
            var newName = prompt("Enter new name:");
            var newEmail = prompt("Enter new email:");
            var newPhone = prompt("Enter new phone number:");
            var newAddress = prompt("Enter new address:");
            var newPassword = prompt("Enter new password:");

            // Update user details in the UI
            document.getElementById("userName").innerText = newName;
            document.getElementById("userEmail").innerText = newEmail;
            document.getElementById("userPhone").innerText = newPhone;
            document.getElementById("userAddress").innerText = newAddress;
            document.getElementById("userPassword").innerText = newPassword;
        }
        // Function to add a new order box
        function addOrderBox() {
            // Create a new order box HTML structure
            var newOrderBox = `
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded p-4">
                        <h5 class="mb-4">Your Orders</h5>
                        <!-- Order Information -->
                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <p><strong>Order ID:</strong> #12345</p>
                                <p><strong>Status:</strong> Processing</p>
                                <p><strong>Date Ordered:</strong> 01 Jan 2045</p>
                            </div>
                            <!-- Buttons for Order Actions -->
                            <div>
                                <button class="btn btn-primary me-2">Track Order</button>
                                <button class="btn btn-danger">Cancel Order</button>
                            </div>
                        </div>
                        <!-- Order Details -->
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Order Image -->
                                <img src="path_to_order_image" alt="Order Image" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-9">
                                <!-- Order Information -->
                                <p><strong>Name:</strong> Product Name</p>
                                <p><strong>Quantity:</strong> 1</p>
                                <p><strong>Size:</strong> Large</p>
                                <p><strong>Price:</strong> $50</p>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Append the new order box to the container
            document.getElementById("additionalOrdersContainer").innerHTML += newOrderBox;
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>