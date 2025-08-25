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
    <style>
      .sidebar {
        height: 100vh;
        width: 250px;
        background-color: darkslategray;
        position: fixed;
      }
      .sidebar a {
        display: flex;
        align-items: center;
        text-decoration: none;
        padding: 10px 20px;
        color: white;
        font-size: 15px;
      }
      .sidebar a:hover {
        background-color: darkcyan;
      }
      .sidebar i {
        margin-right: 10px;
        font-size: 18px;
      }
      .content {
        padding-top: 20px;
        padding: 30px;
        margin-left: 250px;
      }
      .content iframe {
        width: 100%;
        height: 100vh;
        border: none;
        overflow: hidden;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <h4 class="text-center text-white py-3">Admin</h4>
      <a href="konten/Dashboard/" target="kontenFrame">
        <i class="bi bi-house"></i> Dashboard
      </a>
      <a
        data-bs-toggle="collapse"
        href="#menuSiswa"
        role="button"
        aria-expanded="false"
        aria-controls="menuSiswa"
      >
        Siswa
      </a>
      <div class="collapse submenu ms-4" id="menuSiswa">
        <a href="konten/DataSiswa/" target="kontenFrame">
          <i class="bi bi-person-plus"></i> Input Data Siswa
        </a>
        <a href="./konten/DataSiswa/dataSiswa.php" target="kontenFrame">
          <i class="bi bi-people"></i> Data Siswa
        </a>
      </div>

      <a href="./konten/DataGuru/index.html" target="kontenFrame">
        <i class="bi bi-person-badge"></i> Data Guru
      </a>
    </div>

    <div class="content">
      <iframe src="konten/Dashboard/index.html" name="kontenFrame"></iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
