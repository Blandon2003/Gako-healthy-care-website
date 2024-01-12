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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $specialty = $_POST['specialty'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Check if the email already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM doctor WHERE email = :email");
    $stmt->execute(array(':email' => $email));
    $existingDoctor = $stmt->fetch();

    if ($existingDoctor) {
        // Email already taken, display an error message
        echo "Email already taken.";
    } else {
        // Insert the doctor's information into the database
        $stmt = $pdo->prepare("INSERT INTO doctor (fname, lname, email, specialty, phone, address) VALUES (:fname, :lname, :email, :specialty, :phone, :address)");
        $stmt->execute(array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':specialty' => $specialty,
            ':phone' => $phone,
            ':address' => $address
        ));

        // Doctor information inserted successfully
        echo "Doctor information inserted successfully.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor Form</title>
    <link rel="stylesheet" href="add doctor.css">
</head>
<body>
    <section class="container">
        
        <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <header>Add Doctor</header>
            <div class="input-box">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="Enter first name" required /><br>
            </div>

            <div class="input-box">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Enter last name" required /><br>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" required /><br>
            </div>

            <div class="input-box">
                <label>Specialty</label>
                <input type="text" name="specialty" placeholder="Enter specialty" required /><br>
            </div>

            <div class="input-box">
                <label>Phone Number</label>
                <input type="number" name="phone" placeholder="Enter phone number" required /><br>
            </div>

            <div class="input-box">
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter address" required /><br>
            </div>

            <input type="submit" name="submit" value="Add Doctor" />
        </form>
    </section>
</body>
</html>