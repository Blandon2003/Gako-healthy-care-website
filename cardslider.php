
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation</title>
  <link rel="stylesheet" href="beautifulhealth.css" />

  <style>
   body{
    
    background-position: center;
   }

  .consultation-section {
  background-color: transparent;
  padding: 30px 30px;
  border-radius: 5px;
  width: 40%;
  margin-left: 35%;
  margin-top: 2%;

}

.consultation-section h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}

.consultation-section p {
  color: #6cf6dd;
  font-size: 16px;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  background-color: #d333d9;
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
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
    

<div class="consultation-section">
  <h2>Consultation</h2>
  <p>Book an appointment for a consultation with our healthcare professionals.</p>
  <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" size="30" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Book Consultation</button>
  </form>
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

</body>
</html>





