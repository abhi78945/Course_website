<!DOCTYPE html>
<html>
<head>
<style>

.tab 
	{
	float: left;
	border: 1px solid #ccc;
	background-color: #f1f1f1;
	width: 15%;
	height: 400px;
	}

.tab button 
	{
	display: block;
	background-color: inherit;
	color: black;
	padding: 22px 16px;
	width: 100%;
	border: none;
	outline: none;
	text-align: left;
	cursor: pointer;
	font-size: 17px;
	}

.tab button:hover 
	{
	background-color: #ddd;
	}

.tab button.active 
	{
	background-color: #ccc;
	}


.tabcontent 
	{
	float: left;
	padding: 30px 40px;
	border: none;
	width: 70%;
	border-left: none;
	height: 400px;
  
	}


input[type="text"], input[type="password"]
	{
	display: block;
	box-sizing: border-box;
	border: none;
	border-bottom: 6px solid;
	background: #ffffff;
	padding: 5px;
	margin: 0px 0px 2px 0px;
	border: 1px solid #888888;		
	width: 50%;
	}
	
p
	{
	margin: 10px 0px 3px 0px;
	font-size: 17px;
	font-width: 17px strong;
	
	}
	
input[type="submit"], input[type="reset"]
		{
		background-color: #d9d9d9;
		color: black;
		padding: 10px 20px;
		margin: 15px 10px 20px 40px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		width: 15%;
		text:strong;
		}	

    .payment-box {
      max-width: 400px; margin: auto;
      border: 1px solid #ccc; padding: 20px; border-radius: 10px;
      text-align: center;
    }
    button {
      padding: 12px 20px; margin-top: 20px;
      background-color: #28a745; color: white;
      border: none; border-radius: 5px; cursor: pointer;
    }
	
	
</style>
</head>

<body>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Credit Card')"id="defaultOpen">Credit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card')">Debit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card + ATM Pin')">UPI</button>
		<button class="tablinks" onclick="openCity(event, 'Internet Banking')">Internet Banking</button>
		<button class="tablinks" onclick="openCity(event, 'Wallet/Cash Card')">Wallet/Cash Card</button>
		<button class="tablinks" onclick="openCity(event, 'IMPS')">IMPS</button>
	</div>	
	
	<div id="Credit Card" class="tabcontent">
  <h3>Pay by Credit Card</h3>
  <form action="credit_card.php" method="post">
    <p>Card Number</p>
    <input type="text" name="card_number" placeholder="Enter Card Number">

    <p>Expiration Date</p>
    <input type="month" name="expiration_date">

    <p>CVV/CVC</p>
    <input type="text" name="cvv">

    <p>Card Holder Name</p>
    <input type="text" name="card_holder_name" placeholder="Enter Card Holder Name">

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>
</div>

	
<div id="Debit Card" class="tabcontent">
  <h3>Pay by Debit Card</h3>
  <form action="debit_card.php" method="post">
    <p>Card Number</p>
    <input type="text" name="card_number" placeholder="Enter Card Number">

    <p>Expiration Date</p>
    <input type="month" name="expiration_date">

    <p>CVV/CVC</p>
    <input type="text" name="cvv">

    <p>Card Holder Name</p>
    <input type="text" name="card_holder_name" placeholder="Enter Card Holder Name">

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>
</div>


  <div id="Debit Card + ATM Pin" class="tabcontent">
  <h3>Pay by UPI</h3>
  <p>Click below to pay using UPI.</p>
  <form action="upi.php" method="get">
    <button type="submit">Pay with UPI</button>
  </form>
</div>
	
	
	
	<div id="Internet Banking" class="tabcontent">
		<h3>Pay by Internet Banking</h3>
		<p>User ID</p>
		<input type="text" name="userid">
	
		<p>ATM Pin/Password</p>
		<input type="password" name="pwd">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="Wallet/Cash Card" class="tabcontent">
		<h3>Pay by Wallet/Cash Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Pin</p>
		<input type="password" name="pwd" placeholder="Enter Pin">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="IMPS" class="tabcontent">
		<h3>Pay by IMPS</h3>
		<p>Beneficiary Mobile Number</p>
		<input type="text" name="mobile">
	
		<p>Beneficiary MMID</p>
		<input type="text" name="mmid">
	
		<p>Amount</p>
		<input type="text" name="amount">
	
		<p>Remarks</p>
		<input type="text" name="remarks">
		
		<p>Transaction Password</p>
		<input type="password" name="pwd">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	
	<script>
		function openCity(evt, mop) 
		{
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
		
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
		
			document.getElementById(mop).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
		
		
</body>
</html>

