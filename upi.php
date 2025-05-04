<!DOCTYPE html>
<html>
<head>
  <title>UPI Payment</title>
  <style>
    body {
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('images/home.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .upi-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
      width: 350px;
    }

    .upi-container img {
      width: 200px;
      margin-bottom: 20px;
    }

    .upi-id, .amount {
      font-size: 18px;
      margin: 10px 0;
      color: #333;
    }

    .note {
      font-size: 14px;
      color: #666;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <div class="upi-container">
    <h2>Scan to Pay</h2>
    <!-- Replace the src with your actual QR code image -->
    <img src="images/QR.png" alt="UPI QR Code">

    <div class="upi-id">UPI ID: <strong>yourname@upi</strong></div>
    <div class="amount">Amount: ₹500.00</div>

    <div class="note">
      After scanning the QR, complete payment in your UPI app.<br>
      You will be redirected after confirmation.
    </div>
  </div>

</body>
</html>
