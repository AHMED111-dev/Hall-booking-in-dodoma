<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALL BOOKING SYSTEM FOR CONFERENCE AND BANQUET MANAGMENT IN DODOMA-HALLS</title>
    
    <!--links --->
    <?php require('inc/links.php'); ?>
     <style>
        .h-line{
            width: 150px;
            margin: 0 auto;
            height:1.7px;
        }

        .custom-bg {
      background-color: green;
    }

    .custom-bg:hover {
      background-color: darkgreen;
    }
     </style>
    
</head>
<body class="bg-light">

<!--header --->
<?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR HALLS</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3 fw-bold">
        This page show you all registerd halls and give you
        availability of book the hall you like.
        <br>
        For your favarouble event.
    </p>
  </div>

    <div class="container">
      <div class="row">
        <!-- FEATURED HALLS -->
  <section id="halls" class="container my-5">
    <div class="row mt-4">
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall1.jpg" class="card-img-top" alt="Hall 1">
          <div class="card-body">
            <h5 class="card-title">JK CONVENTION CENTRE.</h5>
            <p class="card-text">Capacity: 1500 people, 1 main +3 sub halls</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall2.jpg" class="card-img-top" alt="Hall 2">
          <div class="card-body">
            <h5 class="card-title">ST.GASPAR CONFERENCE CENTRE.</h5>
            <p class="card-text">Capacity: 800 people, Near-by Hotel</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall3.jpg" class="card-img-top" alt="Hall 3">
          <div class="card-body">
            <h5 class="card-title">THE MWALIMU NYERERE HALL-IRDP</h5>
            <p class="card-text">Capacity: 1000 people, Catering Services</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall3.jpg" class="card-img-top" alt="Hall 3">
          <div class="card-body">
            <h5 class="card-title">CAVILAM</h5>
            <p class="card-text">Capacity: 500 people, Versatile venue</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall3.jpg" class="card-img-top" alt="Hall 3">
          <div class="card-body">
            <h5 class="card-title">VIJANA YOUTH</h5>
            <p class="card-text">Capacity: 300 people, free wi-fi </p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall3.jpg" class="card-img-top" alt="Hall 3">
          <div class="card-body">
            <h5 class="card-title">MIDLAND INN VIEW</h5>
            <p class="card-text">Capacity: 100 people, Free breakfast</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true" class="btn btn-sm custom-bg text-white">BOOK NOW</a>
          </div>
        </div>
      </div>
    </div>
   </section>

      </div>
    </div>



   

  <!--footer --->
 <?php require('inc/footer.php'); ?>










</body>
</html>