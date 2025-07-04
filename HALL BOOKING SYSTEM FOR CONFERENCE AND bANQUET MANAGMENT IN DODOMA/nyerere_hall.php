<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALL BOOKING SYSTEM FOR CONFERENCE AND BANQUET MANAGMENT IN DODOMA-ABOUT</title>
    
    <!--links --->
    <?php require('inc/links.php'); ?>
     <style>
        .h-line{
            width: 150px;
            margin: 0 auto;
            height:1.7px;
        }
        .box{
          border-top-color: var(--teal) !important; 
        }

        .card-hover {
      transition: transform 0.3s;
      cursor: pointer;
    }

    .card-hover:hover {
      transform: scale(1.03);
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
<?php require('inc/user_header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">THE MWALIMU NYERERE HALL-IRDP</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center fw-bold mt-3">
        
        
        <br>
        
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="card-hover col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <iframe class="w=100 rounded mb=4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.061982230664!2d35.7431766737785!3d-6.122360460031244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de5fe98d8fc3f%3A0xd07aa4b29b5876ba!2sThe%20Mwalimu%20Nyerere%20Hall!5e0!3m2!1sen!2stz!4v1751353372720!5m2!1sen!2stz"></iframe>
              <h5>Address</h5>
              <a href="https://maps.app.goo.gl/HSmuzgir8UAyZpXU7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i>NYERERE HALL-IRDP
              </a>

              

              

              <h5 class="mt-4">Follow us</h5>
                  <a href="#" class="d-inline-block text-dark mb-3 fs-6 p-2">
                  <i class="bi bi-twitter me-i"></i>
                  </a>
                  <a href="#" class="d-inline-block text-dark mb-3 fs-6 p-2">
                  <i class="bi bi-facebook me-i"></i>
                  </a>
                  <a href="#" class="d-inline-block text-dark mb-3 fs-6 p-2">
                  <i class="bi bi-instagram me-i"></i>
                  </a>
            </div>
        </div>
      <div class="col-lg-5 col-mb-5 mb-4 order-1">
        <img src="image" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="card-hover col-lg-3 col-mb-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <i class="bi bi-houses fs-2 me-8 text-danger"></i>
          <h4 class"mt-3">1 MAIN HALLS</h4>
        </div>
      </div>
      <div class="card-hover col-lg-3 col-mb-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <i class="bi bi-people fs-2 me-8 text-primary"></i>
          <h4 class"mt-3">1000+ CAPACITY</h4>
        </div>
      </div>
      <div class="card-hover col-lg-3 col-mb-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          
          <i class="bi bi-star-fill fs-2 me-8 text-warning"></i>
          <i class="bi bi-star-fill fs-2 me-8 text-warning"></i>
          <i class="bi bi-star-fill fs-2 me-8 text-warning"></i>
          <i class="bi bi-star-fill fs-2 me-8 text-warning"></i>
          <h4 class"mt-3">RATINGS</h4>
        </div>
      </div>
      <div class="card-hover col-lg-3 col-mb-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <i class="bi bi-cash-coin fs-2 me-8 text-secondary"></i>
          <h4 class"mt-3">... Tsh</h4>
        </div>
      </div>
    </div>
  </div>



  <!---check availability form--->
<div class="container">
  <div class="row">
    <div class="card-hover col-lg-12 bg-white shadow p-2 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Check-in</label>
            <input type="date" class="form-control shadow-none"> 
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Check-out</label>
            <input type="date" class="form-control shadow-none"> 
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">People</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Capacity</option>
                <option value="1">Less than 100</option>
                <option value="2">Less than 300</option>
                <option value="3">Less than 500</option>
                <option value="4">Less than 800</option>
                <option value="5">less than 1000</option>
                <option value="6">Less than 1500</option>
            </select>
          </div>
          <div class="col-lg-3 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  
   

  <!--footer --->
 <?php require('inc/footer.php'); ?>










</body>
</html>