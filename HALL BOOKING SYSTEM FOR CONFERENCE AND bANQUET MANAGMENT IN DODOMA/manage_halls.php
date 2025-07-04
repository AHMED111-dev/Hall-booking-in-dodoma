<?php
session_start();
require('config.php');

// Only allow admins
if (!isset($_SESSION['email']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
    exit();
}

// Handle delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $con->prepare("DELETE FROM halls WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: manage_halls.php");
    exit();
}

// Fetch all halls
$result = $con->query("SELECT * FROM halls");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Halls</title>
    <?php require('inc/links.php'); ?>
</head>
<body>
    <div class="container mt-5">
        <h3>Manage Halls</h3>
        <a href="add_hall.php" class="btn btn-success mb-3">Add New Hall</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Capacity</th>
                    <th>Price (Tsh)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><img src="images/<?= $row['image'] ?>" width="100"></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= $row['capacity'] ?></td>
                        <td><?= number_format($row['price'], 2) ?></td>
                        <td>
                            <a href="edit_hall.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
