<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <title>Document</title>
</head>

<body>
  <?php
    include __DIR__ . '/../../backend/querySql/readSiswa.php'
  ?>
  <div class="container-fluid p-0">
    <h4>Selamat datang, ini adalah halaman dashboard!</h4>
    <div class="row">
      <div class="col-sm-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-muted">Guru</h3>
            <h4><i class="bi bi-people-fill"></i><?= $jumlahSiswa ?></h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-muted">Siswa</h3>
            <h4><i class="bi bi-people-fill"></i> 1000</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>