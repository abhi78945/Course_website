<?php
$conn = new mysqli("localhost", "root", "", "institute_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$card_number = $_POST['card_number'];
$expiration_date = $_POST['expiration_date'] . "-01"; // Convert to YYYY-MM-DD
$cvv = $_POST['cvv'];
$card_holder_name = $_POST['card_holder_name'];

$sql = "INSERT INTO credit_card (card_number, expiration_date, cvv, card_holder_name)
        VALUES ('$card_number', '$expiration_date', '$cvv', '$card_holder_name')";

if ($conn->query($sql) === TRUE) {
    echo "Credit Card Payment Submitted Successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
