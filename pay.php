<?php
$host = "localhost";
$db = "healthycare";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$cardNumber = "892892";
$billingAddress = "nyamirambo";
$paymentMethod = "paypal";
$amount = "8$";
$description = "laboratory Test";
$date = date('Y-m-d'); // Current date

$sql = "INSERT INTO payment (card, bill_address, payment, amount, description, date) VALUES ('$cardNumber', '$billingAddress', '$paymentMethod', '$amount', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Payment data successfully inserted.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Payments and Billing</title>
    <link rel="stylesheet" href="beautifulhealth.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-size: 20px;
        }

        h1 {
            text-align: center;
        }

        .billing-info {
            margin-top: 20px;
            background-color: transparent;
            padding: 20px;
        }

        .billing-info h2 {
            margin-top: 0;
        }

        .payment-methods {
            margin-top: 20px;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .payment-method label {
            width: 150px;
        }

        .payment-method input[type="text"],
        .payment-method select {
            width: 400px;
            padding: 4px;
            font-size: 20px;
        }

        .payment-method  button{
            font-size: 20px;
        }

        .payment-history {
            margin-top: 20px;
        }

        .payment-history table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-history table th,
        .payment-history table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .payment-history table th {
            background-color: #f5f5f5;
        }

        .payment-history table tr:hover {
            background-color: #f9f9f9;
        }

        .payment-history table{
            color: #fff;
        }

        .payment-history table th{
            color: #000;
        }

    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
          <h2 class="logo"><img src="logo.png" alt=""><a href="#"> HEALTHY CARE</a></br>Gako</h2>
          <input type="checkbox" id="menu-toggle" />
          <label for="menu-toggle" id="hamburger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
              <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </label>
          <ul class="links">
            <li><a href="beautifulhealth2.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="our_doctor.php">Doctors</a></li>
            <li><a href="appointment.php">book appointment</a></li>
            <li><a href="contactform.php">ContactUs</a></li>
            <li><a href="cardslider.php">Consultation</a></li>
            <li><a href="pay.php">Payment</a></li>
          </ul>
        </nav>
      </header>
    <div class="container">
    
        <h1>Online Payments and Billing</h1>

        <div class="billing-info">
            <h2>Billing Information</h2>

            <div class="payment-methods">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="payment-method">
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" name="cardNumber">
                </div>
                <div class="payment-method">
                    <label for="expiry-date">Expiry Date:</label>
                    <input type="text" id="expiry-date">
                </div>
                <div class="payment-method">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv">
                </div>
                <div class="payment-method">
                    <label for="billing-address">Billing Address:</label>
                    <input type="text" id="billing-address" name="billingAddress">
                </div>
                <div class="payment-method">
                    <label for="billing-address">Amount:</label>
                    <input type="text" id="billing-address">
                </div>
                <div class="payment-method">
                    <label for="billing-address">Description:</label>
                    <input type="text" id="billing-address" name="description">
                </div>
                <div class="payment-method">
                    <label for="payment-method">Payment Method:</label>
                    <select id="payment-method" name="paymentMethod">
                        <option value="credit-card">Credit Card</option>
                        <option value="bank-account">Bank Account</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>
                <div class="payment-method">
                    <button onclick="makePayment()">Make Payment</button>
                </div>
            </div>

            <div class="payment-history">
                <h2>Payment History</h2>

                <table style="color: #fff;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2022-01-01</td>
                            <td>Consultation Fee</td>
                            <td>$100</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>2022-02-01</td>
                            <td>Lab Test</td>
                            <td>$50</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>2022-03-01</td>
                            <td>Medication</td>
                            <td>$30</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">Healthycare</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">quick link</li>
          <li><a href="#">Home</a></li>
          <li><a href="contactform.html">Contact us</a></li>
          <li><a href="index.html">About us</a></li>
          <li><a href="login_and_register.html">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">patient receipts</a></li>
          <li><a href="#">patient care</a></li>
          <li><a href="login_and_register.html">patient regitration</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="login.html">Profile</a></li>
          <li><a href="login.html">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">derpatments</li>
          <li><a href="#">orthopedics</a></li>
          <li><a href="#">specialist</a></li>
          <li><a href="#">neotrorist</a></li>
          <li><a href="#">physcologist</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
      
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
    <p>&copy; 2023  Healthy. All rights reserved.</p>
  </footer>

    

</div>

    <script>
        function makePayment() {
            // Add your payment processing logic here
            alert("Payment processed!");
        }
    </script>
</body>
</html>