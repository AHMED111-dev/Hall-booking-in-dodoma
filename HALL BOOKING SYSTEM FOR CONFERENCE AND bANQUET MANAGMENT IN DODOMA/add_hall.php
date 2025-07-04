<?php
session_start();
require('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];
    $features = $_POST['features'];
    $facilities = $_POST['facilities'];
    $price = $_POST['price'];

    // Handle image upload
    $image = '';
    if ($_FILES['image']['name']) {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
    }

    $stmt = $con->prepare("INSERT INTO halls (name, capacity, features, facilities, price, image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissds", $name, $capacity, $features, $facilities, $price, $image);
    $stmt->execute();

    header("Location: manage_halls.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Hall</title>
    <?php require('inc/links.php'); ?>
</head>
<body>
    <div class="container mt-5">
        <h3>Add New Hall</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3"><label>Name:</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label>Capacity:</label><input type="number" name="capacity" class="form-control" required></div>
            <div class="mb-3"><label>Features:</label><textarea name="features" class="form-control"></textarea></div>
            <div class="mb-3"><label>Facilities:</label><textarea name="facilities" class="form-control"></textarea></div>
            <div class="mb-3"><label>Price (Tsh):</label><input type="number" name="price" class="form-control" required></div>
            <div class="mb-3"><label>Image:</label><input type="file" name="image" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Add Hall</button>
        </form>
    </div>
</body>
</html>
