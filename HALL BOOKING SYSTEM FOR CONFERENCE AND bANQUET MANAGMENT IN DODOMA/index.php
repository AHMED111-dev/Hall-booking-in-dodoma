<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HALL BOOKING SYSTEM FOR CONFERENCE AND BANQUET MANAGMENT IN DODOMA-HALLS</title>

  <?php require('inc/links.php'); ?> 

  <style>
    .hero {
      background: url('images/hero-bg.jpg') center center/cover no-repeat;
      color: white;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .custom-bg {
      background-color: green;
    }

    .custom-bg:hover {
      background-color: darkgreen;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      margin-top: 50px;
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

  <?php require('inc/header.php'); ?>

  <!-- HERO SECTION -->
  <section class="hero">
    <div>
      <h1>Welcome to Dodoma Hall Booking</h1>
      <p class="lead">Book conference and banquet halls easily and quickly.</p>
      <a href="#halls" class="btn btn-lg btn-light mt-3">Explore Halls</a>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section class="container my-5">
    <div class="row">
      <div class="col-lg-6">
        <img src="images/about.jpg" alt="About Us" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6">
        <h2 class="mb-3">About Our System</h2>
        <p>Our hall booking system helps individuals, companies, and organizations in Dodoma to find and reserve the perfect venue for their events. Whether it's a small meeting or a large banquet, we’ve got you covered.</p>
        <p>Secure, simple, and efficient — make your reservation today!</p>
      </div>
    </div>
  </section>

  <!-- FEATURED HALLS -->
  <section id="halls" class="container my-5">
    <h2 class="section-title"> Halls</h2>
    <div class="row mt-4">
      <div class="col-md-4 mb-5 px-4">
        <div class="card shadow card-hover">
          <img src="images/hall1.jpg" class="card-img-top" alt="Hall 1">
          <div class="card-body">
            <h5 class="card-title">JK CONVENTION CENTRE.</h5>
            <p class="card-text">Capacity: 1500 people, 1 main +3 sub halls</p>
            <h6 class="mb-4">....Tsh per day</h6>
            <a href="index.php?register=true"  class="btn btn-sm custom-bg text-white">BOOK NOW</a>
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

  <!-- TESTIMONIALS -->
  <section class="container my-5">
    <h2 class="section-title">What Our Users Say</h2>
    <div class="row mt-4">
      <div class="col-md-4 card-hover">
        <div class="bg-white p-3 shadow rounded">
          <p>“Booking a hall has never been easier. Highly recommend this platform!”</p>
          <h6>- Asha M.</h6>
        </div>
      </div>
      <div class="col-md-4 card-hover">
        <div class="bg-white p-3 shadow rounded">
          <p>“We hosted our wedding here — everything was perfect and smooth.”</p>
          <h6>- Peter K.</h6>
        </div>
      </div>
      <div class="col-md-4 card-hover">
        <div class="bg-white p-3 shadow rounded">
          <p>“Fast, reliable, and user-friendly. I will use it again.”</p>
          <h6>- Jane D.</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT / REACH US -->
  <section class="container my-5">
    <h2 class="section-title">Reach Us</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <p><strong>Phone:</strong> +255 787 927 785</p>
        <p><strong>Email:</strong> hallbookingdodoma@gmail.com</p>
        <p><strong>Location:</strong> Dodoma, Tanzania</p>
      </div>
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6416813931332!2d35.75632757377949!3d-6.17869496054079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de5465dedc769%3A0xafc333897f8dae02!2sCollege%20of%20Business%20Education!5e0!3m2!1sen!2stz!4v1748843699768!5m2!1sen!2stz" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <?php require('inc/footer.php'); ?>

  <!----<script>
    document.addEventListener('DOMContentLoaded', function () {
      const urlParams = new URLSearchParams(window.location.search);
      const activeForm = urlParams.get("register") ? "register" : (urlParams.get("login") ? "login" : "");


      if (activeForm === "register") {
        const registerModal = new bootstrap.Modal(document.getElementById('registermodal'));
        registerModal.show();
      }

      if (activeForm === "login") {
        const loginModal = new bootstrap.Modal(document.getElementById('loginmodal'));
        loginModal.show();
      }
    });
  </script>   ------>

  <!---<script>
  document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get('register') === 'true') {
      const registerModal = new bootstrap.Modal(document.getElementById('registermodal'));
      registerModal.show();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    if (params.get('login') === 'true') {
      const loginModal = new bootstrap.Modal(document.getElementById('loginmodal'));
      loginModal.show();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  });
</script>---->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get('login') === 'true') {
      new bootstrap.Modal(document.getElementById('loginmodal')).show();
    } else if (params.get('register') === 'true') {
      new bootstrap.Modal(document.getElementById('registermodal')).show();
    }
  });
</script>





  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
