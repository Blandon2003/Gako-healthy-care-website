<!-- PHP code for handling form submission -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthycare";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contactform (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Contact Us Form  | healthy </title>
    <link rel="stylesheet" href="contactform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">gako, kk512</div>
                <div class="text-two">Nyamata</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+250 787 277 075</div>
                <div class="text-two">+250 790 158 972</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">blandonashimirwe@gmail.com</div>
                <div class="text-two"><info class="blandonashimirwe">info@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any issues about this website, you can contact us; we are ready to reply to your message.</p>
            <form method="post" action="#">
                <div class="input-box">
                    <input type="text" name="name" value="" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email"value="" placeholder="Enter your email" required>
                </div>
                <div class="input-box message-box">
                    <textarea name="message" value="message" placeholder="Your message" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Send Now">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>