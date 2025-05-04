<?php
// Enable error reporting for development (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default for XAMPP
$dbname = "institute_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate form fields
    if (
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['phone']) && !empty($_POST['phone']) &&
        isset($_POST['course']) && !empty($_POST['course'])
    ) {
        // Collect and sanitize form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $course = htmlspecialchars($_POST['course']);

        // Prepare and bind query
        $stmt = $conn->prepare("INSERT INTO enrollments (name, email, phone, course) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $course);

        // Execute and check result
        if ($stmt->execute()) {
            // Redirect to payment page
            header("Location: payment.php");
            exit();
        } else {
            echo "Database Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: All fields are required.";
    }
}

$conn->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Enroll Page</title>
  <link rel="stylesheet" href="style.css"> <!-- Optional external CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: url('images/home.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;      
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .enroll-form {
      max-width: 500px;
      margin: auto;
      border: 1px solid #ccc;
      padding: 30px;
      color: white;
      border-radius: 10px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      color: black;
      margin-top: 10px;
    }
    button {
      margin-top: 20px;
      padding: 12px;
      width: 100%;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="enroll-form">
    <h2>Enroll in Course</h2>
    <form action="enroll.php" method="post">


      <label>Full Name</label>
      <input type="text" name="name" required>

      <label>Email Address</label>
      <input type="email" name="email" required>

      <label>Phone Number</label>
      <input type="text" name="phone" required>

      <label>Select Course</label>
      <select name="course" required>
        <option value="">-- Choose a Course --</option>
        <option value="web_dev">Web Development</option>
        <option value="python">Python Programming</option>
        <option value="ml">Machine Learning</option>
      </select>

      <button type="submit">Proceed to Payment</button>
    </form>
  </div>
</body>
</html>
