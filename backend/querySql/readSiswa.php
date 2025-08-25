<?php
    include __DIR__ . '/../database.php';
    $sql = 'SELECT * FROM siswa';
    $tampil = $conn->query($sql);
?>