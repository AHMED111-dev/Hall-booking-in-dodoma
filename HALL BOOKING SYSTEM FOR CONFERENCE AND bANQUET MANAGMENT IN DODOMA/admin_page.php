<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php"); // Redirect to login/home
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALL BOOKING SYSTEM FOR CONFERENCE AND BANQUET MANAGMENT IN DODOMA</title>
    
    <!--links --->
    <?php require('inc/links.php'); ?> 

    <style>
      /* Chrome, Safari, Edge, Opera */
       input::-webkit-outer-spin-button,
       input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      /* Firefox 
      input[type=number] {
      -moz-appearance: textfield;
     }*/
     .custom-bg{
      background-color:green;
     }
     .custom-bg:hover{
      background-color:green;
     }



     .card-hover {
      transition: transform 0.3s;
      cursor: pointer;
    }

    .card-hover:hover {
      transform: scale(1.03);
    }


    </style>
</head>
<body class="bg-light">


<div class="container py-5">
  <h3 class="text-center mb-4 fw-bold">Welcome Admin <?= $_SESSION['name']; ?> </h3>
  <div class="row g-4">

    <!-- Users -->
    <div class="col-md-4">
      <a href="admin_manage_user.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-people-fill fs-1 text-primary"></i>
            <h5 class="mt-3">Manage Users</h5>
            <p class="text-muted">View, edit or delete users</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Halls -->
    <div class="col-md-4">
      <a href="manage_halls.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-building fs-1 text-success"></i>
            <h5 class="mt-3">Manage Halls</h5>
            <p class="text-muted">Add or update hall information</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Bookings -->
    <div class="col-md-4">
      <a href="manage_bookings.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-calendar-check fs-1 text-warning"></i>
            <h5 class="mt-3">Manage Bookings</h5>
            <p class="text-muted">Approve, cancel, or view bookings</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Messages -->
    <div class="col-md-4">
      <a href="messages.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-envelope-fill fs-1 text-danger"></i>
            <h5 class="mt-3">Messages</h5>
            <p class="text-muted">Read customer inquiries</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Reports -->
    <div class="col-md-4">
      <a href="reports.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-graph-up-arrow fs-1 text-info"></i>
            <h5 class="mt-3">Reports</h5>
            <p class="text-muted">Generate system reports</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Logout -->
    <div class="col-md-4">
      <a href="index.php" class="text-decoration-none text-dark">
        <div class="card card-hover shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-box-arrow-right fs-1 text-secondary"></i>
            <h5 class="mt-3">Logout</h5>
            <p class="text-muted">Sign out of your account</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>




</body>
</html>