<?php
    include __DIR__ . '/../database.php';

    $nama = $_POST['namaAdmin'];
    $email = $_POST['email'];
    $password = $_POST['password']; //1234
    $pass_hash = password_hash($password, PASSWORD_DEFAULT); //md5

    $sql = "INSERT INTO pengguna (nama, email, password) VALUES ('$nama', '$email', '$pass_hash')";
    $hasil = $conn->query($sql);

    if ($hasil) {
        echo "<script type='text/javascript'>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data gagal disimpan!');</script>";
    }



?>