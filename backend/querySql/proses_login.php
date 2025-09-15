<?php
    include __DIR__ . '/../database.php';

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM pengguna WHERE email='$email' && password='$pass' LIMIT 1";
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
        header("Location: ../../sidebarMenu.php");
    } else {
        echo "Email atau Password Salah";
    }
?>