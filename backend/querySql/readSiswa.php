<?php
    include __DIR__ . '/../database.php';
    $sql = 'SELECT * FROM siswa';
    $tampil = $conn->query($sql);

    // jumlah siswa
    $sqlJumlahSiswa = "SELECT COUNT(*) AS jumlah_siswa FROM siswa";
    $hasil=$conn->query($sqlJumlahSiswa);
    $baris= $hasil->fetch_assoc();
    $jumlahSiswa = $baris['jumlah_siswa'];
?>