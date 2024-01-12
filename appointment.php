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
    $username = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $state = $_POST['state'];

    // Insert the booking data into the database
    $stmt = $pdo->prepare("INSERT INTO booking (username, phone, email, doctor, state) 
                           VALUES (:name, :phone, :email, :doctor, :state)");
    $stmt->bindParam(':name', $username);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':doctor', $doctor);
    $stmt->bindParam(':state', $state);
    $stmt->execute();

    // Booking data inserted successfully
    echo "Booking data inserted successfully.";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Healthycare Management system</title>
    <link rel="stylesheet" href="beautifulhealth.css" />
  </head>

  <body>
    <header class="header">
    <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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


<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form action="https://formbold.com/s/FORM_ID" method="POST">
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input"/>
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input"/>
      </div>
      <div class="formbold-mb-5">
        <label for="doctor" class="formbold-form-label"> select doctor </label>
        <select name="doctor">
         <option hidden>Choose doctor</option>
         <option>Doctor Alain</option>
         <option>Doctor Diane Gashumba</option>
         <option>Doctor Ignase</option>
         <option>Doctor Kami</option>
         <option>Doctor Vincent</option>
        </select>
      </div>
      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">
          Address Details
        </label>
        <div class="formbold-mb-5">
              <input
                type="text" name="state" id="state" placeholder="Enter state" class="formbold-form-input"
              />
            </div>
          </div>
        </div>
      </div>

      <div>
        <button class="formbold-btn">Book Appointment</button>
      </div>
    </form>
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
      </div>e
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
          <li><a href="#"></a></li>
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
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body {
  height: 100vh;
  width: 100%;
  background: linear-gradient(to bottom, rgb(0, 34, 187) 23%, #9bd7e543 95%);
}

.header {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  position: relative;

}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 18px 12px;
}

.navbar .logo a {
  font-size: 1.8rem;
  text-decoration: none;
  color: #fff;
}

.navbar .links {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 35px;
}

.navbar .links a {
  font-weight: 500;
  text-decoration: none;
  color: #fff;
  padding: 10px 0;
  transition: 0.2s ease;
}

.navbar .links a:hover {
  color: #47b2e4;
}

.navbar .buttons a {
  text-decoration: none;
  color: #fff;
  font-size: 1rem;
  padding: 15px 0;
  transition: 0.2s ease;
}

.navbar .buttons a:not(:last-child) {
  margin-right: 30px;
}

.navbar .buttons .signin:hover {
  color: #47b2e4;
}

.navbar .buttons .signup {
  border: 1px solid #fff;
  padding: 10px 20px;
  border-radius: 0.375rem;
  text-align: center;
  transition: 0.2s ease;
}

.navbar .buttons .signup:hover {
  background-color: #47d9e4;
  color: #fff;
}



  body {
    font-family: "Inter", Arial, Helvetica, sans-serif;
  }
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 300S;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>