<!DOCTYPE html>
<html>
<head>
    <title>SHAKSHAM Training Institute</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            background: url('images/home.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
        background: rgba(255, 255, 255, 0.9); /* Transparent white background */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 320px;
        text-align: center;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
    }

    button {
        background: #007bff;
        color: white;
        padding: 10px;
        width: 100%;
        border: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .error {
        color: red;
    }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .main {
            padding: 40px;
            text-align: center;
            color: white;
        }
        .main h2 {
            margin-bottom: 20px;
            color: white;
        }
        .buttons a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .buttons a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome SHAKSHAM Training Institute</h1>
    </div>

    <div class="main">
        <h2>Learn skills that power your future</h2>
        <p>Join our community and get access to high-quality courses.</p>

        <div class="buttons">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>
