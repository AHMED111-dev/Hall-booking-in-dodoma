<?php
session_start();
require_once 'config.php';

// Check if admin is logged in
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Fetch all users from the database
$query = "SELECT id, name, email, address, phonenum, role FROM users";
$result = $con->query($query);


// Handle messages
$message = '';
$alertClass = '';

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 'user_not_found':
            $message = "User not found.";
            break;
        case 'cannot_delete_self':
            $message = "You cannot delete your own account.";
            break;
        case 'cannot_delete_admin':
            $message = "You cannot delete another admin user.";
            break;
        case 'delete_failed':
            $message = "Failed to delete the user. Please try again.";
            break;
        case 'invalid_request':
            $message = "Invalid request.";
            break;
        case 'role_not_found':
            $message = "User role not found.";
            break;
        default:
            $message = "An unknown error occurred.";
            break;
    }
    $alertClass = 'alert-danger';  // Red alert for errors
} elseif (isset($_GET['success'])) {
    if ($_GET['success'] === 'user_deleted') {
        $message = "User deleted successfully.";
        $alertClass = 'alert-success'; // Green alert for success
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Manage Users</h2>
    <?php if ($message): ?>
        <div class="alert <?= $alertClass ?> alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($message) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php $i = 1; while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phonenum']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['role']) ?></td>
                    <td>
                        <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="7" class="text-center">No users found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
