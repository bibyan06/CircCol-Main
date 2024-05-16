<?php
$conn = new mysqli('localhost', 'root', '', 'CirCol');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemId = $_POST['itemId'];

$sql = "DELETE FROM cart WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $itemId);

if ($stmt->execute()) {
    echo "Item removed successfully";
} else {
    echo "Error removing item: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
