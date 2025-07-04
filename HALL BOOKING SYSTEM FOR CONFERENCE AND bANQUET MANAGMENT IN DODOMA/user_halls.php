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
     </style>
    
</head>
<body class="bg-light">

<!--header --->
<?php require('inc/user_header.php'); ?>

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

            <div class="col-lg-3 col-md-12 mb-lg-6 mb-4 px-lg-0">
           <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">FILTERS</h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                      <div class="border bg-light p-3 rounded mb=3">
                        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label class="form-label">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                      </div>
                      <div class="border bg-light p-3 rounded mb=3">
                        <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                        <div class="mb-2">
                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f1">Facility one</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f2">Facility two</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Facility three</label>
                        </div>
                      </div>
                      <div class="border bg-light p-3 rounded mb=3">
                        <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                        <div class="d-flex">
                            <div class="me-3" >
                              <label class="form-label">Adults</label>
                              <input type="number" class="form-control shadow-none">  
                            </div>
                            <div >
                              <label class="form-label">Children</label>
                              <input type="number" class="form-control shadow-none">  
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </nav> 
            </div>

            <div class="col-lg-9 col-md-12 px-4">
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">JK CONVENTION CENTRE.</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       3 Sub halls 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1500 Capacity 
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          QLED-HD TV 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2  text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="jk_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">ST.GASPAR CONFERENCE CENTRE.</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Capacity 800 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Near-by Hotel 
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Pool & Free breakfast 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="gaspar_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">NYERERE HALL-IRDP</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Capacity 1000
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Versatile venue
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          QLED-HD TV 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="nyerere_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">CAVILAM</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Capacity 500
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Versatile venue
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          QLED-HD TV 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="cavilam_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">VIJANA YOUTH</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Capacity 300
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       free wi-fi 
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          QLED-HD TV 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="vijana_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                     <img src="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-5:px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">MIDLAND INN VIEW</h5>
                  <div class="features mb-3">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       1 Main hall 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Capacity 100 
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Versatile venue
                       </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class"mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Internal Projector 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Pool & Free breakfast 
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          free wi-fi 
                          </span>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                   <h6 class="mb-4">....Tsh per day</h6>
                   <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                   <a href="midland_hall.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
              </div>
            </div>

             


            

           

     
        </div>
    </div>


   

  <!--footer --->
 <?php require('inc/footer.php'); ?>










</body>
</html>