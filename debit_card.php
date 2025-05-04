<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "institute_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect POST data
$card_number = $_POST['card_number'];
$expiration_date = $_POST['expiration_date'] . "-01"; // Add day for DATE format
$cvv = $_POST['cvv'];
$card_holder_name = $_POST['card_holder_name'];

// Insert into database
$sql = "INSERT INTO debit_card (card_number, expiration_date, cvv, card_holder_name)
        VALUES ('$card_number', '$expiration_date', '$cvv', '$card_holder_name')";

if ($conn->query($sql) === TRUE) {
    echo "Debit Card payment submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
