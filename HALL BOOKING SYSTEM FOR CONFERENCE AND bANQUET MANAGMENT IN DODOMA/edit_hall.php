<?php
session_start();
require_once 'config.php';

// Only admin access
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Validate hall ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: manage_halls.php");
    exit();
}

$hall_id = intval($_GET['id']);

// Fetch existing hall data
$stmt = $con->prepare("SELECT * FROM halls WHERE id = ?");
$stmt->bind_param("i", $hall_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    header("Location: manage_halls.php");
    exit();
}

$hall = $result->fetch_assoc();
$message = "";

// Handle update form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    
    $features = trim($_POST['features']);
    $facilities = trim($_POST['facilities']);
    $price = trim($_POST['price']);

    $image = $hall['image']; // Default to old image

    // If new image uploaded
    if (!empty($_FILES['image']['name'])) {
        $img_name = basename($_FILES['image']['name']);
        $target = "uploads/" . $img_name;
        $img_type = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        // Validate image type
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];
        if (in_array($img_type, $allowed)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $image = $img_name;
            } else {
                $message = "<div class='alert alert-danger'>Image upload failed.</div>";
            }
        } else {
            $message = "<div class='alert alert-danger'>Invalid image format (JPG, PNG, WEBP only).</div>";
        }
    }

    // Update database
    if (empty($message)) {
        $update = $con->prepare("UPDATE halls SET name=?, features=?, facilities=?, price=?, image=? WHERE id=?");
        $update->bind_param("sssssi", $name, $features, $facilities, $price, $image, $hall_id);

        if ($update->execute()) {
            $message = "<div class='alert alert-success'>Hall updated successfully.</div>";

            // Refresh hall data
            $stmt->execute();
            $result = $stmt->get_result();
            $hall = $result->fetch_assoc();
        } else {
            $message = "<div class='alert alert-danger'>Update failed: " . $con->error . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Hall</title>
  <?php require('inc/links.php'); ?>
  <style>
    .form-control, .btn {
      box-shadow: none;
    }
    .form-label {
      font-weight: 500;
    }
  </style>
</head>
<body class="bg-light">

<?//php require('inc/admin_header.php'); ?>

<div class="container py-5">
  <h3 class="mb-4 text-center">Edit Hall: <?= htmlspecialchars($hall['name']) ?></h3>

  <?= $message ?>

  <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
    <div class="mb-3">
      <label class="form-label">Hall Name</label>
      <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($hall['name']) ?>" required>
    </div>

   <!-- <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" rows="4" class="form-control" required><?= htmlspecialchars($hall['description']) ?></textarea>
    </div>-->

    <div class="mb-3">
      <label class="form-label">Features (comma-separated)</label>
      <input type="text" name="features" class="form-control" value="<?= htmlspecialchars($hall['features']) ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Facilities (comma-separated)</label>
      <input type="text" name="facilities" class="form-control" value="<?= htmlspecialchars($hall['facilities']) ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Price per Day (Tsh)</label>
      <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($hall['price']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Current Image</label><br>
      <?php if (!empty($hall['image'])): ?>
        <img src="uploads/<?= htmlspecialchars($hall['image']) ?>" width="150" class="rounded">
      <?php else: ?>
        <p class="text-muted">No image uploaded</p>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label class="form-label">Change Image (optional)</label>
      <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success w-100">Update Hall</button>
    <a href="manage_halls.php" class="btn btn-secondary mt-2 w-100">Back to Hall Management</a>
  </form>
</div>

</body>
</html>
