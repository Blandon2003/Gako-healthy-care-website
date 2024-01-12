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
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <a href="paydash.php">
          <i class='bx bxs-edit-alt'></i>
            <span class="links_name">payment</span>
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
        <li>
          <a href="login.php">
          <i class='bx bxs-file-import'></i>
            <span class="links_name">Access Page</span>
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
            <div class="box-topic">Total Bed</div>
            <div class="number">200</div>
            <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-heart' style="font-size: 200%;"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Doctors</div>
            <div class="number">100</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
        <i class='bx bx-user-pin' style="font-size: 200%" ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total ambulance</div>
            <div class="number">5</div>
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

      <!-- HTML canvas element to render the chart -->
<canvas id="myChart" width="400" height="200"></canvas>

<script>
// Sample data for the chart
var data = {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
        label: 'Sample Chart',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: [65, 59, 20, 81, 56],
    }]
};

// Chart configuration
var options = {
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

// Get the canvas element
var ctx = document.getElementById('myChart').getContext('2d');

// Create a bar chart
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
</script>


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