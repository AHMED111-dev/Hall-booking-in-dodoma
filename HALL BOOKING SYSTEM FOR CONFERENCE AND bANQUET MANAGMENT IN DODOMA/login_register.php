<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ========== USER REGISTRATION ==========
    if (isset($_POST['register'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phonenum = trim($_POST['phonenum']);
        $address = trim($_POST['address']);
        $password = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];

        // --- VALIDATION ---
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['register_error'] = 'Invalid email format';
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $_SESSION['register_error'] = 'Name must only contain letters and spaces';
        } elseif (!preg_match('/^\d{10,15}$/', $phonenum)) {
            $_SESSION['register_error'] = 'Phone number must be 10-15 digits';
        } elseif (strlen($password) < 6) {
            $_SESSION['register_error'] = 'Password must be at least 6 characters';
        } elseif ($password !== $confirm_pass) {
            $_SESSION['register_error'] = 'Passwords do not match';
        } else {
            // --- CHECK IF EMAIL EXISTS ---
            $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $_SESSION['register_error'] = 'Email already exists';
            } else {
                // --- INSERT USER ---
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $insert = $con->prepare("INSERT INTO users (name, email, pass, role, address, phonenum) VALUES (?, ?, ?, 'user', ?, ?)");
                $insert->bind_param("sssss", $name, $email, $hashed, $address, $phonenum);

                if ($insert->execute()) {
                    $_SESSION['active_form'] = 'login';
                    header("Location: index.php?login=true&register=success");
                    exit();
                } else {
                    $_SESSION['register_error'] = 'Database error: ' . $con->error;
                }
            }
        }

        $_SESSION['active_form'] = 'register';
        header("Location: index.php?register=true");
        exit();
    }

    // ========== USER LOGIN ==========
    if (isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = $_POST['pass'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['login_error'] = 'Invalid email format';
        } else {
            $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['pass'])) {
                    // --- LOGIN SUCCESSFUL ---
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['role'] = $user['role'];

                    if ($user['role'] === 'admin') {
                        header("Location: admin_page.php");
                    } else {
                        header("Location: user_page.php");
                    }
                    exit();
                }
            }

            $_SESSION['login_error'] = 'Incorrect email or password';
        }

        $_SESSION['active_form'] = 'login';
        header("Location: index.php?login=true");
        exit();
    }
}
?>
