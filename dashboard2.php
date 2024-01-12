<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Admin Dashboard </title>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">Gako healthy</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Medecine</span>
          </a>
        </li>
        <li>
          <a href="bookdash.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">appointment list</span>
          </a>
        </li>
        <li>
          <a href="dashboard2.php">
          <i class='bx bx-low-vision'></i>
            <span class="links_name">all doctors</span>
          </a>
        </li>
        <li>
          <a href="add doctor.php">
          <i class='bx bx-plus'></i>
            <span class="links_name">Add Doctors</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">services</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class='bx bxs-edit-alt'></i>
            <span class="links_name">Order medecine</span>
          </a>
        </li>
        <li>
          <a href="messagedash.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="c:\Users\Blandon\OneDrive\Pictures\BLAISE.jpg" alt="">
        <span class="admin_name">Blandon</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total liked</div>
            <div class="number">40,876</div>
            <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-heart' style="font-size: 200%;"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total visitors</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
        <i class='bx bx-user-pin' style="font-size: 200%" ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total cared</div>
            <div class="number">12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-heart' style="font-size: 200%;"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">contact received </div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bx-receipt' style="font-size: 200%;"></i>
        </div>
      </div>

      <h1>all Doctors</h1>
            <table>
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

// Check if the "View" button is clicked
if (isset($_GET['view'])) {
    $doctorId = $_GET['view'];

    // Retrieve the doctor's information from the database
    $stmt = $pdo->prepare("SELECT * FROM doctor WHERE id = :id");
    $stmt->execute(array(':id' => $doctorId));
    $doctor = $stmt->fetch();

    // Display the doctor's information
    if ($doctor) {
        echo "fname: " . $doctor['fname'] . "<br>";
        echo "lname: " . $doctor['lname'] . "<br>";
        echo "email: " . $doctor['email'] . "<br>";
        echo "specialty: " . $doctor['specialty'] . "<br>";
        echo "phone: " . $doctor['phone'] . "<br>";
        echo "address: " . $doctor['address'] . "<br>";
    } else {
        echo "Doctor not found.";
    }
}

// Retrieve and display all doctors in a table
$stmt = $pdo->query("SELECT * FROM doctor");
$doctors = $stmt->fetchAll();

echo "<table>";
echo "<tr><th>fname</th><th>lame</th><th>email</th><th>specialty</th><th>phone</th><th>address</th><th>Actions</th></tr>";

foreach ($doctors as $doctor) {
    echo "<tr>";
    echo "<td>" . $doctor['fname'] . "</td>";
    echo "<td>" . $doctor['lname'] . "</td>";
    echo "<td>" . $doctor['email'] . "</td>";
    echo "<td>" . $doctor['specialty'] . "</td>";
    echo "<td>" . $doctor['phone'] . "</td>";
    echo "<td>" . $doctor['address'] . "</td>";

    // Edit button
    echo "<td><a href='edit.php?id=" . $doctor['id'] . "'>Edit</a></td>";

    // Delete button
    echo "<td><a href='delete.php?id=" . $doctor['id'] . "' onclick='return confirm(\"Are you sure you want to delete this doctor?\");'>Delete</a></td>";

    echo "</tr>";
}

echo "</table>";
?>
        
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>