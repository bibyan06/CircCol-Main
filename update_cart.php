<?php
$conn = new mysqli('localhost', 'root', '', 'CirCol');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemId = $_POST['itemId'];
$quantity = $_POST['quantity'];

$sql = "UPDATE cart SET quantity = ?, total_amount = quantity * price WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $quantity, $itemId);

if ($stmt->execute()) {
    echo "Quantity updated successfully";
} else {
    echo "Error updating quantity: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
