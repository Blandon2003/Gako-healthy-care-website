<?php
$host = 'localhost';
$db = 'healthycare';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $street2 = $_POST['street2'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $zip = $_POST['zip'];

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM registration WHERE email = '$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);
    if ($checkEmailResult->num_rows > 0) {
        echo "The email '$email' is already taken. Please choose a different email.<br>";
    } else {
        // Insert the data into the 'registration' table
        $insertQuery = "INSERT INTO registration (fname, mname, lname, email, phone, dob, gender, street, street2, province, city, region, zip, password, confirmpassword)
                        VALUES ('$fname', '$mname', '$lname', '$email', '$phone', '$dob', '$gender', '$street', '$street2', '$province', '$city', '$region', '$zip','$password', '$confirmpassword')";
        if ($conn->query($insertQuery) === true) {
            echo "Data inserted successfully.<br>";
            header("Location: login.php");
            exit;
        } else {
            echo "Error inserting data: " . $conn->error . "<br>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="registration2.css" />
  </head>
  <body>
    <section class="container">
    <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <header>Registration healthy</header>
        <div class="input-box">
          <label>first Name</label>
          <input type="text" name="fname" placeholder="Enter first name" required /></br>
          <label>middle name</label>
          <input type="text" name="mname" placeholder="Enter middle name" required /></br>
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Enter Last name" required /></br>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="dob" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="street" placeholder="Enter street address" required /></br>
          <input type="text" name="street2" placeholder="Enter street address line 2" required />
          <div class="column">
          <div class="select-box">
                    <select name="province">
                        <option hidden>Select Province</option>
                        <option value="S">SOUTHERN</option>
                        <option value="N">Northern</option>
                        <option value="E">Eastern</option>
                        <option value="W">Western</option>
                        <option value="K">Kigali City</option>
                    </select>
                </div>
            <input type="text" name="city" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" name="region" placeholder="Enter your region" required /></br>
            <input type="number" name="zip" placeholder="Enter postal code" required />
          </div>
          <label for="">password</label>
          <input type="password" name="password" placeholder="enter password" required>
          <label for="">confirm password</label>
          <input type="password" name="confirmpassword" placeholder="enter confirm password" required>
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>