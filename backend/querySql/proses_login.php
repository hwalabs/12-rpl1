<?php
// mengaktifkan session
session_start();
include __DIR__ . '/../database.php';

$email = $_POST['email'];
$pass = $_POST['password'];
// $sql = "SELECT * FROM pengguna WHERE email='$email' && password='$pass' LIMIT 1";
$sql = "SELECT * FROM pengguna WHERE email='$email' LIMIT 1";
$hasil = $conn->query($sql);

if ($hasil->num_rows > 0) {
    $row= $hasil->fetch_assoc();

    if (password_verify($pass, $row['password'])) {
        $_SESSION['id_pengguna'] = $row['id_pengguna'];
        $_SESSION['nama'] =$row['nama'];
        $_SESSION['email'] =$row['email'];
        
        header("Location: ../../sidebarMenu.php");
    }
} else {
    echo "<script type='text/javascript'>alert('Email atau Password salah!');window.location.href='../../index.php';</script>";
}
