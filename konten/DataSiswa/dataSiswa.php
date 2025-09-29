<?php
  session_start();
  if (!isset($_SESSION['id_pengguna'])) {
    header("Location: ../../index.php");
    exit();
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <?php
      include '../../backend/querySql/readSiswa.php';
    ?>
    <div class="container">
      <div class="row justify-content-center">
        <table class="table w-100">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col" class="w-25">Tanggal Lahir</th>
              <th scope="col" class="w-25">Jenis Kelamin</th>
              <th scope="col" class="w-25">Jurusan</th>
              <th scope="col" class="w-25">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              while ($data = mysqli_fetch_assoc($tampil)) {
                $no++;
            ?> 
              <tr>
                <td><?= $no ?></td>
                <td class="w-50"><?= $data['nama'] ?></td>
                <td class="w-25"><?= $data['tanggal_lahir'] ?></td>
                <td class="w-25"><?= $data['jenis_kelamin'] ?></td>
                <td class="w-25"><?= $data['jurusan'] ?></td>
                <td class="w-25"><a href="formEditSiswa.php?id_siswa=<?= $data['id_siswa'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td class="w-25"><a href="../../backend/querySql/deleteSiswa.php?id_siswa=<?=$data['id_siswa'] ?>" onclick="return confirm('Yakin mau hapus data siswa ini?')"><i class="bi bi-trash text-danger"></i></a></td>
              </tr>
            <?php
            }
            ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
