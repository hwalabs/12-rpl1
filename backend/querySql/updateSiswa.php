<?php
include __DIR__ . '/../database.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['namaSiswa'];
    $tanggal_lahir = $_POST['ttl'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];

    $sqlUpdateSiswa = "UPDATE siswa SET nama='$nama', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan' WHERE id_siswa=$id";

    $hasil=$conn->query($sqlUpdateSiswa);

    if ($hasil) {
        header("location: ../../konten/DataSiswa/dataSiswa.php");
    } else{
        echo 'Gagal Update Data Siswa';
    }
}
