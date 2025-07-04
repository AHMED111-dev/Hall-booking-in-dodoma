<?php
require_once 'config.php';

$admins = [
    ['Ahmed', 'ahmed@gmail.com', 'admin111'],
    ['Tonny', 'tonny@gmail.com', 'admin222'],
    ['Rozena', 'rozena@gmail.com', 'admin333'],
];

foreach ($admins as $admin) {
    $name = $admin[0];
    $email = $admin[1];
    $pass = password_hash($admin[2], PASSWORD_DEFAULT);
    $role = 'admin';
    $address = 'Admin Office';
    $phone = '0787927785';

    $stmt = $con->prepare("INSERT INTO users (name, email, pass, role, address, phonenum) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $pass, $role, $address, $phone);
    $stmt->execute();
}

echo "Admins added successfully.";
?>
