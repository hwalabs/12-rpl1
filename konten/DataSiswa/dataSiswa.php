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
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jurusan</th>
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
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tanggal_lahir'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['jurusan'] ?></td>
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
