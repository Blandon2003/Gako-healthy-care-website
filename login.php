<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthycare";

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted form data
    $emailPhone = $_POST['email_phone'];
    $password = $_POST['password'];

    // Prepare and execute the query to check the credentials
    $stmt = $pdo->prepare("SELECT * FROM registration WHERE (email = :email OR phone = :phone) AND password = :password");
    $stmt->execute(array(':email' => $emailPhone, ':phone' => $emailPhone, ':password' => $password));
    $user = $stmt->fetch();

    // Check if a matching user was found
    if ($user) {
        // Credentials are correct, perform further actions (e.g., redirect to a dashboard)
        // ...
        // Example: Redirect to a dashboard page
        header("Location: beautifulhealth2.php");
        exit();
    } else {
        // Credentials are incorrect, display an error message or redirect back to the login page with an error flag
        header("Location: login.php?error=1");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="beautifulhealth.css" />
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
          <li><a href="beautifulhealth.php">Home</a></li>
          <li><a href="login.php">About Us</a></li>
          <li><a href="login.php">Services</a></li>
          <li><a href="login.php">Doctors</a></li>
          <li><a href="login.php">book appointment</a></li>
          <li><a href="login.php">ContactUs</a></li>
          <li><a href="login.php">Payment</a></li>
        </ul>
        <div class="buttons">
          <a href="registrationfom.php" class="signup">SignUp</a>
        </div>
      </nav>
    </header>
    
    <section class="container">
    <header>Login</header>
    <form action="login.php" method="POST" class="form">
        <div class="input-box">
            <label>Email</label>
            <input type="text" name="email_phone" placeholder="Enter email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}|[0-9]{10,}" title="Enter a valid email address or phone number" />
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required />
        </div>

        <button type="submit">Login</button>
        <p>If no account</p>
        <button type="submit">
        <a href="registrationfom.php">Join Now</a></button>
    </form>
</section>

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

</body>
</html>