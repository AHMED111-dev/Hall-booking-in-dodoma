<?php
if (session_status() === PHP_SESSION_NONE) session_start();

$errors = [
  'login' => $_SESSION['login_error'] ?? '',
  'register' => $_SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? '';

unset($_SESSION['login_error'], $_SESSION['register_error'], $_SESSION['active_form']);


function showError($error) {
  return !empty($error) ? "<p class='text-danger px-3'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
  return $formName === $activeForm ? 'active' : '';
}
?>

<style>
  .navbar-brand {
    font-family: 'Segoe UI', sans-serif;
    letter-spacing: 1px;
    transition: all 0.3s ease-in-out;
  }

  .navbar-nav .nav-link {
    font-weight: 500;
    margin-right: 10px;
    transition: color 0.2s ease-in-out;
  }

  .navbar-nav .nav-link:hover,
  .navbar-nav .nav-link.active {
    color: green !important;
  }

  .btn-custom {
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .btn-custom:hover {
    background-color: green;
    color: white;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-4 py-3 shadow-sm sticky-top">
  <div class="container-fluid">
    <i class="bi bi-house-check-fill"></i>
    <a class="navbar-brand fw-bold fs-4" href="#">HALL BOOKING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="halls.php">Halls</a></li>
        <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-dark btn-custom me-2" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
        <button class="btn btn-outline-dark btn-custom" data-bs-toggle="modal" data-bs-target="#registermodal">Register</button>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade <?= isActiveForm('login', $activeForm) ?>" id="loginmodal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="login_register.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title"><i class="bi bi-person-circle me-2"></i>User Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <?= showError($errors['login']); ?>
        <div class="modal-body">
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" name="login" class="btn btn-dark">LOGIN</button>
            <a href="#">Forgot Password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade <?= isActiveForm('register', $activeForm) ?>" id="registermodal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="login_register.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title"><i class="bi bi-person-lines-fill me-2"></i>User Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <?= showError($errors['register']); ?>
        <div class="modal-body">
          <span class="badge bg-light text-dark mb-3">
            Note: Your details must match with NIDA, Passport, Driving License, etc.
          </span>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Name</label>
              <input name="name" type="text" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Email</label>
              <input name="email" type="email" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Phone Number</label>
              <input name="phonenum" type="text" class="form-control" required>
            </div>
            <div class="col-md-12 mb-3">
              <label>Address</label>
              <textarea name="address" class="form-control" rows="1" required></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label>Password</label>
              <input name="pass" type="password" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Confirm Password</label>
              <input name="confirm_pass" type="password" class="form-control" required>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" name="register" class="btn btn-dark">REGISTER</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



