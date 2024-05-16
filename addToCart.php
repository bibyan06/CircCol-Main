<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CirCol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product details from AJAX request
$imgSrc = $_POST['imgSrc']; 
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$quantity = $_POST['quantity'];
$totalAmount = $_POST['totalAmount'];

// SQL query to insert data into cart table
$sql = "INSERT INTO cart (image, product_name, price, quantity, total_amount)
        VALUES ('$imgSrc', '$productName', '$productPrice', '$quantity', '$totalAmount')";

if ($conn->query($sql) === TRUE) {
    echo "Product added to cart successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
