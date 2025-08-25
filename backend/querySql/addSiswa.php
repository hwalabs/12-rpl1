<?php
    include __DIR__ . "/../database.php";

    if (isset($_POST['simpan'])) {
        $nama = $_POST['namaSiswa'];
        $tanggal_lahir = $_POST['ttl'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jurusan = $_POST['jurusan'];

        $sqlAddSiswa = "INSERT INTO siswa (nama, tanggal_lahir, jenis_kelamin, jurusan) VALUE ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$jurusan')";

        $hasil = $conn->query($sqlAddSiswa);

        if ($hasil) {
            echo 'data berhasil disimpan';
        } else{
            echo 'data gagal disimpan';
        }
    }

?>