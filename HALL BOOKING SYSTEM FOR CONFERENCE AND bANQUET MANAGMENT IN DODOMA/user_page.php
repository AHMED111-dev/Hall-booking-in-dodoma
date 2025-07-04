<?php
session_start();
require('config.php');

if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'user') {
    header('Location: index.php');
    exit();
}

// Fetch halls
$stmt = $con->prepare("SELECT * FROM halls ORDER BY id DESC");
$stmt->execute();
$halls = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard - Halls</title>
  <?php require('inc/links.php'); ?>
  <style>
    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 2px;
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

    .badge {
      margin-right: 5px;
      margin-bottom: 5px;
    }
  </style>
</head>
<body class="bg-light">

<?php require('inc/user_header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold text-center">OUR HALLS</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3 fw-bold">Browse and book available halls for your event in Dodoma</p>
</div>

<div class="container">
  <div class="row">
    <?php while ($hall = $halls->fetch_assoc()): ?>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-hover border-0 shadow">
          <?php if (!empty($hall['image'])): ?>
            <img src="uploads/<?= htmlspecialchars($hall['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($hall['name']) ?>">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($hall['name']) ?></h5>
            <!---<p class="card-text"><?//= nl2br(htmlspecialchars($hall['description'])) ?></p>---->

            <?php if (!empty($hall['features'])): ?>
              <h6>Features</h6>
              <?php foreach (explode(',', $hall['features']) as $feature): ?>
                <span class="badge bg-light text-dark"><?= htmlspecialchars(trim($feature)) ?></span>
              <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($hall['facilities'])): ?>
              <h6 class="mt-3">Facilities</h6>
              <?php foreach (explode(',', $hall['facilities']) as $facility): ?>
                <span class="badge bg-light text-dark"><?= htmlspecialchars(trim($facility)) ?></span>
              <?php endforeach; ?>
            <?php endif; ?>

            <div class="mt-3">
              <h6><?= number_format($hall['price']) ?> Tsh / day</h6>
              <a href="book_hall.php?hall_id=<?= $hall['id'] ?>" class="btn btn-sm w-100 text-white custom-bg">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>
