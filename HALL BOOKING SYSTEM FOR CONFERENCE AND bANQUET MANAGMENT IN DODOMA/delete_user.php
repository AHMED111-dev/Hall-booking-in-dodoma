<?php
session_start();
require_once 'config.php';

// Ensure the user is logged in as admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Check if 'id' parameter is set
if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']);

    // Get user email
    $user_email = getUserEmailById($user_id, $con);

    // Check if user exists
    if ($user_email === null) {
        header("Location: admin_manage_user.php?error=user_not_found");
        exit();
    }

    // Prevent admin from deleting themselves
    if ($_SESSION['email'] === $user_email) {
        header("Location: admin_manage_user.php?error=cannot_delete_self");
        exit();
    }

    // Get role of user to delete
    $user_role = getUserRoleById($user_id, $con);
    if ($user_role === null) {
        header("Location: admin_manage_user.php?error=role_not_found");
        exit();
    }

    // Optional: prevent deletion of other admins
    if ($user_role === 'admin') {
        header("Location: admin_manage_user.php?error=cannot_delete_admin");
        exit();
    }

    // Delete user
    $stmt = $con->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: admin_manage_user.php?success=user_deleted");
        exit();
    } else {
        $stmt->close();
        header("Location: admin_manage_user.php?error=delete_failed");
        exit();
    }
}

// If no ID provided
header("Location: admin_manage_user.php?error=invalid_request");
exit();


// --- Utility Functions ---

function getUserEmailById($id, $con) {
    $stmt = $con->prepare("SELECT email FROM users WHERE id = ?");
    if (!$stmt) return null;

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $email = null;          // initialize variable
    $stmt->bind_result($email);
    $stmt->fetch();

    $stmt->close();
    return $email;
}

function getUserRoleById($id, $con) {
    $stmt = $con->prepare("SELECT role FROM users WHERE id = ?");
    if (!$stmt) return null;

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $role = null;           // initialize variable
    $stmt->bind_result($role);
    $stmt->fetch();

    $stmt->close();
    return $role;
}
