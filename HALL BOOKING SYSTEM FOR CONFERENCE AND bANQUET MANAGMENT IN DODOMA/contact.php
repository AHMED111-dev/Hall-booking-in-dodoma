<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALL BOOKING SYSTEM FOR CONFERENCE AND BANQUET MANAGMENT IN DODOMA-CONTACT</title>
    
    <!--links --->
    <?php require('inc/links.php'); ?>
     <style>
        .h-line{
            width: 150px;
            margin: 0 auto;
            height:1.7px;
        }
     </style>
    
</head>
<body class="bg-light">

<!--header --->
<?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        
        <br>
        
    </p>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
              <iframe class="w=100 rounded mb=4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6416813931332!2d35.75632757377949!3d-6.17869496054079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de5465dedc769%3A0xafc333897f8dae02!2sCollege%20of%20Business%20Education!5e0!3m2!1sen!2stz!4v1748843699768!5m2!1sen!2stz"></iframe>
              <h5>Address</h5>
              <a href="https://maps.app.goo.gl/YUkZzS3yfwPhvvQe9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i>CBE,Dodoma Campus.
              </a>

              <h5 class="mt-4">Call us</h5>
              <a href="tel: +255787927785" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +255787927785 
              </a><br>
              <a href="tel: +255787927785" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +255787927785 
              </a>

              <h5 class="mt-4">Email</h5>
              <a href="mailto: ask.bitwebdev@gmail.com" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-envelope-fill"></i>ask.bitwebdev@gmail.com
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
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
              <form>
                <h5>Send a message</h5>
                <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Name</label>
                  <input type="text" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Email</label>
                  <input type="email" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Subject</label>
                  <input type="text" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Message</label>
                  <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                  </div>
                   <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
              </form>
              
            </div>
        </div>
    </div>
  </div>


   

  <!--footer --->
 <?php require('inc/footer.php'); ?>










</body>
</html>