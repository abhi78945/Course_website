<?php
session_start();
include 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Incorrect password!";
        }
    } else {
        $error = "No account found with that email!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Training Institute</title>
    <style>
        body { margin: 0;
            padding: 0;
            background: url('images/home.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; }

            .form-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border: none;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
        }
        .login-box { background: white;
                padding: 30px; 
                border-radius: 10px; 
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                width: 300px; }
        input {display: block;
                width: 100%; 
                padding: 10px; 
                margin: 10px 0; }
        button { background: #007bff; 
                color: white; 
                padding: 10px; 
                width: 100%;
                border: none; 
                border-radius: 5px; }
        .error { color: red; }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Student Login</h2>
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p class="error"><?php echo $error; ?></p>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>
</div>
</body>
</html>
