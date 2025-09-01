<?php
    include __DIR__ . '/../database.php';

    $id = $_GET['id_siswa'];
    $sqlHapusSiswa = "DELETE FROM siswa WHERE id_siswa = $id";
    $hasil = $conn->query($sqlHapusSiswa);

    if ($hasil) {
        header("location: ../../konten/DataSiswa/dataSiswa.php");
    }

?>